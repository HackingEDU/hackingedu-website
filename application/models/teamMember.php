<?php
include_once './application/models/model.php';

/**
* Team Member Model
*/
class TeamMember extends Model
{
	public $position;
	public $description;
	public $name;
	public $github;
	public $school;
	public $googlePlus;
	public $website;
	public $linkedIn;
	// public $linkedInUsername;
	public $twitter;
	// public $twitterUsername;
	public $blurb;
	public $picture;
	public $modalName;
	public $team;

	// function __construct($name, $description, $picture, $linkedInUsername, $googlePlusUsername, $twitterUsername)
	// public function __construct($teamName)
	// {
	// 	parent::__construct();
	// 	$this->team = $teamName;
	// }
	public function __construct(Array $properties = array())
	{
		parent::__construct();
		foreach($properties as $key => $value){
			$this->{$key} = $value;
		}
	}

	public function setTeam($nameOfTeam)
	{
		$this->team = $nameOfTeam;
	}

	public function setAll($pos, $desc, $name, $githubUsername, $school, $googlePlusUsername, $linkedInUsername, $twitterUsername, $blurb, $picture, $website)
	{
		$this->position = $pos;
		$this->description = $desc;
		$this->name = $name;
		$this->github = $githubUsername;
		$this->school = $school;
		$this->picture = $picture;
		$this->googlePlus = 'https://plus.google.com/' . $googlePlusUsername . '/posts';
        $this->website = $website;
		// $this->googlePlusUsername = $googlePlusUsername;

		$this->linkedIn = 'https://linkedin.com/' . $linkedInUsername;
		// $this->linkedInUsername = $linkedInUsername;
		$this->twitter = 'https://twitter.com/' . $twitterUsername;
		// $this->twitterUsername = $twitterUsername;
		$this->blurb = $blurb;
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

	public function getWebsite()
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
