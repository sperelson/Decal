<?php

require_once(__DIR__ . "/../config/db.config");

class Users {
	private $dbconn = null;

	public static function getusers() {
		$con = self::dbCon();
		$sqlusers= "select `id`, `name`, `email` from `users`";

		$stmt = $con->prepare($sqlusers);
		$stmt->bind_result($id, $name, $email);
		$stmt->execute();
		$users = array();

		while ($stmt->fetch()) {
			$users = array($id, $name, $email);
		}
		$stmt->close();

		return $users;
	}

	/**
	* dbCon
	*
	* Connects to the db
	**/
	private static function dbCon() {
		if (!isset(self::$dbconn)) {
			self::$dbconn = new mysqli(DB::server(), DB::user(), DB::pwd(), DB::dbname());
		}
		if (mysqli_connect_errno()) {
			echo '';
			die();
		}		
		return self::$dbconn;
	}
}
