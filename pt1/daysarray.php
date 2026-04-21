<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>Using PHP Variables, arrays and operators</title>        
</head>

<body>
     <h1>PHP Variables, arrays and operators</h1>
<?php
    $days = array ("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
    
    $daysString = implode(", ", $days);
    echo "<p>Days of the week in English are: <br>$daysString</p>";

    $frenchDays = array ("lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi", "dimanche");
    
    $frenchDaysString = implode(", ", $frenchDays);
    echo "<p>Days of the week in French are: <br>$frenchDaysString</p>";
?>
</body>
</html>
   <!-- 
    echo "<p> Days of the week are</p>";
    for($i =0 ; $i<7; $i++){
        echo "<p>$days[$i]</p>";
   }
    -->