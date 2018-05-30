<?php 


/**
 * 
 */
class Education
{
	private $date;
	private $title;
	private $subtitle;
	
	public function __construct($date, $title, $subtitle)
	{
		$this->date = $date;
		$this->title = $title;
		$this->subtitle = $subtitle;
	}

	public function getDate() {
		return $this->date;
	}

	public function getTitle() {
		return $this->title;
	}

	public function getSubtitle() {
		return $this->subtitle;
	}
	
}
