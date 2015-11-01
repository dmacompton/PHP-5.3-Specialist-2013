<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>Массивы</title>
</head>

<body>
<h1>Массивы</h1>
<pre>
<?php
$arr = array();

$arr1 = array("Январь", "Февраль", "Март", "Апрель");

$user = array('name' => 'John',
			  'login' => 'root',
			  'pass' => '1234',
			  'age' => 25, true);

$user1[] = 'John';
$user1[] = 'root';
$user1[] = '1234';
$user1[] = 25;
$user1[] = true;

$nums = [1, 2, 3, 4, 5];
print_r($nums);

foreach ($nums as &$value) {
	$value *= 10;
	echo $value.'<br>';
}

print_r($nums);
// echo "Ваше имя: ${user['name']}";


// echo var_dump($user);
// echo var_dump($user1);
/* 
# автозаполнение
$a[] = "Привет";
$a[] = "Еще";
$a[] = "Привет";
$a[] = "И еще";

# индексные массивы
$b[0] = "Привет";
$b[1] = "Еще";
$b[2] = "Привет";
$b[3] = "И еще";





$d[1][2] = "123";
print $d[1];


# Ассоциативные массивы
$a1["Маша"] = "Привет";
$a1["Саша"] = "Еще";
$a1["Петя"] = "Привет";
$a1["Даша"] = "И еще";


$a2 = array("Саша" => 5, "Даша" => "Привет");
 */
?>
</body>
</html>
