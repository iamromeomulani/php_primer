    <?php 
    $title = "Index";
    include 'includes/header.php'?>
    <h1>Hello World</h1>
    
    <?php   
        echo 'You are welcome';
        echo '</br>';
        echo 'i know right';
    ?>
    <!-- Basic call-->
    <?php
        //declare variable
        $name = 'Romaan Mulani';
        $age = '20';
        //calling variable
        echo $name;
        echo '<h1>My name is: '.$name.' </h1>';
        echo '<h1>My age is: '.$age.' </h1>';


        echo "<h1>My name is: '.$name.' </h1>"
    ?>

    <!-- If statement-->
    <?php
    
   $grade = 80;
   
   if($grade > 75){
       echo '<h1 style="color: red">Your remark is A</h1>';
    }
   elseif($grade >= 35){
       echo '<h1 style="color: green">You remark is B</h1>';
    }
    else{
        echo '<h1 style="color: purple>Your remark is C</h1>';
    }
    ?>



    <!-- Switch statement-->
    <?php

    $nme = 'Romaan';

    switch($nme){
        case 'Romaan':
            echo '<h2>Yes this is Romaan</h2>';
            break;
        case 'Afan':
            echo '<h2>Yes this is Afan</h2>';
            break;
        default:
            echo '<h2>Yes this is Rishabh</h2>';
            break;  
    }

    ?>

    <!-- For loop -->

    <?php
        for($count = 0; $count <= 20; $count++){
            echo 'romeo';
            echo '</br>';
        }

        for($count = 0; $count <= 20; $count++){
            echo "The count is $count";
            echo '</br>';
        }

    ?>

    <!-- While loop -->

    <?php
        $grde = 0;
        while($grde < 10){
            echo 'not yet';
            echo '</br>';
            $grde++;
        }
        echo 'finally done';
        echo '</br>';
    ?>

    <!-- do-While loop -->

    <?php
        $graade = 0;
        do{
            echo 'start';
            $graade++;
        }
        while($graade < 10);
    ?>
    <button type="button" class="btn btn-secondary">CLICK ME</button>
   <?php require "includes/footer.php" ?>