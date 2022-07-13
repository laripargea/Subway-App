<?php
$conn = mysqli_connect("localhost", "root", "", "PW");
if ($conn-> connect_error)
	die("Connection failed:". $conn-> connect_error);
$category = $_GET['category'];
if ($category == "All")
	$sql = "SELECT * FROM `books`";
else
	$sql = "SELECT * FROM `books` WHERE Genre = '$category'";
$result = $conn-> query($sql);
if ($result-> num_rows > 0) {
	echo "<tr><th>Name</th><th>Autor</th><th>Genre</th><th>Verlag</th><th>Jahr</th><th></th><th></th><th></th></tr>";
	while ($row = mysqli_fetch_array($result)) {
		echo "<tr><form action=\"update.php\" method=\"post\"";
		echo "<tr>";
		echo "<td><input type=\"text\" name=\"name2\" value=\"".$row["Name"]."\" style=\"width:300px;\"></td>";
		echo "<td><input type=\"text\" name=\"author2\" value=\"".$row['Author']."\"></td>";
		echo "<td><input type=\"text\" name=\"genre2\" value=\"".$row['Genre']."\"></td>";
		echo "<td><input type=\"text\" name=\"publisher2\" value=\"".$row['Publisher']."\"></td>";
		echo "<td><input type=\"text\" name=\"year2\" value=\"".$row['Year']."\"></td>";
		echo "<td><a style=\"color:black; text-decoration: none; border:1px solid black; background-color: indianred;\" href=\"delete.php?id=".$row['Id']."\">Löschen</a></td>";
		echo "<td><input type=\"submit\" value=\"Ändern\"></td>";
		echo "<td style=\"display:none;\"><input name=\"id2\" value=\"".$row['Id']."\"></td>";
		echo "</form></tr>";
	}
}
$conn->close();
?>