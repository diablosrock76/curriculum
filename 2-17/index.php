<?php
$total = 0;
$i = 0;
while($total < 40) {
    $n = rand(1, 6);
    $total += $n;
    $i ++ ;
    echo "{$i}回目={$n}<br />";  
}echo "合計{$total}回でゴールしました。<br />";
?>
<br>
<?php

date_default_timezone_set('Asia/Tokyo');
$time = date('G');

if (6 <= $time && $time <= 10 ){
    echo "今{$time}時台です。おはようございます。";
} elseif (11 <= $time && $time <= 18){
    echo "今{$time}時台です。こんにちは。";
} elseif (19 <= $time && $time <= 24){
    echo "今{$time}時台です。こんばんは。";
}
?>

