<!DOCTYPE html>
<html>
    <head>
    
    </head>
    <body>
    <h1>Работа с циклами foreach, for, while в PHP</h1>
<?php 

// $arr = ['html', 'css', 'php', 'js', 'jq'];
// foreach ($arr as $elem) {
//     echo $elem. '<br>';
// }

// $arr = [1,2,3,4,5];

// foreach ($arr as $elem) {
//     $result += $elem * $elem;
// }
// echo $result;
// 


// $arr = ['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'];
// foreach ($arr as $elem => $value) {
//     echo $elem.' - '.$value.'<br>';
// }


// $arr = ['Коля'=>'200', 'Вася'=>'300','Петя'=>'400'];
// foreach ($arr as $elem => $value) {
//     echo $elem. ' - зарплата '.$value.' долларов.'.'<br>';
// }

//Циклы while и for

// $i = 1;
// while ($i <= 100) {

//     echo $i. '<br>';
//     $i++;
    
// }



// for ($i = 0; $i <= 100; $i+=2){
//     echo $i. '<br>';
// }

// for($i = 0; $i < 100; $i++) {
//     $res += $i;
// }
// echo $res;

// $arr = [2,5,9,15,0,4];
// foreach ($arr as $elem) {
//     if ($elem > 3 && $elem < 10){
//         echo "$elem<br>";
//     }
// }

// $arr = [2,5,9,-15,0,4,-3,-2];
// foreach ($arr as $elem) {
//     if($elem >= 0){
//         $res = $elem + $res;

//     }
  
// }
// echo $res;

// $arr = [1, 2, 5, 9, 4, 13, 4, 10];
// foreach ($arr as $elem) {
//     if($elem == 4){
//         echo 'Have!';
//         break;
//     }
// }

// $arr = ['10', '20', '30', '50', '235', '3000'];
// foreach ($arr as $elem) {
//     if($elem[0] == 1){
//         echo $elem.'<br>';
//     }
//     if($elem[0] == 2){
//         echo $elem.'<br>';
//     }
//     if($elem[0] == 5){
//         echo $elem.'<br>';
//     }
// }

// $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
// foreach ($arr as $elem) {
//     echo '-'.$elem;
// }

// $arr = ['пн','вт','ср','чт','пт','сб','вс'];
// foreach ($arr as $elem) {
//     if($elem != 'сб' && $elem !='вс'){
//         echo $elem.'<br>';
//     } else {
//         echo '<b>'.$elem.'</b>'.'<br>';
//     }
// }

// $arr = ['пн','вт','ср','чт','пт','сб','вс'];
// foreach ($arr as $elem) {
//     if($elem == 'сб'){
//         echo '<i>'.$elem.'</i>'.'<br>'; 
//     } else {
//         echo $elem.'<br>';
//     }
// }

// $arr = [];
// for($i = 0; $i <= 100; $i++){
//     $arr[] = $i;
// }
// var_dump($arr);

// $arr = ['green'=>'зеленый', 'red'=>'красный', 'blue'=>'голубой'];
// $en = [];
// $ru = [];
// foreach ($arr as $key => $value) {
//     $en[] = $key;
//     $ru[] = $value;
// }
// var_dump($en).'<br>';
// var_dump($ru);


// $num = 1000;
// for($i = $num / 100; $num > 50; $i--) {
//     $num = $num / 2;
//     echo $i.') '.$num.'<br>';
// }

// for($num = 1000, $i = 0; $num > 50; $num /= 2, $i++);
//     echo $num.'<br>';
//     echo $i.'<br>';

// $num = 1000;
// $i = 0;
// while ($num >= 50) {
//     $num /= 2;
//     $i++;
// }

// echo $num.'<br>';
// echo $i;

?>



    </body>
</html>