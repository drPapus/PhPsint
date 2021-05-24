<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <?php

    // function wcut($str, $num = 10)
    // {
    //     return substr($str, 0, $num);
    // }
    // echo wcut('Nisi fugiat consequat pariatur magna.',5);

    // $arr = range(1,5);
    // last($arr);
    // function last($arr)
    // {
    //     echo array_pop($arr).'<br>';

    //     if (!empty($arr)) {
    //         last($arr);
    //     }
    // }
    
    sum(12345);

    function sum($num)
    {
        $result = array_sum($num);

            if ($result > 9) {
                $result = sum($result);
            }
            return $result;
    }
    




    ?>


    </body>
</html>