<?php

  $jsnsrc = "https://blockchain.info/ticker";
$json = file_get_contents($jsnsrc);
$json = json_decode($json);
$one_Btc_To_GBP = $json->GBP->last;


$arrayName = array('bitcoinprice' => $one_Btc_To_GBP);

$b = json_encode($arrayName);

echo $b;
?>