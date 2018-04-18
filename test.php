<?php
$tab = array();
for($i=1;$i<=100;$i++)
{
    $tab[] = $i;
}

print_r($tab);
$table = array_rand ($tab, 100);
echo $show_table[$table[0]] . " ";
echo $show_table[$table[1]] . " ";
echo $show_table[$table[2]] . " ";
echo $show_table[$table[3]] . " ";
echo $show_table[$table[4]] . " ";
echo $show_table[$table[5]] . " ";
?>