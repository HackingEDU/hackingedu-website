<?php
/**
 * Copyright 2013 Asim Liaquat
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace Google\Spreadsheet;

use SimpleXMLElement;

/**
 * Worksheet Data.
 *
 * @package    Google
 * @subpackage Spreadsheet
 * @author     Asim Liaquat <asimlqt22@gmail.com>
 */
class ListFeed
{
    /**
     * Xml representation of this feed
     *
     * @var \SimpleXMLElement
     */
    protected $xml;

    /**
     * Constructor
     *
     * @param string $xmlStr
     */
    public function __construct($xmlString)
    {
        // d($xmlString); <- NOT GETTING EMPTY CELLS
        // die($xmlString->asXml());


        $xml = new SimpleXMLElement($xmlString);
        // d($xml);

        $xml->registerXPathNamespace('gsx', 'http://schemas.google.com/spreadsheets/2006/extended');
        $this->xml = $xml;
    }

    /**
     * Get the post url for this feed
     *
     * @return string
     */
    public function getPostUrl()
    {
        return Util::getLinkHref($this->xml, 'http://schemas.google.com/g/2005#post');
    }

    /**
     * Insert a new row into this feed
     *
     * @param array $row
     *
     * @return void
     */
    public function insert($row)
    {
        $entry = '<entry xmlns="http://www.w3.org/2005/Atom" xmlns:gsx="http://schemas.google.com/spreadsheets/2006/extended">';
        foreach($row as $colName => $value) {
            $entry .= sprintf(
                '<gsx:%s>%s</gsx:%s>',
                $colName,
                $value,
                $colName
            );
        }
        $entry .= '</entry>';

        ServiceRequestFactory::getInstance()->post($this->getPostUrl(), $entry);
    }

    /**
     * Get the entries of this feed
     *
     * @return array \Google\Spreadsheet\ListEntry
     */
    public function getEntries()
    {
        $rows = array();
        // dd($this->xml->entry->asXml()); // <- TO GET XML

        if(count($this->xml->entry) > 0) {
            // d($this->xml);  // <-  NOT GETTING EMPTY CELLS

            $colNames = $this->getColumnNames($this->xml);
            // dd($colNames);
            // dd($this->xml);


            foreach ($this->xml->entry as $entry) {
                $cols = $entry->xpath('gsx:*');
                // dd($cols);

                $vals = array();
                foreach($cols as $col) {
                    // dd($col); //  <- THIS DISPLAYS
                    // var_dump((string) $col);

                    // if (is_null($col) || $col == '' || $col === '' || !isset($col)) {
                    //     // $col = ' ';
                    //     $vals[] = ' ';
                    // } else {
                        $vals[] = $col->__toString();
                    // }
                }
                // dd($vals); //  <- THIS HAS THE VALUES YOU WANT
                // d($entry);
                // dd($colNames);
                // d($vals); <- ROWS  (in a basic array form)
                $rows[] = new ListEntry($entry, array_combine($colNames, $vals));

            }
        }
        // dd($rows);
        return $rows;
    }

    /**
     * Get the column names
     *
     * @param \SimpleXMLElement $xml
     *
     * @return array
     */
    protected function getColumnNames($xml)
    {
        // dd($xml);
        $ret = array();
        // dd($xml->entry->xpath('gsx:*'));
        // dd($xml->entry->xpath('//gsx:*'));
        // $xml->entry->xpath("//content[@Label='Pakistan']")
        // $columns = array();
        // $trash = array();

        // _cokwr: Description, _cpzh4: Name, _cre1l: Email, _chk2m: Phone, _ciyn3: Git Hub, _ckd7g: School, _clrrx: G+, _cyevm: LinkedIn, _cztg3: Twitter, _d180g: Blurb, _d2mkx: Picture
        // dd($xml->entry->content);

        // Parsing the xml and putting the Keys into an array called `columns`
        // list($trash[], $columns[], $trash[], $columns[], $trash[], $columns[], $trash[], $columns[], $trash[], $columns[], $trash[], $columns[], $trash[], $columns[], $trash[], $columns[], $trash[], $columns[], $trash[], $columns[]) = explode(' ', $xml->entry->content);

        // List reverses the array so here we are reverting it back
        // $columnNames = array_reverse($columns);

        foreach($xml->entry->xpath('gsx:*') as $col) {
            // if (is_null($col) || $col == '' || $col === '' || !isset($col)) {
            //     // $col = ' ';
            //     $ret[] = ' ';
            // } else {
            // dd($col);

                $ret[] = $col->getName();
            // }
        }

        // for ($i=0; $i < count($xml->entry->xpath('gsx:*')); $i++) {
        //     $ret[] = $xml->entry->xpath('gsx:*')[$i]->getName();

        // }

        // dd($ret);

        return $ret;
        // return $columnNames;
    }
}