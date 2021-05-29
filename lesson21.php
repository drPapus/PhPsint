<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <p>Отработка циклов и функций</p>

    <?php 
    
    // for ($i=1; $i <= 100; $i++) { 
    //     echo $i.'<br>';
    // }

    // for ($i=1; $i < 100; $i++) { 
    //     if ($i % 2 == 0) {
    //         echo $i.'<br>';
    //     }
    // }

    // $sum = 0;
    // for ($i=1; $i < 100; $i++) { 
    //     $sum = $sum + $i;
    // }
    // echo $sum;
    
    
    // for ($i=1; $i <= 15; $i++) { 
    //     $sq = $i * $i;
    //     $sum = $sum + $sq;
    // }
    // echo $sum;

    // for ($i=1; $i <= 15; $i++) { 
    //     $sqt += sqrt($i).'<br>';
    // }
    // echo round($sqt,2);

    // for ($i=1; $i <= 100; $i++) { 
    //     $sum = $sum + $i;
    //     if ($sum % 7 == 0) {
    //         echo $sum.'<br>';
    //     }

    // }
    
    // for ($i=1; $i < 10; $i++) { 
    //     $arr[] = 'x';
    // }
    // var_dump($arr);
   
    // for ($i=1; $i <= 10; $i++) { 
    //     $arr[] = $i; 
    // }
    // //var_dump($arr);
    // echo '<pre>';
    // print_r($arr);
    // echo '</pre>';

    // for ($i=10; $i > 0 ; $i--) { 
    //     $arr[] = $i;
    // }

    // echo '<pre>';
    // print_r($arr);
    // echo '</pre>';

    // for ($i=1; $i <= 10; $i++) { 
    //     $arr[] = rand(1,10);
    // }

    // echo '<pre>';
    // print_r($arr);
    // echo '</pre>';
    
    // for ($i=1; $i <= 6; $i++) { 
    //     $str .= rand(1,9);
    // }
    // echo $str;


    // $sum = 0;
    // $arr = range(1,10);

    // for ($i=0; $i < count($arr); $i++) { 
    //     $sum = $arr[$i] + $sum;
    // }

    // echo $sum;

    // $arr = range(1,10);
    // $sum = 0;
    // foreach ($arr as $key) {
    //     $sum = $key + $sum;
    // }
    // echo $sum;

    // $arr = range(1,10);
    // foreach ($arr as $key) {
    //     $sum += $key * $key;
    // }
    // echo $sum;

    //14 задача

    // $arr = range(1,10);
    // foreach ($arr as $key) {
    //     $sum += $key * $key;

    // }
    // echo floor(sqrt($sum));

    // $arr = range(1,30);
    // $sum = 0;
    // foreach ($arr as $key) {
    //     if ($key > 0 and $key < 10) {
    //         $sum += $key;
            
    //     }
    // }
    // echo $sum.'<br>';

    //16

    // $arr = [1,2,3,4,1,1,1,5,6,7,8,9];
    //     foreach ($arr as $key) {
    //     $i = count($arr);
    //     if ($i and $arr[$i] == $arr[($i-1)]) {
    //         echo $arr[$i].'<br>';
    //     }
    //     }

//     $arr = [4,12,73,8,1,1,1,36,7,6,22,22,3];

