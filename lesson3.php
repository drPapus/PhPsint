<!DOCTYPE html>
<html>
    <head>
    
    </head>
    <body>
    <h1>3. Основы работы с массивами</h1>
    <?php 
    // $arr = ['a','b','c'];
    // echo var_dump($arr);
    // echo $arr[0];
    // echo $arr[1];
    // echo $arr[2];

    // $arr=['a', 'b', 'c', 'd'];
    // echo $arr[0].'+'.$arr[1].'<br>';
    // echo $arr[2].'+'.$arr[3];

    // $arr = [2,5,3,9];
    // $a = $arr[0]*$arr[1];
    // $b = $arr[2]*$arr[3];
    // $result = $a + $b;
    // echo $result;

    // $arr = ['a'=>1, 'b'=>2,'c'=>3];
    // echo $arr['c'];

    // $arr = ['a'=>1, 'b'=>2, 'c'=>3];
    // $sum = $arr['a']+$arr['b']+$arr['c'];
    // echo $sum;

    // $arr = ['Kolia'=>'1000$', 'Vasia'=>'500$', 'Petia'=>'200$'];
    // echo $arr['Petia'].'<br>';
    // echo $arr['Kolia'];

    // $arr = ['1'=>'пн', '2'=> 'вт','3'=>'ср','4'=>'чт','5'=>'пт','6'=>'сб','7'=>'вс'];
    // $day = $arr['4'];
    // echo $day;

    // $arr = ['cms'=>['joomla', 'wordpress', 'drupal'],
    //         'colors'=>['blue'=>'голубой', 'red'=>'красный', 'green'=>'зеленый']
    // ];

    // echo $arr['cms'][0].' , '.$arr['cms'][2].'<br>'.$arr['colors']['green'].' , '.$arr['colors']['red'];
   
    $arr = ['ru'=>['пн','вт', 'ср', 'чт', 'пт', 'сб', 'вс'],
            'en'=>['mo','tu', 'wd', 'th', 'fr', 'sa', 'su']];
    //echo $arr['ru'][0].'<br>'.$arr['en'][2];
    $lang = 'ru';
    $day = 3;
    
    if ($lang == 'ru' && $day == 3){
        echo $arr['ru'][2];
    }

    



    ?>
    

    </body>
</html>