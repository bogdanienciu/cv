<?php 

/**
 * 
 */
class Personal
{
	private $name;
	private $responsibilities;

	function __construct($name, $responsibilities)
	{
		$this->name = $name;
		$this->responsibilities = $responsibilities;
	}

	public function getName(){
		return $this->name;
	}

	public function getResponsibilities() {
		return $this->responsibilities;
	}
}