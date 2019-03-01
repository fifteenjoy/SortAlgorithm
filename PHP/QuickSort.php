<?php

$a = array(11,5,7,9,34,8,10,13,15);
$i = 0;
$r = 4;

function partition(&$a,$p,$q){
   echo " a is:";
   print_r($a);
$pivot = $a[$p];
echo "pivot is " .$pivot;
$i = $p;
for ($j=$p+1;$j< $q;$j++) {
    if($a[$j] < $pivot) {
        $tem = $a[$i+1];
        $a[$i+1] = $a[$j];
        $a[$j] = $tem;
        $i++;
    }
    }
$temi  = $a[$i];
$a[$i] = $pivot;
$a[$p] = $temi;
print_r($a);
echo "<pre>";
return $i;

}

function QuickSort(&$a,$p,$q) {
    if($p<$q) {
        $r = partition($a,$p,$q);
        QuickSort($a,$p,$r);// recursive left
        QuickSort($a,$r+1,$q);// recursive right
    }
}


QuickSort($a,0,9);
/*
function QuickSort($a,$i,$r){
$pivot = $a[$i];
$pivot_postion = $i;
foreach( $a as $key=>$value) {
    if($key == 0) return;// ignore pivot
    if($value < $pivot) {
        return;
    }
    if($value < $pivot) {
        // shift location
        $tem = $a[$i+1];
        $a[$i+1] = $value;
        $a[$key] = $tem;
        $i++;
    }
}
$temi  = $a[$i];
$a[$i] = $pivot;
$a[$pivot_postion] = $temi;
print_r($a);
if($i == $r) return $a[$r];
if($i < $r) QuickSort(array_splice($a,$i),$i,$r);// recursive right
if($i > $r) QuickSort(array_splice($a,0,$i+1),$i,$r);// recursive right
}

*/
?>

