<!doctype html >
<html lang="nl">

    <head>
        <title> opdracht 1 </title>
    </head>
<body>

<h1>hello world</h1>
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










</body>