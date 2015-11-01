<a href="test2.php?id=100">LINK</a>
<form action="test2.php" method="post">
	<input name="name"><br>
	<input name="age"><br>
	<input type="submit">
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$name = trim(strip_tags($_POST['name']));
	$age = abs((int)$_POST['age']);
	echo "<p>Ваше имя: ".$_POST['name'];
	echo "<p>Ваш возраст: ".$_POST['age'];
}
 ?>