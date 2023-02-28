<?php

if (isset($_POST['username'])) {
	$user = $_POST['username'];
	$pass = $_POST['password'];
	if ($user == "admin" && $pass == "system123") {
		echo '<script language="javascript">';
		echo 'window.location.href="connectlist.php";';
		echo '</script>';
	} else {
		echo '<script language="javascript">';
		echo 'alert("Invaild Login credentials");';
		echo 'window.location.href="index.html";';
		echo '</script>';
	}
}
