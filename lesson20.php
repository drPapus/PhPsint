<!DOCTYPE html>
<html>

<head>
</head>

<body>

 

    
 <?php
    // if (isset($_REQUEST['hello']) and $_REQUEST['hello'] == 0) {
    //     echo 'не отмечен';
    // }
    // if (isset($_REQUEST['hello']) and $_REQUEST['hello']) {
    //     echo 'отмечен';
    // }
    

    // function input($name, $value)
    // {
    //     return '<input type="text" name="'.$name.'" value="'.$value.'">';

    // }

    // function input($name, $value)
    // {
    //     if (isset($_REQUEST[$name])) {
    //         $value = $_REQUEST[$name];
    //     }
    //     return '<input type="text" name="'.$name.'" value="'.$value.'">';
    // }
    ?>



<!--      
    <form action="" method="GET">
      <p>Your name: <input type="text" name="name"></p>
      <p>HTML <input type="checkbox" name="lang[]" value="html"></p>
      <p>CSS <input type="checkbox" name="lang[]" value="css"></p>
      <p>php <input type="checkbox" name="lang[]" value="php"></p>
      <p>JS <input type="checkbox" name="lang[]" value="js"></p>
        <input type="checkbox" name="hello" value="1">
         <input type="submit">
    </form> -->

    <?php

        // if (isset($_REQUEST['hello']) == 0) {
        //     echo 'by by!'.$name;
        // }
        // if (isset($_REQUEST['hello']) == 1) {
        //     echo 'hallo!'.$name .'<br>';
        // }
        // if (isset($_REQUEST['lang'])) {
        //     echo 'You now: '. implode('.', $_REQUEST['lang']);
        // }

    ?>

    <!-- <form action="" method="GET">
    <p>Do you now PHP?</p>
    <p>Yes <input type="checkbox" name="php" value="1"></p>
    <p>No <input type="checkbox" name="php" value="0" checked="checked"></p>
    <input type="submit">
    </form> -->

    <?php 
    // if (isset($_REQUEST['php']) and $_REQUEST['php'] == 0) {
    //     echo 'You do not now PHP';
    // }
    // if (isset($_REQUEST['php']) and $_REQUEST['php'] == 1) {
    //     echo 'You now PHP!';
    // }
    ?>
<!-- 
        <select class="" name="age">
            <option value="less20">меньше 20</option>
            <option value="20-25 ">20-25</option>
            <option value="26-30">26-30</option>
            <option value="more30">больше 30</option>
        </select> -->


    <form action="" method="GET">
                
    <!-- <p>Какой из языков вы знаете?</p>
        <select name="lang[]">
            <option value="html">HTML</option>
            <option value="css">CSS</option>
            <option value="php">PHP</option>
            <option value="js">JS</option>
        </select>
        <input type="submit" name="button" value="Подтвердить">
    </form> -->
    <?php 
    // if (isset($_REQUEST['button']) and $_REQUEST['lang']) {
    //     echo 'You now: '.implode($_REQUEST['lang']);
    // }
    
    ?>

    <?php
    
    // function inputName($type, $name, $value)
    // {
    //     if (isset($_REQUEST['name'])) {
    //         $result = $_REQUEST['name'];
    //     }
    //     return '<input type="'.$type.'" name="'.$name.'" value="'.$value.'" >';
    // }
    // echo inputName('text', 'input', 1);

    ?>

    <?php 
    
    function inputType($name)
    {
        if (isset($_REQUEST['name']) and $_REQUEST[$name] ==1) {
            $value = 'cheked';
        } else {
            $value = '';
        }


        return '<input type="hidden" name="'.$name.'" value="0">
        <input type="checkbox" name="'.$name.'" value="'.$value.'">';

    }
    echo inputType('checkbox');
    
    ?>
    
    
        
    
   

</body>

</html>