<?php
$connection = mysqli_connect("localhost", "root", "", "PW");
if ($connection-> connect_error)
	die("Connection failed:". $connection-> connect_error);
if (isset($_POST['insert'])) {
	$name = $_POST['name'];
	$author = $_POST['author'];
	$genre = $_POST['genre'];
	$publisher = $_POST['publisher'];
	$year = $_POST['year'];
	$query ="INSERT INTO `books` (Name, Author, Genre, Publisher, Year) VALUES ('$name', '$author', '$genre', '$publisher', $year)";
	$connection->query($query);
	header('Location: buecher.php');
}
$connection->close();
?>