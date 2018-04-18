<?php
$tab = array();
for($i=1;$i<=100;$i++)
{
    $tab[] = $i;
}

print_r($tab);

$lotto = array_rand ($tab, 100);
echo $show_table[$lotto[0]] . " ";
echo $show_table[$lotto[1]] . " ";
echo $show_table[$lotto[2]] . " ";
echo $show_table[$lotto[3]] . " ";
echo $show_table[$lotto[4]] . " ";
echo $show_table[$lotto[5]] . " ";
?>