<?php

if (isset($_POST)) {

	$action = $_POST['action'];
	$user = $_POST['user'];
	$file = $_POST['file'];

	$fp = fopen('file','a');
	fwrite($fp, $user . ' ' . $action . ' file ' . $file . "\n");
	fclose($fp);
}

?>