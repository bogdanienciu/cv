<?php 
	require 'vendor/autoload.php';

	require_once('models/MySQLReader.php');
	require_once('models/Person.php');

	$reader = new MySQLReader(1);

	$person = new Person($reader->getName(), $reader->getDateofbirth(), $reader->getAddress(), $reader->getEmail(), $reader->getPhone(), $reader->getSkype(), $reader->getProfilepicture(), $reader->getLinkedinprofile(), $reader->getGithubprofile(), $reader->getText1(), $reader->getText2());

	$person->setSkills($reader->getCodingSkills());
	$person->setSkillsAssets($reader->getAssetsSkills());
	$person->setExperience($reader->getExperience());
	$person->setEducation($reader->getEducation());
	$person->setLanguage($reader->getLanguage());
	$person->setPersonal($reader->getPersonal());
	