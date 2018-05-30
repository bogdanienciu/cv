<?php 
	require __DIR__.'/vendor/autoload.php';

	require_once('models/Person.php');


	$person = new Person('Bogdan', 'bogdan.ienciu@outlook.com','0749070705');

	$person->setSkills([
		['name' => 'HTML', 'percent' => 50],
		['name' => 'Javascript', 'percent' => 50],
		['name' => 'Php', 'percent' => 50],
	]);
	
	$person->setSkillsAssets([
		['name' => 'Responsible', 'percent' => 50],
		['name' => 'Creative', 'percent' => 50],
		['name' => 'Multitasking', 'percent' => 50],
	]);

	$person->setEducation([
		[
			'date' => '2016 - Present',
			'title' => 'Technical University of Cluj-Napoca',
			'subtitle' => 'Faculty of Automation and Computer Science, Cluj Napoca (Romania)',
			
		],
		[
			'date' => '2007 - 2011',
			'title' => 'Finance and Banking',
			'subtitle' => 'Faculty of Economics and Business Administration, Cluj Napoca (Romania)',
		],
	]);

	$person->setExperience([
		[
			'date' => '10/2014 - 12/2017',
			'title' => 'Cards and Customer Service Specialist',
			'subtitle' => 'Transilvania Bank, Cluj Napoca (Romania)',
			'responsabilities' => [
				'support for intern programs;',
				'provide support via phone / e-mail to the client database;'
			],
		],
		[
			'date' => '10/2014 - 12/2017',
			'title' => 'Data entry operator',
			'subtitle' => 'Pakweg Courier BVBA, Antwerpen (Belgium)',
			'responsabilities' => [
				'Apply data program techniques and procedures;', 
				'Keep information confidential.'
			],
		],
	]);

	$person->setLanguage([
		[
			'name' => 'English',
			'understanding' => 'C1',
			'speaking' => 'B1',
			'writing' => 'B1'
		],
		[
			'name' => 'Germana',
			'understanding' => 'C1',
			'speaking' => 'C1',
			'writing' => 'B1'
		]
	]);



	dump($person);
	