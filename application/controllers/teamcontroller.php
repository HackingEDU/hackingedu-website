<?php
/**
* member
*/
class TeamMember
{
	public $name;
	public $description;
	public $picture;
	public $linkedIn;
	// public $linkedInUsername;
	public $googlePlus;
	// public $googlePlusUsername;
	public $twitter;
	// public $twitterUsername;
	public $modalName;

	function __construct($name, $description, $picture, $linkedInUsername, $googlePlusUsername, $twitterUsername)
	{
		$this->name = $name;
		$this->description = $description;
		$this->picture = $picture;

		$this->linkedIn = 'https://linkedin.com/' . $linkedInUsername;
		// $this->linkedInUsername = $linkedInUsername;
		$this->googlePlus = 'https://plus.google.com/' . $googlePlusUsername . '/posts';
		// $this->googlePlusUsername = $googlePlusUsername;
		$this->twitter = 'https://twitter.com/' . $twitterUsername;
		// $this->twitterUsername = $twitterUsername;
		$this->modalName = str_replace(' ', '', strtolower($name)) . 'Modal';
	}

	public function getName()
	{
		return $this->name;
	}

	public function getDescription()
	{
		return $this->description;
	}

	public function getPicture()
	{
		return $this->picture;
	}

	public function getLinkedIn()
	{
		return $this->linkedIn;
	}

	public function getGooglePlus()
	{
		return $this->googlePlus;
	}

	public function getTwitter()
	{
		return $this->twitter;
	}

	public function getModalName()
	{
		return $this->modalName;
	}
}