<?php
//ceil
$number = 1.2;
echo ceil($number);
?>
<br> 
<?php
//floor
$number = 3.5;
echo floor($number);
?>
<br>
<?php
//round
$number = 7.6;
echo round($number);
?>
<br>
<?php
//pi
function circleArea($i) {
    $circle_area = $i * $i * pi();
    echo $circle_area; 
    }
    circleArea(7);
?>
<br>
<?php
//mt_rand
$min = 1;
$max = 100;
 echo mt_rand($min, $max);
?>
