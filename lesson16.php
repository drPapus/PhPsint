<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <h1>Задачи</h1>

    <?php 

	// $arr = [];
    // $str = '';
	// for ($i=0; $i < 10; $i++) { 
    //     array_push( $arr, $str);
    //     $str .= 'x';

    // }
	// var_dump($arr);

    // $arr = [];


    // for ($i=1; $i <= 9; $i++) { 
    //     $str = '';
    //     for ($j=1; $j <= $i ; $j++) { 
            
    //         $str .= $i;
            
    //     }
    //     array_push( $arr, $str);
    // }
    // var_dump($arr);
    
//     function arrayFill($string, $num)
// {
//     $arr = [];
//     $str = $string;

//     for ($i=0; $i < $num; $i++) { 
//         array_push($arr, $str);
//         $str .= $string;
//     }
//     var_dump($arr);
// }
// arrayFill('b', 6);


    // $arr = [3,2,5,6,1,5,7];
    // $sum = 0;
    // for ($i=0; $sum < 10; $i++) { 
    //     $sum += $arr[$i];
    //     echo $i;
    // }

    // $arr = [[1, 2, 3], [4, 5], [6]];
    // foreach ($arr as $key) {
    //      foreach ($key as $subKey) {
    //         $sum += $subKey;
    //     }
    // }
    // echo $sum;

        // $arr = [[[1, 2], [3, 4]], [[5, 6], [7, 8]]];
        // foreach ($arr as $key) {
        //     foreach ($key as $subKey) {
        //         foreach ($subKey as $megaKey) {
        //             $sum += $megaKey;
        //         }
        //     }
        // }
        // echo $sum;

        $arr = [];
        $k = 1;
    for ($i=1; $i <= 3; $i++) { 
        $arr[$i] = [];
        for ($j=1; $j <= 3; $j++){ 
            $arr[$i][$j] = $k++;
           // $k++;
        }
    }
 echo '<pre>';
 var_dump($arr);
 echo '<pre>';

?>
	





    </body>
</html>






