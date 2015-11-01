<?php
	$size = ini_get('post_max_size');	// 32M
	$letter = $size{strlen($size) - 1};	// получаем M
	$size = (int)$size;					// 32 - к инту приводим размер

	switch (strtoupper($letter)) {
		case 'G':
			$size *= 1024;
		case 'M':
			$size *= 1024;
		case 'K':
			$size *= 1024;
	}
	
	define('ERR_DRAW_ON_LEFT_MENU', 'Извините...');
	define('ERR_DRAW_ON_BOTTOM_MENU', 'Извините...');
	/********************************/
	$leftMenu = array(
				array('link' => 'Домой', 			'href' => 'index.php?'),
				array('link' => 'О нас', 			'href' => 'index.php?id=about'),
				array('link' => 'Контакты', 		'href' => 'index.php?id=contact'),
				array('link' => 'Таблица умножения','href' => 'index.php?id=table'),
				array('link' => 'Калькулятор', 		'href' => 'index.php?id=calc')
				);
	
	/********************************/
	$hour = (int)strftime('%H');
	$welcome = '';
	if ($hour > 0 and $hour < 6) $welcome = "Доброй ночи";
	elseif ($hour >= 6 and $hour < 12) $welcome = "Доброе утро";
	elseif ($hour >= 12 and $hour < 18) $welcome = "Добрый день";
	elseif ($hour >= 18 and $hour < 23) $welcome = "Добрый вечер";
	else $welcome = "Доброй ночи";
	//Выбираем дат
	setlocale(LC_TIME, "rus");
	$day = strftime('%d');
	$mon = strftime('%B');
	$year = strftime('%Y');
	define("COPYRIGHT", "Супер Мега Веб-мастер");
?>