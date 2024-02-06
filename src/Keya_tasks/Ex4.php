<?php
include 'header.php'; ?>

<h5> Let's First Check if you're Eligible for Vote</h5>
<form method="post" action="">
    Nimi: 
    <input type="text" name="name"> 

    <br>

    Age: 
    <input type="number" name="age">

    <br>
    <br>
    <input type="submit" name="Votability" value="Check Maturity">
</form>


<?php

 if(isset($_POST['Votability'])) 
 {
    $name = $_POST['name'];
    $age = $_POST['age'];

    if($age >= 18) {
        echo " $name, you look very Qualified for vote!";

    } 
    else {
        echo " $name, you are not eligible  for voting Kiddo.";
    }
 }
?>

<br>
<br>


<?php
 $currentMonth = date('F');

 switch($currentMonth) 
 {
    case 'August':
        echo "It's August, so it's still holiday.";
    break;

    default:
        echo "Not August, this is $currentMonth so I don't have any holidays";
 }
?>

<br>
<br>


<form method="post" action="">

    Enter a number: 
    <input type="number" name="for_me">
    
    <br>
    <br>
    <input type="submit" name="for_you" value="Enjoy">

</form>

<?php
 if(isset($_POST['for_you'])) 
 {
    $for_me = $_POST['for_me'];

    for($i = 1; $i <= 10; $i++) 
     {
        echo "$for_me x $i = " . ($for_me * $i) . "<br>";
    }
 }
?>

<br><br>


<form method="post" action="">
    Enter a number: <input type="number" name="Do_it">
    
    <br>
    <br>
    <input type="submit" name="submit" value="Do_it">
</form>

<?php
 if(isset($_POST['submit'])) 
 {
    $do_it = $_POST['Do_it'];
    $i_while = 1;

    while($i_while <= $do_it) 
    {
        echo $i_while . "<br>";
        $i_while++;
    }
 }
?>

<br>
<br>


<?php
 $myarray = array("HTML", "CSS", "PHP", "JavaScript");

 foreach($myarray as $value) 
 {
    echo $value . "<br>";
 }
?>

<?php
include 'footer.php';
?>
