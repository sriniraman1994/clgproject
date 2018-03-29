<?php
	require "core.inc.php";
	session_destroy();
	header("location:index.php");

	//*header('location: '.$http_referer);//*
?>