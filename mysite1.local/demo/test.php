<? 
	function sayHello($h = 6, &$name) {
		echo "<h$h>Hello, $name!</h$h>";
		echo $name;
		$name = 'dma';
		echo "<h$h>Hello, $name!</h$h>";
	}
	$name = "Вася";
	sayHello(1, $name);
	echo $name;
?>