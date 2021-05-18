<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>

    <?php

    // function cub($num){

    //  return $num * $num;
    // }

    // function sum($num,$num2){
    //     return $num + $num2;

    // }
    //  $n = sum(3,3);
    //  echo $n;
    
    //  function dev($a, $b, $c){
    //      return ($a - $b) / $c;
    //  }
    // $p = dev(8,2,2);
    // echo $p;
    

    function day($num){

        switch($num){
        case 1:
            return 'пн';
        break;
        case 2:
            return 'вт';
        break;
        case 3:
            return 'ср';
        break;
        case 4:
            echo 'чт';
        break;
        case 1:
            return 'пт';
        break;
        case 5:
            return 'сб';
        break;
        case 6:
            return 'вс';
        break;
        }
    }
    echo day(3);

    ?>

    </body>
</html>