<!DOCTYPE html>
<html>
    <head>
    
    </head>
    <body>
    <h1>4. Задачи на конструкции if-else, switch-case в PHP</h1>

    <?php 
    // $a = 'тест';
    // if ($a === 'test') {
    //     echo 'True!';
    // } else {
    //     echo 'False!';
    // }

  //$a = null; //true
    //$a = 1; //false
   // $a = 3;    //false
  //  $a = null;  //true
  // $a = true;  //false
  // $a = '';    //true
   //$a = '0';    //true
   //$a = 0;
    // if (!isset($a)) {
    //     echo 'True!';
    // } else {
    //     echo 'False!';
    // }

    // $var = false;

    // if($var !== true) {
    //     echo 'True';
    // } else {
    //     echo 'False';
    // }
    // $a = 2;

    // if($a == 0 or $a == 2) {
    //     echo $a + 7;
    // } else {
    //     echo $a / 10;
    // }

    // $num = 5;

    // switch ($num) {
    //     case 1:
    //         echo 'Зима';
    //     break;
    //     case 2:
    //         echo 'Весна';
    //     break;
    //     case 3:
    //         echo 'Лето';
    //     break;
    //     case 4:
    //         echo 'Осень';
    //     break;
    //     default:
    //         echo 'Нет такого!';
    //     break;
    // }

    // $day = 35;

    // switch($day) {
    //     case $day >= 1 && $day <= 10:
    //         echo $day.' Первая декада';
    //     break;
    //     case $day >= 11 && $day <= 20:
    //         echo $day.' Вторая декада';
    //     break;
    //     case $day >= 21 && $day <= 31:
    //         echo $day.' Третья декада';
    //     break;
    //     default:
    //         echo $day.' Нет такого!';
    //     break;

    // }



    //     $month = 5;

    // switch ($month) {
    //     case $month == 1 or $month == 2 or $month == 3:
    //         echo 'Зима';
    //     break;
    //     case $month == 4 or $month == 5 or $month == 6:
    //         echo 'Весна';
    //     break;
    //     case $month == 7 or $month == 8 or $month == 9:
    //         echo 'Лето';
    //     break;
    //     case $month == 10 or $month == 11 or $month == 12:
    //         echo 'Осень';
    //     break;
    //     default:
    //         echo 'Нет такого!';
    //     break;
    // }


    // $year = 1600;

    // if($year % 4 == 0 && $year % 100 !== 0 or $year % 400 == 0) {
    //     echo 'Високосный';
    // } else {
    //     echo 'НеВисокосный';
    // }

    // $str = 'abcde';
    // if($str[0] == 'c') {
    //     echo 'Yes!';
    // } else {
    //     echo 'No!';
    // }

    // $str = '123';
    // echo array_sum(str_split($str));

    $str = '123323';
    $sum = $str[0] + $str[1] + $str[2];
    $sum2 = $str[-1] + $str[-2] + $str[-3];
    if($sum == $sum2){
        echo 'Yes!';
    } else {
        echo 'No!';
    }




    ?>
    

    </body>
</html>