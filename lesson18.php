<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>

    <?php 
    // function translit($s) {
    //     $s = (string) $s;
    //     $s = strip_tags($s);
    //     $s = str_replace(array("\n","\r"), " ", $s);
    //     $s = preg_replace("/\s+/", ' ',$s);
    //     $s = trim($s);
    //     $s = function_exists('mb_strtolower') ? mb_strtolower($s) : strtolower($s);
    //     $s = strtr($s, array('а'=>'a','б'=>'b','в'=>'v','г'=>'g','д'=>'d','е'=>'e','ё'=>'e','ж'=>'j','з'=>'z','и'=>'i','й'=>'y','к'=>'k','л'=>'l','м'=>'m','н'=>'n','о'=>'o','п'=>'p','р'=>'r','с'=>'s','т'=>'t','у'=>'u','ф'=>'f','х'=>'h','ц'=>'c','ч'=>'ch','ш'=>'sh','щ'=>'shch','ы'=>'y','э'=>'e','ю'=>'yu','я'=>'ya','ъ'=>'','ь'=>''));
    //     $s = preg_replace("/[^0-9a-z-_]/i", "", $s);
    //     $s = str_replace(" ", "-", $s);
    //     return $s;
    // }
    // echo translit('преобразуем в строковое значение');


 
    // function cnt($num)
    // {
    //     $a = ' яблоко';
    //     $b = ' яблока';
    //     $c = ' яблок';

    //     $num = $num . "";
    //     if(substr($num,-1) == 1){
    //         echo $num . $a;
    //     }elseif (substr($num,-1) == 2) {
    //         echo $num . $b;
    //     }elseif (substr($num,-1) == 3) {
    //         echo $num . $b;
    //     }elseif (substr($num,-1) == 4) {
    //         echo $num . $b;
    //     }
    //     else {
    //         echo $num . $c;
    //     }

    // }
    // cnt(1);
    // cnt(2);
    // cnt(3);
    // cnt(4);
    // cnt(5);
    // cnt(6);
    // cnt(21);
    // cnt(23);
    // cnt(27);




    
//     function lucky($tiket)
//     {
//     $tiket = $tiket . "";
//     $arr = str_split($tiket);
//     $half = array_chunk($arr, ceil(count($arr)/2));
//    // var_dump($half);
//     if (array_sum($half[0]) == array_sum($half[1])) {
//         echo 'lucky';
//     } else {
//         echo 'ne fart';
//     }
//     }

//    echo lucky(123456);
//   // var_dump($arr);

// Дружественные числа - два различных числа, для которых сумма всех собственных делителей первого числа равна второму числу и наоборот, сумма всех собственных делителей второго числа равна первому числу.
// Например, 220 и 284. Делители для 220 это 1, 2, 4, 5, 10, 11, 20, 22, 44, 55 и 110, сумма делителей равна 284. Делители для 284 это 1, 2, 4, 71 и 142, их сумма равна 220.
// Задача: найдите все пары дружественных чисел в промежутке от 1 до 10000. Для этого сделайте вспомогательную функцию, которая находит все делители числа и возвращает их в виде массива. Также сделайте функцию, которая параметром принимает массив, а возвращает его сумму.
    
    $arr = range(1,1000);

    function getCommonDivisors($num)
    {
        $div = array ();
        for ($i=1; $i < $num ; $i++) { 
            if ($num % $i == 0) {
                $div[] = $i;
            }
        }
        return $div;
    }
     $div = getCommonDivisors(40);



  



?>


    </body>
</html>
