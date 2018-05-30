<?php

require_once('models/Experience.php');
require_once('models/Skill.php');
require_once('models/Language.php');
require_once('models/Personal.php');

class Person {
	private $profilepicture;
	private $name;
	private $mail;
	private $phone;
	private $skills;
	private $skillsAssets;
	private $education;
	private $experience;
	private $language;
	private $personal;

	public function __construct($name = '', $dateofbirth = '', $address = '', $mail = '', $phone = '', $skype = '', $profilepicture = '', $linkedinprofile = '', $githubprofile = '') {
		$this->name = $name;
		$this->dateofbirth = $dateofbirth;
		$this->address = $address;
		$this->mail = $mail;
		$this->phone = $phone;
		$this->skype = $skype;
		$this->profilepicture = $profilepicture;
		$this->linkedinprofile = $linkedinprofile;
		$this->githubprofile = $githubprofile;

	}

	public function getProfilepicture() {
		return $this->profilepicture;
	}
	public function getLinkedinprofile() {
		return $this->linkedinprofile;
	}
	public function getGithubprofile() {
		return $this->githubprofile;
	}

	public function getName() {
		return $this->name;
	}
	public function getDateofbirth() {
		return $this->dateofbirth;
	}
	public function getAddress() {
		return $this->address;
	}
	public function getMail() {
		return $this->mail;
	}
	public function getPhone() {
		return $this->phone;
	}
	public function getSkype() {
		return $this->skype;
	}

	public function setSkills($skills) {
		$result = [];

		foreach ($skills as $skill) {
			$result[] = new Skill($skill['name'], $skill['percent']);
		}

		$this->skills = $result;
	}

	public function getSkills() {
		return $this->skills;
	}

	public function setSkillsAssets($skills) {
		$result = [];

		foreach ($skills as $skill) {
			$result[] = new Skill($skill['name'], $skill['percent']);
		}

		$this->skillsAssets = $result;
	}

	public function getSkillsAssets() {
		return $this->skillsAssets;
	}

	public function setEducation($education){
		$result = [];

		foreach ($education as $edu) {
			$result[] = new Education($edu['date'], $edu['title'], $edu['subtitle']);
		}
		$this->education = $result;
	}

	public function getEducation() {
		return $this->education;
	}


	public function setExperience($experience) {
		$result = [];

		foreach ($experience as $exp) {
			$result[] = new Experience($exp['date'], $exp['title'], $exp['subtitle'], $exp['responsabilities']);
		}

		$this->experience = $result;
	}

	public function getExperience() {
		return $this->experience;
	}

	public function setLanguage($language) {
		$result = [];

		foreach ($language as $lang) {
			$result[] = new Language($lang['name'], $lang['understanding'], $lang['speaking'], $lang['writing']);
		}

		$this->language = $result;
	}

	public function getLanguage() {
		return $this->language;
	}

	public function setPersonal($personal) {
		$result = [];

		foreach ($personal as $exp) {
			$result[] = new personal($exp['name'], $exp['responsabilities']);
		}

		$this->personal = $result;
	}

	public function getPersonal() {
		return $this->personal;
	}



}
