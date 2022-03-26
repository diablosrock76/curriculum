<?php
function cuboid($vertical, $width, $Height) {
    $volume = $vertical * $width * $Height;
    echo "直方体の体積は、".$volume. "cm³です。";
}
cuboid(5,10,8);
?>