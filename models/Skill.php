<?php 

/**
 * 
 */
class Skill 
{
	private $name;
	private $percent;

	public function __construct($name, $percent)
	{
		$this->name = $name;
		$this->percent = $percent;	
	}

	public function getName() {
		return $this->name;
	}

	public function getPercent() {
		return $this->percent;
	}
}
