<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <!-- <form action="" method="GET">
	        <input type="text" name="name">
            <input type="text" name="age" value="3">
            <textarea rows="10" cols="10" name = "mass"></textarea>
	        <input type="submit">
        </form> -->


        <!-- // if (!empty($_REQUEST['name'])){
        //     $name = strip_tags($_REQUEST['name']);
        //     $age = strip_tags($_REQUEST['age']);
        //     $mas = strip_tags($_REQUEST['mass']);
        //     echo 'Your name is: '.$name;
        //     echo 'Your age: '.$age';
        //     echo 'Your massage: '.$mas;

        // } -->

        <!--
       // if (isset($_REQUEST['age'])){


            <form action="" method="GET">
                <input type="text" name="age">
                <input type="submit">
            </form>

      //  }


        // if (isset($_REQUEST['age'])) {
        // $age = strip_tags($_REQUEST['age']);
        // echo 'Your age is '.$age;
        //}
    -->


<!-- 
        <form action="" method="GET">
            <input type="text" name="login">
            <input type="password" name="pass">
            <input type="submit" name="submit">
        </form>
     
      

        // if (isset($_REQUEST['submit'])){
        //     $login = 'Anton';
        //     $pass ='q1w2e3r4';
        //     $formLogin = trim($_REQUEST['login']);
        //     $formPass = trim($_REQUEST['pass']);
        //     if ($login == $formLogin and $pass == $formPass) {
        //         echo 'Доступ разрешён';
        //     } else {
        //         echo 'Доступ запрещён';
        //     }

        // }
        //  -->
<!-- 
        <form action="" method="GET">
            <input type="text" name="name" value="<?php if(isset($_GET['name'])) echo $_GET['name'];?>">
            <input type="submit" name="submit">
        </form> -->

        <!-- <?php

        if(isset($_REQUEST['submit'])) {
            $name = strip_tags($_REQUEST['name']);
            echo 'Your name: '.$name;
        }

        ?> -->

        <form method = "GET">
            <input type="text" name="name" value="<?php if (isset($_GET['name'])) echo $_GET['name']; ?>">
            <textarea rows="20" cols="20" name="text">
            <?php if (isset($_GET['text'])) echo $_GET['text']; ?>
            </textarea>
            <input type="submit" name="submit" value="submit">
        </form>

        <?php 
            if (isset($_REQUEST['submit'])) {
                $name = $_REQUEST['name'];
                $text = $_REQUEST['text'];
                echo 'Your name: '.$name.'<br>';
                echo 'Your text: '.$text;
            }
        ?>
        





    </body>
</html>