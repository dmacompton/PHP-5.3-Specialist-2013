<?php 
	function cleanStr($data) {
		return trim(strip_tags($data));
	}
	function cleanInt($data) {
		return (int)$data;
	}
	function cleanUInt($data) {
		return abs(cleanInt($data));
	}
	function drawTable($cols = 10,	$rows = 10,	$color = '#0080ff') {
		echo "<table border='2' width='300'>";
		for ($i = 1; $i <= $rows; $i++) { 
			echo "<tr>";
			for ($j = 1; $j <= $cols; $j++) { 
				echo ($i == 1 || $j == 1) ? "<th style='background: $color;'>".$i*$j."</th>" :
											"<td>".$i*$j."</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
	}
	function drawMenu($menu, $vertical = true) {
		if (!is_array($menu))
			return false;

		$style = ($vertical) ? '' : " style='display:inline; margin-right: 15px;'";
		echo "<ul>";
		foreach ($menu as $item) {
			echo "<li$style><a href='{$item['href']}'>{$item['link']}</a></li>";
		}
		echo "</ul>";

		return true;
	}
?>