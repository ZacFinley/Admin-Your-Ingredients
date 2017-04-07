<?php

	class Comment{

		public $name;
		public $comment;
		public $ip;
		public $date;

		public static function newComment($row){
			$com = new Comment();
			$com->name = $row['name'];
			$com->comment = $row['comment'];
			$com->ip = $row['ip'];
			$com->date = $row['time'];
			return $com;
		}

		function __toString(){
			return "User: " . $this->name . "<br>" .
					"Comment: " . $this->comment . "<br>" .
					"Date: " . $this->date . "<br>" . 
					"IP: " . $this->ip . "<br>";
		}

	}
?>