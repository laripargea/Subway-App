<?php
error_reporting(E_ALL ^ E_WARNING);
$connection = mysqli_connect("localhost", "root", "","PW");
if ($connection-> connect_error)
	die("Connection failed:". $connection-> connect_error);
$queryDel = "DELETE FROM `books` WHERE Id = '".$_GET["id"]."'";
if (mysqli_query($connection,$queryDel))
	header('Location: buecher.php');
mysqli_close($connection);
?>