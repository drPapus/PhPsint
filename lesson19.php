<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <?php 
    // function square($var = 5)
    // {
    //     $result = $var*$var;
    //     return $result.'<br>';
    // }
    // echo square();
    // echo square(3);

    // function words($word1, $word2='world', $word3='!')
    // {
    //     echo $word1;
    //     echo $word2;
    //     echo $word3;

    // }
    // words('Hello, ', 'Dimon');

    // function func()
    // {
    //     $local = 'Test!';
    //     var_dump($local);
    // }

    // $test = 'Тест!';
    // function func()
    // {
    //     global $test;
    //     var_dump($test);
    // }
    // $func();

    // function func()
    // {
    //     static $a;
    //     $a++;
    //     echo $a;
    // }
    // func();
    // func();
    // func();
    //
    // function kv($var)
    // {
    //     return $var*$var;
    // }

    // $test = 2;

    // echo kv($test)
    $arr = [1,2,3,4,5];
    last($arr);
    function last($arr)
    {
        echo array_pop($arr).'<br>';
        if(!empty($arr)) {
            last($arr);
        }
    }



    ?>


    

    </body>
</html>