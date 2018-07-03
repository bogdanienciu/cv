<?php

require_once('models/Reader.php');

/**
 * 
 */
class FileReader implements Reader
{
	private $lines;

	public function __construct($filename)
	{
		$myfile = fopen($filename, "r") or die("Unable to open file!");
		$content = fread($myfile, filesize($filename));
		fclose($myfile);

		$this->lines = explode("\n", $content);
	}

	public function getName() {
		$profile = explode("#", $this->lines[0]);

		return $profile[0];
	}

	public function getDateofbirth() {
		$profile = explode("#", $this->lines[0]);

		return $profile[1];
	}

	public function getAddress() {
		$profile = explode("#", $this->lines[0]);

		return $profile[2];
	}

	public function getEmail() {
		$profile = explode("#", $this->lines[0]);

		return $profile[3];
	}

	public function getPhone() {
		$profile = explode("#", $this->lines[0]);

		return $profile[4];
	}

	public function getSkype() {
		$profile = explode("#", $this->lines[0]);

		return $profile[5];
	}

	public function getProfilepicture() {
		$profile = explode("#", $this->lines[0]);

		return $profile[6];
	}

	public function getLinkedinprofile() {
		$profile = explode("#", $this->lines[0]);

		return $profile[7];
	}
	
	public function getGithubprofile() {
		$profile = explode("#", $this->lines[0]);

		return $profile[8];
	}

	public function getCodingSkills() {
		return $this->format_skills(explode("#", $this->lines[1]));
	}

	public function getAssetsSkills() {
		return $this->format_skills(explode("#", $this->lines[2]));
	}

	public function getExperience() {
		$experiences = [];

		if (isset($this->lines[3]))
			$experiences[] = $this->format_experience($this->lines[3]);
		if (isset($this->lines[4]))
			$experiences[] = $this->format_experience($this->lines[4]);
		if (isset($this->lines[5]))
			$experiences[] = $this->format_experience($this->lines[5]);

		return $experiences;
	}
 
	public function getEducation() {
		$education = [];

		if (isset($this->lines[6]))
			$education[] = $this->format_education($this->lines[6]);
		if (isset($this->lines[7]))
			$education[] = $this->format_education($this->lines[7]);
		if (isset($this->lines[8]))
			$education[] = $this->format_education($this->lines[8]);

		return $education;
	}

	public function getLanguage(){
		$languages = [];

		if (isset($this->lines[9]))
			$languages[] = $this->format_languages($this->lines[9]);

		return $languages;
	}

	public function getPersonal() {
		$personal = [];

		if (isset($this->lines[10]))
			$personal[] = $this->format_personal($this->lines[10]);
		if (isset($this->lines[11]))
			$personal[] = $this->format_personal($this->lines[11]);
		if (isset($this->lines[12]))
			$personal[] = $this->format_personal($this->lines[12]);

		return $personal;
	}

	private function format_skills($skills) {
		$result = [];

		foreach ($skills as $skill) {
			$exploded = explode("->", $skill);

			$result[] = [
				'name' => $exploded[0],
				'percent' => trim($exploded[1]),
			];
		}

		return $result;
	}

	private function format_experience($string) {
		$pieces = explode("#", $string);

		return [
			'date' => $pieces[0],
			'title' => $pieces[1],
			'subtitle' => $pieces[2],
			'responsabilities' => explode("!", $pieces[3]),
		];
	}

	private function format_education($string) {
		$pieces = explode('#', $string);

		return[
			'date' => $pieces[0],
			'title' => $pieces[1],
			'subtitle' => $pieces[2],
		];
	}

	private function format_languages($string) {
		$pieces = explode('#', $string);

		return[
			'name' => $pieces[0],
			'understanding' => $pieces[1],
			'speaking' => $pieces[2],
			'writing' => $pieces[3],
		];
	}

	private function format_personal($string) {
		$pieces = explode("#", $string);

		return [
			'name' => $pieces[0],
			'responsabilities' => explode("!", $pieces[1]),
		];
	}

}
