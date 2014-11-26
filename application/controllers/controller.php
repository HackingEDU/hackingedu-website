<?php
// use Google\Spreadsheet\DefaultServiceRequest;
// use Google\Spreadsheet\ServiceRequestFactory;

include_once './application/models/google_spreadsheet.php';
// die('in controller.php');
include_once './application/models/teamMember.php';

/**
* Controller
*/
class Controller
{
   	public $view;
	public $data = array();
	public $rows;
	public $teamMembers = array();

	function __construct()
	{
		new Model();
		$teamSpreadsheet = new Google_Spreadsheet('Team Contacts & Roles');
		// d($teamSpreadsheet);
		// $columnNames = $teamSpreadsheet->getColumnNames();
		// dd($columnNames);

		$this->rows = $teamSpreadsheet->getRows();
		// $rows = $teamSpreadsheet->getRows();
		// dd($rows);

		// foreach ($rows as $row) {
		// 	$teamName;
		// 	if (is_string($row)) {
		// 		$teamName = $row;
		// 	}
		// 	$data = array();
		// 	// $data = array_merge($row, $teamName);
		// 	$teamMember = new TeamMember($row);
		// 	$teamMember->setTeam($teamName);

		// 	// $teamMember = new TeamMember($teamName);
		// 	// foreach ($row as $key => $value) {
		// 	// 	$teamMember->set()
		// 	// 	$teamMember[] = $teamMember[$key] = $value;
		// 	// }
		// 	$this->teamMembers[] = $teamMember;

		// }
		// dd($teamMembers);


		// foreach ($rows as $row) {
		// 	// if row begins with '*' then trim it off and create a class with the name
		// 	// dd($row);
		// 	$count = 0;
		// 	$this->teamMembers[$count] = new TeamMember($row[0]);

		// 	// d($this->teamMembers);
		// 	foreach ($row as $k => $v) {
		// 		$this->teamMembers[$count]->setAll($v[0], $v[1], $v[2], $v[5], $v[6], $v[7], $v[8], $v[9]);
		// 		// d($row);
		// 		// sd($k);


		// 		// if ($k[0] == 'Position' && $k[9] == 'Picture') {
		// 		// }
		// 	}
		// 	$count++;
		// }
		// dd($teamMembers);


		// LOOP THROUGH AND CREATE TEAM MEMBERS
		// $teamMember = new TeamMember();

		// foreach ($rows as $colName => $colValue) {

		// for ($i = 0; $i < count($rows); $i++) {

		// 	$columnValues = array();
		// 	$columns = $rows[$i];
		// 	// for ($colPosition = 0; $colPosition < ; $colPosition++) {
		// 		// $columns[] = $rows[$i][$colPosition]
		// 	// }
		// 	foreach ($columns as $column) {
		// 		// dd($column);

		// 		// $columnValues[] =
		// 	}
		// }
		// $teams[] = new Team($currentFirstColumn);

		// - instantiate the Team Class
		// -
	}

	public function getRows()
	{
		return $this->rows;
	}

	public function getTeamMembers()
	{
		$this->teamMembers;
	}








	// if (condition) {
	// 	# code...
	// }


	// 	// - set next line column names to 'teamMember' column names
	// 	// - move to next line
	// 	if (! is_null( 1st column ) && this->row's columnCount)
	// 	}

}
