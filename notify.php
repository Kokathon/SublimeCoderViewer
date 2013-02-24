<?php

if (isset($_POST['file'])) {

	$action = $_POST['action'];
	$user = $_POST['user'];
	$file = $_POST['file'];

	$fp = fopen('history','a');
	fwrite($fp, time() . '|' . $user . '|' . $action . '|' . $file . "\n");
	fclose($fp);
}

?>