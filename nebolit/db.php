<?php
	header("Content-Type: text/html; charset=utf-8");

	require "libs/rb.php";
	R::setup('mysql:host=localhost; dbname=mybase', 'root', '');
	$con = mysqli_connect('localhost', 'root', '', 'mybase');
?>