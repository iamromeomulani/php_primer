<?php 
    $title = "Array";
    include 'includes/header.php'?>
    <h1>Arrays</h1>

    <?php
        // a variable
        $num = 5;

        //an array
        $number = array(1,2,3,4,5,6,7,8,9,10);
        echo $number[5];

        echo "<h2>$number[2]</h2>";
        $size = count($number);
        echo "<h2>Hey the size is $size</h2>";

        for($count = 0; $count < $size;$count++ ){
            echo "$number[$count]";
        }
    ?>
<?php require "includes/footer.php" ?>