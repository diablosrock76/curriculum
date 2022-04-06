<?php
//count
$name = ["dog", "cat", "killifish", "bird", "horse", "frog"];
echo count($name);
?>
<br>
<?php
//sort
$name = ["dog", "cat", "killifish", "bird", "horse", "frog"];
sort($name);
var_dump($name);
?>
<br>
<?php
//in_array
$name = ["dog", "cat", "killifish", "bird", "horse", "frog"];
if (in_array("cat", $name)) {
    echo "ネコいるよ！";
} else {
    echo "ネコはいないよ！";
}
?>
<br>
<?php
//implode
$name = ["dog", "cat", "killifish", "bird", "horse", "frog"];
$atstr = implode("!", $name);
var_dump($atstr);
?>
<br>
<?php
//explode
$name = ["dog", "cat", "killifish", "bird", "horse", "frog"];
$atstr = implode("!", $name);
var_dump($atstr);
$line_name = explode("!", $atstr);
var_dump($line_name);
?>
