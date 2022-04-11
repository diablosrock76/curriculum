<?php
define("GOAL", 39);
$total = 0;
while($total < 39) {
    $n = rand(1, 6);
    $total += $n;
    echo "{$total}回目={$n}<br />";
    if ($total >= GOAL) {
        echo "合計{$total}回でゴールしました。<br />";
        break;
    }
}
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