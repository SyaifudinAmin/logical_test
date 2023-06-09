<?php
$i = 1;
$text1 = 'Foo';
$text2 = 'Bar';
while ($i <= 50) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo $text1 . $text2 . "<br />";
    } else if ($i % 3 == 0) {
        echo $text1 . "<br />";
    } else if ($i % 5 == 0) {
        echo $text2 . "<br />";
    } else {
        echo $i . "<br />";
    }
    $i++;
}
