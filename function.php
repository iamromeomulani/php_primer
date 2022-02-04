<?php 
    $title = "Function";
    include 'includes/header.php'?>
    <h1>Function</h1>

    <?php
       function heythere(){
           echo 'My name is Romeo';
       }

       heythere();

       echo '</br>';

       function addfuc($num1,$num2){
           $sum = $num1 + $num2;
           echo "The sume of $num1 and $num2 is $sum";
       }

       addfuc(10,20);
       echo '</br>';

       function multi($n1,$n2){
           $pro = $n1 * $n2;
           echo "The product of $n1 and $n2 is $pro";
       }

       multi(5,5);
    ?>
<?php require "includes/footer.php" ?>