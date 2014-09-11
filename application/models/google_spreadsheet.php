<?php
include_once './application/models/model.php';

use Google\Spreadsheet\DefaultServiceRequest;
use Google\Spreadsheet\ServiceRequestFactory;
/*

Copyright (c) 2009 Dimas Begunoff, http://www.farinspace.com/

Permission is hereby granted, free of charge, to any person obtaining
a copy of this software and associated documentation files (the
"Software"), to deal in the Software without restriction, including
without limitation the rights to use, copy, modify, merge, publish,
distribute, sublicense, and/or sell copies of the Software, and to
permit persons to whom the Software is furnished to do so, subject to
the following conditions:

The above copyright notice and this permission notice shall be
included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE
LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION
WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

*/

class Google_Spreadsheet extends Model
{
	protected $client;

	public $spreadsheet;
	private $spreadsheet_id;

	private $worksheet = "Sheet1";
	private $worksheet_id;
	public $listFeed;
	private $rows;
	private $rowsParsed;
	public $error;

	function __construct($ssName)
	{
		parent::__construct();

		// Accessing the data from the Spreadsheet
		$serviceRequest = new DefaultServiceRequest($this->accessToken);
		ServiceRequestFactory::setInstance($serviceRequest);
		$spreadsheetService = new Google\Spreadsheet\SpreadsheetService();
		$spreadsheetFeed = $spreadsheetService->getSpreadsheets();
		$this->spreadsheet = $spreadsheetFeed->getByTitle($ssName);
		// dd($this->spreadsheet);

		$worksheetFeed = $this->spreadsheet->getWorksheets();
		// dd($worksheetFeed);

		// foreach ($worksheetFeed as $key => $value) {
		// 	d($key, $value);
		// }
		// die();

		$worksheet = $worksheetFeed->getByTitle('Sheet1');
		// d($worksheet);

		$this->listFeed = $worksheet->getListFeed();
		// dd($listFeed);
	}


	public function getRows()
	{
		$values = array();
		foreach ($this->listFeed->getEntries() as $entry) {
			// if ($entry) {
			// 	# code...
			// }
		    $values[] = $entry->getValues();
		    // d($values);
		}
		// d($listFeed);
		$this->rows = $values;
		$this->parseRows();
		return $this->rowsParsed;
	}

	private function array_values_recursive($arr)
	{
		// If we receive something that's not array, return an empty array.
		// if ($a = $this->getIds()) {
		// 	# use $a here.
		// } else {
		// 	// $this->getIds() didn't return a value! or returned false.
		// 	// throw error
		// }

		if (!is_array($arr)) {
			return array();
		}

		$newArr = array();
		foreach ($arr as $value) { // Loop through array.
			if (is_array($value)) { // if the value of this element is an array, we want to dig deeper.
				$newArr[] = $this->array_values_recursive($value); // Sending the value to itself, it will return the value converted to values only.
			} else {
				$newArr[] = $value; // Otherwise, save the value to a new key.
			}
		}

		return $newArr;
	}

	public function parseRows()
	{
		$rows = $this->rows;
		$rows = $this->array_values_recursive($rows);
		$data = array();
		$cols = array();
		foreach ($rows as $rowKey => $row) {
			if (false === $row || // row value = false
				empty($row[0]) || // first column is empty
				(
					1 !== $rowKey &&
					'Position' == $row[0]
				)
			) {
				continue;
			}

			// first column value starts with a *.
			if ('*' == $row[0][0]) {
				// $data[]['HEADER'] = ltrim($row[0], '*');
				$data[] = ltrim($row[0], '*');
				continue;
				// This is a header column, do something with it.
			}

			$newRow = array();
			foreach ($row as $k => $v) {
				if (1 === $rowKey) {
					$cols[$k] = $v;
				} else {
					// $cols[$k] is the value of $cols[$k] which is the name of the column.
					$newRow[$cols[$k]] = $v;
				}
			}

			if (1 != $rowKey) {
				$data[] = $newRow;
			}
		}
		$this->rowsParsed = $data;
	}

	function useSpreadsheet($ss,$ws=FALSE)
	{
		$this->spreadsheet = $ss;
		$this->spreadsheet_id = NULL;
		if ($ws) $this->useWorksheet($ws);
	}

	public function isEmptyRow($currentFirstColumn, $currentSecondColumn)
	{
		if (! isset( $currentFirstColumn ) ||
			is_null( $currentFirstColumn ) ||
			$currentFirstColumn == '' &&
			! isset( $currentSecondColumn ) ||
			is_null( $currentSecondColumn ) ||
			$currentSecondColumn == '') {
			// - THEN: this row is empty so...
			return TRUE;
			// - MOVE TO THE NEXT ROW
		} else {
			$this->error = 'this is not an empty row!';
			return FALSE;
		}
		if (! empty($this->error)) {
			displayError($this->error);
		}
	}


	public function isTeamRow($currentFirstColumn, $currentSecondColumn)
	{
		if (! isEmptyRow($currentFirstColumn, $currentSecondColumn) &&
			! isset( $currentSecondColumn ) ||
			is_null( $currentSecondColumn ) ||
			$currentSecondColumn == '') {
			// - THEN: this IS a team row.
			return TRUE;
			// - set 1st column to be the team name
		} else {
			$this->error = 'this is not a team row';
			return FALSE;
		}
		if (! empty($this->error)) {
			displayError($this->error);
		}
	}

	public function isColumnDefinitionRow($currentFirstColumn, $currentSecondColumn)
	{
		if (! isTeamRow($currentFirstColumn, $currentSecondColumn)) {
			// - THEN: this IS a Column Definition row
			return TRUE;
			// - set each column name to be the keys for each of the consecutive rows
			// - move to next row
		} else {
			$this->error = 'this is not a Column Definition row.';
			return FALSE;
		}
		if (! empty($this->error)) {
			displayError($this->error);
		}
	}

	public function displayError($error)
	{
		echo $error;
	}

	function useWorksheet($ws)
	{
		$this->worksheet = $ws;
		$this->worksheet_id = NULL;
	}
}