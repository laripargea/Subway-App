<?php
$connection = mysqli_connect("localhost", "root", "", "PW");
if ($connection-> connect_error)
	die("Connection failed:". $connection-> connect_error);
if (isset($_POST['update'])) {
	$name = $_POST['0'];
	$sandwich = $_POST['1'];
	$sauce = $_POST['2'];
	$bonus = $_POST['3'];
	$query = "UPDATE `top menus` set Sandwich = 0.9 * Sandwich + 0.1 * $sandwich, Sauce = 0.9 * Sauce + 0.1 * $sauce, Bonus = 0.9 * Bonus + 0.1 * $bonus where Name = '$name'";
	$connection->query($query);
	header('Location:http://localhost/Proiect/Menus_Top.php');
}
$connection->close();
?>