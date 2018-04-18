<?php
$liczby = array();

for ($i=0 ; $i<=100 ;$i++ )
{
    $liczby[$i] = rand(0,100);
    for ($j=0 ; $j<$i ; ++$j)
        if ( $liczby[$j] == $liczby[$i] ) --$i;

}
print_r($liczby);
