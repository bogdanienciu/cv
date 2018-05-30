<?php

	$data = retrieve_data_from('profiles/bogdan.txt');

	function retrieve_data_from($filename) {
		$myfile = fopen($filename, "r") or die("Unable to open file!");
		$content = fread($myfile,filesize($filename));
		fclose($myfile);

		$lines = explode("\n", $content);
		$profile = explode("#", $lines[0]);
		$coding_skills = format_skills(explode("#", $lines[1]));
		$assets_skills = format_skills(explode("#", $lines[2]));

		$experiences = [];
		if (isset($lines[3]))
			$experiences[] = format_experience($lines[3]);
		if (isset($lines[4]))
			$experiences[] = format_experience($lines[4]);
		if (isset($lines[5]))
			$experiences[] = format_experience($lines[5]);

		$education = [];
		if (isset($lines[6]))
			$education[] = format_education($lines[6]);
		if (isset($lines[7]))
			$education[] = format_education($lines[7]);
		if (isset($lines[8]))
			$education[] = format_education($lines[8]);

		$languages = [];
		if (isset($lines[9]))
			$languages[] = format_languages($lines[9]);

		$digital = [];
		if (isset($lines[10]))
			$digital = format_digital($lines[10]);

		return [
			'profile' => $profile,
			'coding_skills' => $coding_skills,
			'assets_skills' => $assets_skills,
			'experiences' => $experiences,
			'education' => $education,
			'languages' => $languages,
			'digital' => $digital,
		];
	}

	$name = $data['profile'][0];
	$dateofbirth = $data['profile'][1];
	$address = $data['profile'][2];
	$email = $data['profile'][3];
	$phone = $data['profile'][4];
	$skype = $data['profile'][5];
	$profilepicture = $data['profile'][6];
	$linkedinprofile = $data['profile'][7];
	$githubprofile = $data['profile'][8];

	function format_skills($skills) {
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

	function format_experience($string) {
		$pieces = explode("#", $string);

		return [
			'date' => $pieces[0],
			'title' => $pieces[1],
			'subtitle' => $pieces[2],
			'responsabilities' => explode("!", $pieces[3]),
		];
	}

	function format_education($string) {
		$pieces = explode('#', $string);
		return[
			'date' => $pieces[0],
			'title' => $pieces[1],
			'subtitle' => $pieces[2],
		];
	}

	function format_languages($string) {
		$pieces = explode('#', $string);
		return[
			'name' => $pieces[0],
			'understanding' => $pieces[1],
			'speaking' => $pieces[2],
			'writing' => $pieces[3],
		];
	}

	function format_digital($string) {

		return explode("!", $string);
	}

	// var_dump($data['expiriences']);
	// exit;

	

?>
