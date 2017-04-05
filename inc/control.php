<?php

$sessionName = "BrokenEnigma96";
session_name($sessionName);
session_start();

if(!isset($_SESSION['user'])){
	$_SESSION['user'] = "Guest";
}

?>