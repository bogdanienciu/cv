<?php 
	require 'vendor/autoload.php';

	require_once('models/FileReader.php');
	require_once('models/Person.php');

	$reader = new FileReader('profiles/bogdan.txt');

	$person = new Person($reader->getName(), $reader->getDateofbirth(), $reader->getAddress(), $reader->getEmail(), $reader->getPhone(), $reader->getSkype(), $reader->getProfilepicture(), $reader->getLinkedinprofile(), $reader->getGithubprofile());


	$person->setSkills($reader->getCodingSkills());
	$person->setSkillsAssets($reader->getAssetsSkills());
	$person->setExperience($reader->getExperience());
	$person->setEducation($reader->getEducation());
	$person->setLanguage($reader->getLanguage());
	$person->setPersonal($reader->getPersonal());

	//$person->setDigital($reader->getDigital());
	