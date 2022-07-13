<?php
$conn = mysqli_connect("localhost", "root", "", "PW");
if ($conn-> connect_error)
	die("Connection failed:". $conn-> connect_error);
// $sql = "CREATE TABLE `top menus`(
//     Id INT PRIMARY KEY AUTO_INCREMENT,
//     Name VARCHAR(50),
//     Sandwich DOUBLE,
//     Sauce DOUBLE,
//     Bonus DOUBLE
// )";
// if($conn-> query($sql)){
//     echo "Table created successfully.";
$sql = "SELECT Name, ROUND((Sandwich + Sauce + Bonus) / 3, 3) AS 'Rating' FROM `top menus` ORDER BY Rating DESC";
$result = $conn-> query($sql);
if ($result-> num_rows > 0)
	while ($row = $result -> fetch_assoc())
		echo "<tr><td>". $row["Name"] ."</td><td>". $row["Rating"] ."</td></tr>";
$conn->close();
?>