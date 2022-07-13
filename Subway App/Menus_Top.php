<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="utf-8">
	<title>Top Menus</title>
	<style> <?php include 'Top_Menus_Style.css'; ?> </style>
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
			<a href="http://localhost/Proiect/Menus_Top.php" class="active">Menüs Rating</a>
		</li>
		<li>
			<a href="http://localhost/Proiect/X-0.html" target="_blank">Gewinne ein Sandwich!</a>
		</li>
		<li>
			<a href="http://localhost/Proiect/buecher.php">Essen Buch Forum</a>
		</li>
		<li style="float:right">
			<img src="https://logos-download.com/wp-content/uploads/2016/03/Subway_logo_white.png"/>
		</li>
	</ul>
	<h1>Top Menüs</h1>
	<table>
		<th>Menü</th>
		<th>Rating</th>
		<tr>
			<?php include 'Show_Top.php';?>
		</tr>
	</table>
	<h2>Wie haben die neuen Menüs dir gefallen? Lass uns ein Rating!</h2>
	<form method="POST">
		<label>Menü Name:</label>
		<select name="0">
			<option selected>-</option>
			<option>Maxi Subway Melt mit BBQ (+Sprite)</option>
			<option>Maxi B.L.T. mit Knoblauchsoße (+Coca-Cola/Kaffee)</option>
			<option>Mini BBQ Ribs mit Chilli (+Brownie)</option>
			<option>Maxi Tuna mit Chilli (+Vanille Milchshake)</option>
			<option>Mini Pizza mit Ketchup (+Limonade)</option>
		</select>
		<br>
		<label>Sandwich:</label>
		<select name="1">
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option selected>5</option>
		</select>		
		<label>Soße:</label>
		<select name="2">
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option selected>5</option>
		</select>
		<label>Bonus Gericht/Drink:</label>
		<select name="3">
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option selected>5</option>
		</select>
		<br>
		<input type="submit" name="update" value="Senden">
	</form>
	<?php include 'Menus_Top_Update.php';?>
</body>
</html>