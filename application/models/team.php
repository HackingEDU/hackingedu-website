<?php
include_once './application/models/model.php';

/**
* Team Model
*/
class Team extends Model
{
	public $name;
	public $teamDescription;
	public $teamMembers = array();

	function __construct($name, $description, $teamMembers)
	{
		$this->name = $name;
		$this->description = $description;

		// TODO: LOOP THROUGH THE DATA AND ADD THE TEAM MEMBERS TO THEIR RESPECTIVE TEAMS

	}



	public function getName()
	{
		return $this->name;
	}

	public function getDescription()
	{
		return $this->description;
	}

	public function getTeamMembers()
	{
		return $this->teamMembers;
	}
}