<?php
define("GOAL", 40);
$total = 0;
for ($i = 1; $i <= GOAL; $i++) {
    $n = rand(1, 6);
    $total += $n;
    echo "{$i}回目={$n}<br />";
    if ($total >= GOAL) {
        echo "合計{$i}回でゴールしました。<br />";
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
} elseif (10 <= $time && $time <= 18){
    echo "今{$time}時台です。こんにちは。";
} elseif (18 <= $time && $time <= 24){
    echo "今{$time}時台です。こんばんは。";
}
?>