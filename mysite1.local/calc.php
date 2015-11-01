<?php 
$output = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	// TODO: Проверить, все ли поля пришли?
	$n1 = cleanInt($_POST['num1']);
	$n2 = cleanInt($_POST['num2']);
	$op = cleanStr($_POST['operator']);
	$output = "$n1 $op $n2 = ";
	switch ($op) {
		case '+': $output.= $n1 + $n2; break;
		case '-': $output.= $n1 - $n2; break;
		case '*': $output.= $n1 * $n2; break;
		case '/': 
			if ($n2 === 0) {
				$output = 'Деление на 0 запрещено!';
			} else {
				$output.= $n1 / $n2;	
			}
			break;
		default: $output = "Неизвестный оператор '$op'";
	}
}
if ($output) {
	echo "<h3>Результат: $output</h3>";
}
?>
<form action='' method="POST">
	<label>Число 1:</label><br />
	<input name='num1' type='text' value="<?= $n1 ?>" /><br />
	<label>Оператор: </label><br />
	<input name='operator' type='text' value="<?= $op ?>" /><br />
	<label>Число 2: </label><br />
	<input name='num2' type='text' value="<?= $n2 ?>" /><br /><br />
	<input type='submit' value='Считать'>
</form>