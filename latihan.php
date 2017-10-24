<?php

require_once 'penjumlahan.php';

$penjumlahan = new penjumlahan;
$penjumlahan->set_penjumlahan(3,10);
echo "penjumlahan dari bilangan 3 dan 10 adalah ".$penjumlahan->get_penjumlahan();
?>