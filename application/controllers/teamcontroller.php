<?php
/**
* Members
*/
class TeamMember
{
	public $name;
	public $description;
	public $img;

	function __construct($name, $description, $img)
	{
		$this->name = $name;
		$this->description = $description;
		$this->img = $img;
	}

	public function getName()
	{
		return $this->name;
	}

	public function getDescription()
	{
		return $this->description;
	}

	public function getImg()
	{
		return $this->img;
	}
}