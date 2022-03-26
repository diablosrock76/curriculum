<?php
for ($Numbers = 1; $Numbers <= 100; $Numbers++) {
    if ($Numbers % 3=== 0 && $Numbers % 5 ===0) {
        echo 'FizzBuzz!!';
    }elseif ($Numbers % 3 === 0) {
        echo 'Fizz!';
    }elseif ($Numbers % 5 === 0) {
        echo 'Buzz!';
    }else {
        echo $Numbers; 
    }
    echo '<br>';
}
?>