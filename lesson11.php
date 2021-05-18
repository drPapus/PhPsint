<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>

	<?php 
	echo mktime(12,35,00,11,5,2021).'<br>';
	echo strtotime('2025-03-01 12:35:00'). '<br>';
	echo time() - mktime(13,12,59,3,15,2000).'<br>';
	echo mktime(07,23,48,0,0,0)-mktime(3,29,30,0,0,0).'<br>';

	echo date('Y-n-d H:i:s');
	?>
	

    </body>
</html>