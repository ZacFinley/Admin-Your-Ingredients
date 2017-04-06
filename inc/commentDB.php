<?php

	include '../inc/comment.php';

	class commentDB extends PDO{
		public function __construct() {
			//Directory to music database
			parent::__construct ( "sqlite:../comments.db" );
		}

		//returns an array of ingredient values
	function writeComment($name, $comment, $ip, $time){

		$sql = "INSERT INTO comments (name, comment, ip, time) VALUES ('" . $name . "', '" . $comment . "', '" . $ip . "', '" . $time . "')";

		$status = $this->exec($sql);
		if($status === FALSE){
			echo '<pre class="bg-danger">';
			print_r ( $this->errorInfo () );
			echo '</pre>';
		}
	}
}
?>