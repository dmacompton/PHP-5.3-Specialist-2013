<?php

	if(!drawMenu($leftMenu, false))
		echo ERR_DRAW_ON_BOTTOM_MENU;
?>
<hr>
&copy; <?= COPYRIGHT ?>, 2000 - <?= strftime('%Y')?>
<hr>
<p>Powered by <?=$_SERVER['SERVER_SOFTWARE']?>/<?=PHP_VERSION?> on <?=PHP_OS?></p>