<?php

$uangSaya = 20;
$dibeli = '';

if ($uangSaya >= 24) {
    $dibeli = "Creamy Mango Boba";
} elseif ($uangSaya >= 18) {
    $dibeli = "Lucky Sundae Chocolate Ice Cream";
} elseif ($uangSaya >= 15) {
    $dibeli = "Mixue Ice Cream Earl Grey Tea";
} else {
    $dibeli = "uang saya kurang";
}
    echo "JIka saya mempunyai uang <b>$uangSaya</b>K, saya bisa membeli <b>$dibeli</b>";

?>