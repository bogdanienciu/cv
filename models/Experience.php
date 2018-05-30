<?php 
require_once('models/Education.php');

/**
 * 
 */
class Experience extends Education
{
	private $responsabilities;
	
	public function __construct($date, $title, $subtitle, $responsabilities)
	{
		parent::__construct($date, $title, $subtitle);

		$this->responsabilities = $responsabilities;
	}

	public function getResponsabilities() {
		return $this->responsabilities;
	}

}
