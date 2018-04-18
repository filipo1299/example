<?php
function generuj_zbior($ilosc){

    $ile=0;
    $zbior_liczb=array();
    while($ile<$ilosc){
        $ile++;
        $zbior_liczb[]=$ile;
    }
    return $zbior_liczb;
    $zbior = generuj_zbior(50);
    echo '<pre>';
    print_r($zbior);
    echo '</pre>';
?>