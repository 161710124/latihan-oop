<?php

require_once 'cobian.php';

$penjumlahan = new penjumlahan;
$penjumlahan->set_penjumlahan(21,3);
echo "penjumlahan dari bilangan 21 dan 3 adalah ".$penjumlahan->get_penjumlahan();
echo "<br>";
echo "pengurangan dari bilangan 21 dan 3 adalah ".$penjumlahan->get_pengurangan();
echo "<br>";
echo "perkalian dari bilangan 21 dan 3 adalah ".$penjumlahan->get_perkalian();
echo "<br>";
echo "pembagian dari bilangan 21 dan 3 adalah ".$penjumlahan->get_pembagian();

?>

