<?php

	class Comment{

		public $name;
		public $comment;
		public $ip;
		public $date;

		function __construct($n, $c, $i, $d){
			$this->name = $n;
			$this->comment = $c;
			$this->ip = $i;
			$this->date = $d;
		}

		function __toString(){
			return $this->name;
		}

	}
?>