// for ($i = 0; $i < count($arr); $i++) {
//     if ($i && $arr[$i] == $arr[($i-1)]) {
//         echo 'есть идущие подряд: '.$arr[$i].' - '.$arr[$i].'<br>';
//     }
// }

    // for ($i=1; $i <= 10; $i++) { 
    //     for ($j=1; $j <= $i ; $j++) { 
    //         echo $i;
    //     }
    //     echo '<br>';
    // }

	// $arr = [
	// 	0=>['name'=>'Коля', 'salary'=>300],
	// 	1=>['name'=>'Вася', 'salary'=>400],
	// 	2=>['name'=>'Петя', 'salary'=>500],
	// ];

    // foreach ($arr as $key) {
    //     echo $key['name'].'-'.$key['salary'].'<br>';
    // }

    // for ($i=1; $i <= 10 ; $i++) { 
    //     for ($j=1; $j < 10; $j++) { 
    //         $arr[$i][] = mt_rand(1,10); 
    //     }
    // }

    // for ($i=1; $i <= 10; $i++) { 
    //    for ($j=1; $j <= 10 ; $j++) { 
    //        $arr[$i][] = $j;
    //    }
    // }

    // echo '<pre>';
    // print_r($arr);
    // echo '</pre>';

    //Практика



    // function strlow($str){
    //     $str = lcfirst($str);
    //     return $str;
    // }
    // echo strlow('Low string');
        
        // function rew($str){

        //     $arr = str_split($str);
        //     print_r(array_reverse($arr));
        // }
        // rew('string');

        // function rew($str)
        // {   $arr = str_split($str);
        //     for ($i = count($arr) - 1; $i >= 0; $i--) { 
        //         echo $arr[$i];
        //     }
        // }

        // rew('long string');
            
            // $str = "my string";

            // echo strtoupper($str);
            // echo strtolower($str);

            // $str = 'MystrIng';
            // $arr = str_split($str);
            // $str2 = '';
            // foreach ($arr as $key){
            //     if(ord($key) >= 97 && ord($key) <=122) {
            //         $str2 .= strtoupper($key);
            //     } else {
            //         $str2 .= strtolower($key);
            //     }
            // }
            // echo $str2;

            // $str = 'var_text_hello';
            // $str = str_replace('_',' ', $str);
            // $str = ucwords($str);
            // $str = str_replace(' ', '', $str);
            // echo $str;

            // $arr = explode('_','var_test_text');
            // $str = '';
            // foreach ($arr as $key) {
            //     if ($key == $arr[0]) {
            //         $str .= $key;
            //     } else {
            //         $str .= ucfirst($key);
            //     }
            // }
            // echo $str;

            // for ($i=1; $i <= 9; $i++) { 
            //     echo str_repeat($i, $i).'<br>';
            // }

            


            // $str = 'xxxxxxxxxxxxxxxxxxxx';
            // for ($i = strlen($str)-1; $i >= 0 ; $i--) { 
            //    echo substr($str,-$i,$i).'<br>';     
            // }

            // $arr = [2,3,5,7,1];
            // $newarr = [];

            // foreach ($arr as $key) {
            //     for ($i=0; $i < $key; $i++) { 
            //         $newarr[] .= $key; 
            //     }
            // }

    
            // echo '<pre>';
            // print_r($newarr);
            // echo '</pre>';


            // $arr = [1,2,3,4,5,6,8,9,10,11,12];
            // $result = [];
            // foreach ($arr as $key => $value) {
            //     if ($key % 2 == 0) {
            //         $result[$value] = $key+2;
            //     }
            // }
            // echo '<pre>';
            // print_r($result);
            // echo '</pre>';



            // $arr = [1,2,3,4,5,6,8,9,10,11,12,13,14];
            // $result = [];
            // $keys = [];
            // $num = count($arr)-1;
            // for ($i=0; $i <= $num; $i++) { 
            //     $result[$i+1] = $arr[$i] + 1;         
            // }

            // echo '<pre>';
            // print_r($result);
            // echo '</pre>';

            // $arr = [1,2,3,4,5,6,7,8,9,10,11,12,13,14];
            // $newArr = [];
            // $i = 0;
            // foreach ($arr as $elem) {
            //     if ($i % 2 == 0) {
                    
            //         $newArr[] = $elem; 
            //     }
            // }

            // echo '<pre>';
            // print_r($newArr);
            // echo '</pre>';

            //Дана строка. Удалите из этой строки четные символы. 

            // $str = 'In cillum aliqua nulla';
            // $arr = str_split($str);
            // $newArr = [];
            // $i = 1;
            // foreach ($arr as $key) {
            //     echo $i++;
            //     if ($i % 2) {
            //         unset($arr[$key]);
            //     } else {
            //         $newStr .= $key; 
            //     }
            // }

            // echo '<pre>';
            // echo $newStr;
            // echo '<br>';
            // echo $str;
            // echo '</pre>';


            // Дана строка. Поменяйте ее первый символ на второй и наоборот, 
            // третий на четвертый и наоборот, пятый 
            // на шестой и наоборот и так далее. То есть из строки 
            // '12345678' нужно сделать '21436587'. 

            $str = '12345678';

            $newStr = array_reverse(str_split(strrev($str), 2));

            echo implode('',$newStr);






            


        
                




    ?>
    

    </body>
</html>