<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <?php 
    // $arr = range(1,10);
    // foreach($arr as $elem){
    //     if($elem == 5){
    //         $flag = true;
    //         break;
    //     }
    // }

    // $num = 31;
    // $arr = range(1,31);
    // foreach ($arr as $key) {
    //     if($num / $key == 1 or $num / $key == 31){
    //     $flag = true;
    //     break;
    //     }
    
    // }
    // if ($flag === true) {
	// 	echo 'Делится';
	// } else {
	// 	echo 'Неделится';
	//}

    $arr = [1,2,3,4,5,6,7,4,8,9,4];
    foreach ($arr as $key) {
        if($key == 4){
            $flag = true;
            break;
        }
    }

    if ($flag == true) {
        echo 'Есть';
    } else {
        echo 'Нету';
    }
    ?>
    
    </body>
</html>