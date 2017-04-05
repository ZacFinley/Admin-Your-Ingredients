<?php
include '../inc/control.php';
// The code below assumes the session is started.
// It is otherwise exactly the code from Exampl #1
// http://php.net/manual/en/function.session-destroy.php
// ............
// Unset all of the session variables.
$_SESSION = array();

// If it's desired to kill the session, also delete the session cookie.
// Note: This will destroy the session, and not just the session data!
if (ini_get("session.use_cookies")) {
	$params = session_get_cookie_params();
	setcookie(session_name(), '', time() - 42000,
			$params["path"], $params["domain"],
			$params["secure"], $params["httponly"]
			);
}

// Finally, destroy the session.
session_destroy();

// Again, not from the orginal example, redirect back to index.
header ( "Location: ../index.php" );
?>