<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="utf-8">
	<title>Buecher</title>
	<style> <?php include 'bookStyle.css'; ?> </style>
	<style> <?php include 'main_css.css'; ?> </style>
</head>
<body>
	<ul>
		<li>
			<a href="http://localhost/Proiect/Main.html">Startseite</a>
		</li>
		<li>
			<a href="http://localhost/Proiect/menu.xml" target="_blank">Menü</a>
		</li>
		<li>
			<a href="http://localhost/Proiect/Bilder_Angebote.html">Angebote der Woche</a>
		</li>
		<li>
			<a href="http://localhost/Proiect/Menus_Top.php">Menüs Rating</a>
		</li>
		<li>
			<a href="http://localhost/Proiect/X-0.html" target="_blank">Gewinne ein Sandwich!</a>
		</li>
		<li>
			<a href="http://localhost/Proiect/buecher.php" class="active">Essen Buch Forum</a>
		</li>
		<li style="float:right">
			<img src="https://logos-download.com/wp-content/uploads/2016/03/Subway_logo_white.png"/>
		</li>
	</ul>
	<h1>Bücher</h1>
	<p>Dieses Jahr haben wir die Ehre, Teil des Sponsorenteams der beliebten MasterChef-Show zu sein. Mit dieser Gelegenheit haben wir ein Forum mit den bekanntesten Büchern für diejenigen erstellt, die gerne kochen. Die Genres sind: Mexican Food, Italian Food und Chinese Food.</p>
	<br>
	<form method="POST">
		<select name="category" onchange="loadBooks(this.value)">
			<option>Wähle ein Genre:</option>
			<option value="All">Alle</option>
			<option value="Mexican Food">Mexican Food</option>
			<option value="Italian Food">Italian Food</option>
			<option value="Chinese Food">Chinese Food</option>
		</select>
		<br>
		<table id="books"></table>
		<br>
		<p>Haben Sie weitere Buchvorschläge? Zögern Sie nicht, sie hinzuzufügen.</p>
		<input type="text" name="name" placeholder="Name">
		<input type="text" name="author" placeholder="Autor">
		<input type="text" name="genre" placeholder="Genre">
		<input type="text" name="publisher" placeholder="Verlag">
		<input type="text" name="year" placeholder="Jahr">
		<input type="submit" name="insert" value="Einfügen">
		<br>
		<br>
		<p>Wenn ein Buch wiederholt wird oder nicht passt, löschen Sie es bitte.</p>
		<br>
		<p>Vielen Dank, dass Sie dazu beigetragen haben, das Forum am Laufen zu halten! :)</p>	
	</form>
<?php include 'insert.php';?>
<?php include 'update.php';?>
<script src="ajax.js"></script>
</body>
</html>