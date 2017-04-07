<?php

	include '../inc/comment.php';

	class Database extends PDO{
		public function __construct() {
			//Directory to music database
			parent::__construct ( "sqlite:../ingredients.db" );
		}

	//returns an array of ingredient values
	function getIngredient($name){

		$ingredient = array();

		$ingredient[0] = $name;

		$sql = "SELECT description FROM ingredients WHERE name LIKE '%$name%'";

		$description = $this->query($sql);

		$ingredient[1] = $description->fetchColumn();

		$sql = "SELECT image FROM ingredients WHERE name LIKE '%$name%'";

		$image = $this->query($sql);

		$ingredient[2] = $image->fetchColumn();

		return $ingredient;

	}

	//writes comment to comments
	function writeComment($name, $comment, $ip, $time, $ingredient){

		$sql = "INSERT INTO comments (name, comment, ip, time, ingredient) VALUES ('" . $name . "', '" . $comment . "', '" . $ip . "', '" . $time . "', '" . $ingredient . "')";

		$status = $this->exec($sql);
		if($status === FALSE){
			echo '<pre class="bg-danger">';
			print_r ( $this->errorInfo () );
			echo '</pre>';
		}

	}

	function getComments($name){

		$sql = "SELECT * FROM comments WHERE ingredient LIKE '%$name%'";

		$result = $this->query($sql);
		$result = $result->fetchAll();
		$comments = array();
		$c = new Comment();
		foreach($result as $row){
			array_push($comments, Comment::newComment($row));
		}
		return $comments;
	}
}
?>