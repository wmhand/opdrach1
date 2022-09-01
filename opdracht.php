<!doctype html >
<html lang="nl">

    <head>
        <title> opdracht 1 </title>
    </head>
<body>

<h1> <b>H3 opdracht 1 </b></h1>
<?php
$today = date(" l j F Y");
echo "vandaag is het $today <br>";

$day = date("z");
echo "vandaag is het dag $day van het jaar <br>";

$day1 = date("l ");
$week = date("w");

echo "$day1 is de {$week}e dag van de week <br>";

$month = date("F");
$DayMonth = date("t");

echo "de maand $month heeft in totaal $DayMonth dagen in de maand <br>";


if (date("L") ==1) {
    echo "het jaar" . date("Y") . "is een schrikkeljaar";
}
else  {
    echo "het jaar" . date("{Y}") . "is geen schrikkeljaar";


}




?>
<h1> <b>H4 opdracht 1 </b></h1>

<?php

$time = date("H");


if ($time > 6 && $time < 12 && $time === 12 ){
    echo "het is ochtend";


}if ($time > 12 && $time    < 18){
    echo "het is middag";


}if ($time > 18 && $time < 24){
    echo "het is avond";


}if ($time > 00 && $time < 6){
    echo "het is nacht";


}



?>







</body>