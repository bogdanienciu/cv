<?php

	require_once('data/mysql.php');
	dump($person);
	
	$person->getProfilepicture();
	$person->getLinkedinprofile();
	$person->getGithubprofile();
	$person->getName();
	$person->getDateofbirth();
	$person->getAddress();
	$person->getMail();
	$person->getPhone();