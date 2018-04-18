<?php
//zad1
$numbers = array();

for ($i = 0; $i <= 100; $i++) {
    $numbers[$i] = rand(0, 100);
    for ($j = 0; $j < $i; ++$j)
        if ($numbers[$j] == $numbers[$i]) --$i;

}
//print_r($numbers);
////zad2.
    
$table_two_dimensional = array();
for ($x = 0; $x < 10; $x++) {
    $row = array();
    for ($y = 0; $y < 10; $y++) {
        $row[] = rand(0,100);
    }
    $table_two_dimensional[] = $row;
}

print_r($table_two_dimensional);
//zad3
$cols = rand(50,100); 
$n = rand(50,100);    
$table = array();
for ($f = 0; $f < $n; $f++) {
    $row = array();
    for ($l = 0; $l < $cols; $l++) {
        $row[] = 1;
    }
    $table[] = $row;
}

print_r($table);
//zad4,5,6
$info = array('marek@wp.pl' => 2
, 'magda@wp.pl' => 50
, 'arek@wp.pl' => 40
, 'aniawp.pl' => 80);

foreach ($info as $key => $value)
    if ($value > 50){
        echo $key . " -> " . $value . "<br>";}
foreach ($info as $key => $value)
    echo $wynik=strstr($key, '@')."<br>";

///zad8

function returnNumer($c)
{
    echo($c / 2)."<br>";
}

returnNumer(10);
///zad9
$name = "marek";
$domain = "raz.pl";


function returnEmail($name, $domain)
{
    echo($name . "@" . $domain);
}

returnEmail($name, $domain);

