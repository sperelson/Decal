<?php
use \Michelf\Markdown;

require_once(__DIR__ . "/../config/db.config");

class Blog {
	private static $dbconn = null;
	
	public static function getlist($page=1, $count=20, $published=1) {
		$limit = $count;
		$offset = (($page > 0 ? $page : 1) - 1) * $limit;

		$con = self::dbCon();
		$sqllistposts = <<<EOD
select `id`, `title`, `created`, `published`
from `posts`
where `published` = ?
limit ?, ?
EOD;
		$stmtblog = $con->prepare($sqllistposts);
		$stmtblog->bind_param("iii", $published, $offset, $count);
		$stmtblog->bind_result($id, $title, $created, $publishedflg);
		$stmtblog->execute();
		$posts = array();

		while ($stmtblog->fetch()) {
			$posts[] = array('id' => $id, 'title' => $title, 'created' => $created, 'published' => $publishedflg);
		}
		$stmtblog->close();

		return $posts;
	}

	public static function getpost($id) {
		$con = self::dbCon();
		$sqlpost = <<<EOD
select `id`, `title`, `created`, `author`, `published`, `body`
from `posts`
where `id` = ?
EOD;
		$stmtblog = $con->prepare($sqlpost);
		$stmtblog->bind_param("i", $id);
		$stmtblog->bind_result($id, $title, $created, $author, $publishedflg, $body);
		$stmtblog->execute();
		$post = array();

		while ($stmtblog->fetch()) {
			$authortmp = $author == '' ? false : $author;
			$bodyhtml = Markdown::defaultTransform($body);
			$post = array('id' => $id, 'title' => $title, 'created' => $created, 'author' => $authortmp, 'published' => $publishedflg, 'body' => $bodyhtml);
			break;
		}
		$stmtblog->close();

		return $post;
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
