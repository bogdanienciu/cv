<?php 

	/**
	 * 
	 */
	class Language
	{
		private $name;
		private $understanding;
		private $speaking;
		private $writing;

		public function __construct($name, $understanding, $speaking, $writing)
		{
			$this->name = $name;
			$this->understanding = $understanding;
			$this->speaking = $speaking;
			$this->writing = $writing;
		}

		public function getName() {
			return $this->name;
		}

		public function getUnderstanding() {
			return $this->understanding;
		}

		public function getSpeaking() {
			return $this->speaking;
		}

		public function getWriting() {
				return $this->writing ;
		}
	}