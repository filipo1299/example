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
$tab[][] = "";

for ($a = 0; $a <= 100; $a++) {
    for ($b = 0; $b <= 100; $b++) {
        $tab[$a][$b] = rand(100, 1000);
    }
}
//print_r($tab);
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

