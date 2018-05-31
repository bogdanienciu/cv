<?php 


/**
 * 
 */
class Education
{
	private $period;
	private $title;
	private $subtitle;
	
	public function __construct($period, $title, $subtitle)
	{
		$this->period = $period;
		$this->title = $title;
		$this->subtitle = $subtitle;
	}

	public function getPeriod() {
		return $this->period;
	}

	public function getTitle() {
		return $this->title;
	}

	public function getSubtitle() {
		return $this->subtitle;
	}
	
}
