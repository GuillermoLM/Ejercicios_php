<?php

$num = 15;
$mitad = round($num / 2);

while ($num > 0) {
    if ($num > $mitad) {
        echo("<br>" . '*');
    }
    if ($num == $mitad) {
        echo("<br>" . '******');
    }
    if ($num < $mitad) {
        echo("<br>" . '*' . "&nbsp" . "&nbsp" . "&nbsp" . "&nbsp" . "&nbsp" . "&nbsp" . "&nbsp" . "&nbsp" . "*");
    }
    $num--;
}
