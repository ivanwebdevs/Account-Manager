<?php 
header('Location:./index.php?pesan=4');
include 'path.php';
$today = date("F-j-Y-g-i");
$str = time();
$result = md5($str);
echo $result;

$pathsesudah = "backup/$today$result.enkripsi26190";
$pathconfigusersudah = "backup/$today$result.enksipsi.config";
$pathsebelum = $pathnya;
$pathconfigsebelum = $pathconfig;
$k = '$';
$searchnamess = "//pathconfigmantap26190//";
$total_epsedit = "<?php ".$k."pathnya = '$pathsesudah'; ".$k."pathconfig = '$pathconfigusersudah';  //pathconfigmantap26190//?>
";
$lineztotaltotal = file("path.php");
$linetotaltotal = preg_replace('/^[\r]*[\n\t]+/m', '', $lineztotaltotal);
$searchtotaltotal = $searchnamess;
$resulttotaltotal = $total_epsedit;
foreach($linetotaltotal as $uniqtotal) {
if(stripos($uniqtotal, $searchtotaltotal) === false) {
$resulttotaltotal .= $uniqtotal;
}
}
file_put_contents("path.php", $resulttotaltotal);



rename("./$pathsebelum", "./$pathsesudah");

rename("./$pathconfigsebelum", "./$pathconfigusersudah");




?>