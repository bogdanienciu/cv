<?php

require_once('models/Reader.php');

/**
 * 
 */
class MySQLReader implements Reader
{
	private $id;
	private $connection;

	public function __construct($id)
	{
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "cv";

		$this->id = $id;
		$this->connection = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($this->connection->connect_error) {
		    die("Connection failed: " . $this->connection->connect_error);
		}

		$sql = "SELECT * FROM persons where id = '" . $this->id . "'";
		$result = $this->connection->query($sql);

		$this->personRow = $result->fetch_assoc();
	}

	public function getName() {
		return $this->personRow['name'];
	}

	public function getDateofbirth() {
		return $this->personRow['date_of_birth'];
	}

	public function getAddress() {
		return $this->personRow['address'];	
	}

	public function getEmail() {
		return $this->personRow['mail'];	
	}

	public function getPhone() {
		return $this->personRow['phone'];
	}

	public function getSkype() {
		return $this->personRow['skype'];
	}

	public function getProfilepicture() {
		return $this->personRow['profilepicture']; 
	}

	public function getLinkedinprofile() {
		return $this->personRow['linkedinprofile'];
	}

	public function getGithubprofile() {
		return $this->personRow['githubprofile'];
	}

	public function getCodingSkills() {
		$sql = "SELECT * FROM skills where person_id = '" . $this->id . "' and type='coding'";
		$result = $this->connection->query($sql);

		return $result->fetch_all(MYSQLI_ASSOC);
	}

	public function getAssetsSkills() {
		$sql = "SELECT * FROM skills where person_id = '" . $this->id . "' and type='asset'";
		$result = $this->connection->query($sql);

		return $result->fetch_all(MYSQLI_ASSOC);
	}

	public function getExperience() {
		$sql = "SELECT * FROM experiences where person_id = '" . $this->id . "'";
		$result = $this->connection->query($sql);

		$experiences = $result->fetch_all(MYSQLI_ASSOC);

		for ($i=0; $i < sizeof($experiences); $i++) {
			$responsabilities = [];

			$sql = "SELECT responsability FROM experience_responsabilities where experience_id = '" . $experiences[$i]['id'] . "'";
			$result = $this->connection->query($sql);

			$rows = $result->fetch_all(MYSQLI_ASSOC);

			foreach ($rows as $row) {
				$responsabilities[] = $row['responsability'];
			}

			$experiences[$i]['responsabilities'] = $responsabilities;
		}

		return $experiences;
	}
 
	public function getEducation() {
		$sql = "SELECT * FROM educations where person_id = '" . $this->id . "'";
		$result = $this->connection->query($sql);
	
		return $result->fetch_all(MYSQLI_ASSOC);
	}

	public function getLanguage() {
		$sql = "SELECT * FROM languages where person_id = '" . $this->id . "'";
		$result = $this->connection->query($sql);
	
		return $result->fetch_all(MYSQLI_ASSOC);
	}

	public function getPersonal() {
		$sql = "SELECT * FROM personal where person_id = '" . $this->id . "'";
		$result = $this->connection->query($sql);
	
		$personal = $result->fetch_all(MYSQLI_ASSOC);

		for ($i=0; $i < sizeof($personal); $i++) {
			$responsabilities = [];

			$sql = "SELECT responsability FROM personal_responsabilities where personal_id = '" . $personal[$i]['id'] . "'";
			$result = $this->connection->query($sql);

			foreach ($result->fetch_all(MYSQLI_ASSOC) as $row) {
				$responsabilities[] = $row['responsability'];
			}

			$personal[$i]['responsabilities'] = $responsabilities;
		}

		return $personal;
	}

	public function __destruct() {
		$this->connection->close();
	}
}
