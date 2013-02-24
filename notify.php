<?php

if (isset($_GET['file'])) {
	$fp = fopen('file','w');
	fwrite($fp, $_GET['file']);
	fclose($fp);
}

?>