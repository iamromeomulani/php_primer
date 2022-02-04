<?php 
    $title = "DateTime";
    include 'includes/header.php'?>
    <h1>Date Time Manip</h1>
    <?php
    $datenow = getdate();
    echo 'Todays date is :';
    echo $datenow['mday'];
    echo ':';
    echo $datenow['mon'];
    echo ':';
    echo $datenow['year'];
    echo '</br>';
    echo "Today's Date:" . $datenow['mday'] . "/" . $datenow['mon'] . "/" . $datenow['year'] . "</br>";

    echo time() .'</br>';
    ?>
<?php require "includes/footer.php" ?>