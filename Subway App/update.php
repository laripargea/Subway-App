<?php
error_reporting(E_ALL ^ E_WARNING);
$connection = mysqli_connect("localhost", "root", "", "PW");
if ($connection-> connect_error)
	die("Connection failed:". $connection-> connect_error);
$id = $_POST['id2'];
$name = $_POST['name2'];
$author = $_POST['author2'];
$genre = $_POST['genre2'];
$publisher = $_POST['publisher2'];
$year = $_POST['year2'];
$query = "UPDATE `books` SET Name = '$name', Author = '$author', Genre = '$genre', Publisher = '$publisher', Year = '$year' WHERE Id = $id";
$connection->query($query);
$connection->close();
?>