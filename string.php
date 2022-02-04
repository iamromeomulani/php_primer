<?php 
    $title = "String";
    include 'includes/header.php'?>
    <h1>String</h1>

    <?php
       $phrase1 = "My name is Romaan";
       $phrase2 = "And i am a good boy";
       echo $phrase1 . "Mulani " . $phrase2;
       echo '</br>';
       $name = 'romaan mulani';
       echo 'Uppercase first letter' . ucfirst($name).'</br>';
       
       echo 'Uppercase first letter of each word' . ucwords($name).'</br>';
       echo 'Uppercase ' . strtoupper($name).'</br>';
       echo 'Uppercase ' . strtolower("YO WHAT UP").'</br>';
       echo 'REPEAT :' . strtoupper(str_repeat('romeo',10)).'</br>';
       echo 'substring :' . substr($phrase1,2,10).'</br>'; 
       echo 'position of string :' . strpos($phrase1,'R').'</br>'; 
       echo 'find char :' . strchr($phrase1,'R').'</br>'; 
       echo 'len :' . strlen($phrase1).'</br>'; 
    ?>
<?php require "includes/footer.php" ?>