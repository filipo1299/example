<?php
//zad1
$numbers = array();

for ($i = 0; $i <= 100; $i++) {
    $numbers[$i] = rand(0, 100);
    for ($j = 0; $j < $i; ++$j)
        if ($numbers[$j] == $numbers[$i]) --$i;

}
print_r($numbers);
////zad2.
$tab[][] = "";

for ($a = 0; $a <= 100; $a++) {
    for ($b = 0; $b <= 100; $b++) {
        $tab[$a][$b] = rand(100, 1000);
    }
}
print_r($tab);
