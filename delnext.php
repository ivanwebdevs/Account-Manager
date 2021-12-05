<?php
include './path.php';
if (empty($_POST['path'])) {
$loca = "Location: ./index.php?pesan=1";
}
else{
$loca = "Location: ./index.php?pesan=3";
$code = $_POST['path'];
$searchnamess = "<encrypt>$code</encrypt>";
$total_epsedit = "";
$lineztotaltotal = file("$pathnya");
$linetotaltotal = preg_replace('/^[\r]*[\n\t]+/m', '', $lineztotaltotal);
$searchtotaltotal = $searchnamess;
$resulttotaltotal = $total_epsedit;
foreach($linetotaltotal as $uniqtotal) {
if(stripos($uniqtotal, $searchtotaltotal) === false) {
$resulttotaltotal .= $uniqtotal;
}
}
file_put_contents("$pathnya", $resulttotaltotal);
$total_epsedit1 = "";
$lineztotaltotal1 = file("$pathconfig");
$linetotaltotal1 = preg_replace('/^[\r]*[\n\t]+/m', '', $lineztotaltotal1);
$searchtotaltotal1 = $code;
$resulttotaltotal1 = $total_epsedit1;
foreach($linetotaltotal1 as $uniqtotal1) {
if(stripos($uniqtotal1, $searchtotaltotal1) === false) {
$resulttotaltotal1 .= $uniqtotal1;
}
}
file_put_contents("$pathconfig", $resulttotaltotal1);
}
header($loca);
?>