<?php
$title = "Exercise 3: variable, Strings & Operatiors";
include 'header.php'; ?>


<h3>Fillup The form<h3>

<form method="post" action="process.php">
    Name: <input type="text" name="nimi" required> <br>
    Email: <input type="email" name="email" required> <br>
    DOB: <input type="date" name="dob"> <br>
    Select Color: <input type="color" name="color"> <br>
    <input type="submit" value="Submit">
</form>

<h5 class="mt-5">String Variables: </h5>

    <?php
    $str1 = "Rabaya";
    $str2 = "Keya";

    $strConcat = $str1 . $str2;
    echo "Joined String: " . $strConcat . "<br>";

    echo "Length of the String: " . strlen($strConcat);
    ?>

<h5 class="mt-5">Number Addition: </h5>
    <?php
    $no1 = 298;
    $no2 = 234;
    $no3 = 46;


    $addition = $no1 + $no2 + $no3;

    echo "The result is " . $addition;
     ?>
     <br>

<h5 class="mt-5">Browser Detection: </h5>
    <?php

    $browser = $_SERVER['HTTP_USER_AGENT'];

    if (strpos($browser, 'Firefox') !== false) {
        echo "You are using Firefox.";
    } elseif (strpos($browser, 'Chrome') !== false) {
        echo "You are using Chrome.";
    } elseif (strpos($browser, 'Edge') !== false) {
        echo "You are using Microsoft Edge.";
    } else {
        echo "Unable to detect...";
    }

    ?>

</div>



<?php include 'footer.php'; ?>