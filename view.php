<?php
if (empty($_POST['pathuser'])) {
header("Location: ./index.php?pesan=1");
}
else{
}?><!-- saved from url=(0050)https://vanimes1.000webhostapp.com/admin/descedit/ -->
<html lang="en-US" style="height: auto; min-height: 100%;"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta http-equiv="Cache-Control" content="no-store">
<meta http-equiv="refresh" content="">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />
<meta http-equiv="Cache-Control" content="no-store">
<meta http-equiv="refresh" content="">

<style>
@page { size: auto; margin: 0mm; }
.registerbtn {
background-color: #8e4049;
color: white;
padding: 16px 20px;
margin: 8px 0;
border: none;
cursor: pointer;
width: 100%;
opacity: 0.9;
}
.registerbtn:hover {
opacity:1;
}
/* Add a blue text color to links */
a {
color: dodgerblue;
}
select {
width: 100%;
flex-shrink: 1
}
.other {
background-color:#000000;
border-radius:28px;
border:1px solid #728f75;
display:inline-block;
cursor:pointer;
color:#ffffff;
font-family:Arial;
font-size:17px;
padding:3px 73px;
text-decoration:none;
text-shadow:0px 1px 0px #727d70;
}
.other:hover {
background-color:#111f09;
}
.other:active {
position:relative;
top:1px;
}
input[type=text] {
width: 90%;
box-sizing: border-box;
border: 2px solid #ccc;
border-radius: 4px;
font-size: 16px;
background-color: #652c2c;
background-image: url('../img/searchiconfix.jpg');
background-size:25px 25px;
background-position: 10px 10px;
background-repeat: no-repeat;
padding: 12px 20px 12px 40px;
transition: width 0.4s ease-in-out;
}
input[type=text]:focus {
width: 100%;
}
</style>


<style>
	
tomboltools:hover {
    opacity: 1;
}
.tomboltools {
    
    color: white;
    padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;

}

input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
</style>
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>Vanime - Streaming &amp; Download Anime Free!</title>
<link data-optimized="1" rel="stylesheet" id="bootstrap-css" href="./datahtml_files/d4a16.css" type="text/css" media="all">
<link data-optimized="1" rel="stylesheet" id="bootstrap-toggle-css" href="./datahtml_files/8fb55.css" type="text/css" media="all">
<link data-optimized="1" rel="stylesheet" id="font-awesome-css" href="./datahtml_files/3f8ff.css" type="text/css" media="all">
<link data-optimized="1" rel="stylesheet" id="admin-lte-css" href="./datahtml_files/99f4e.css" type="text/css" media="all">
<link data-optimized="1" rel="stylesheet" id="admin-midnight-skin-css" href="./datahtml_files/4954c.css" type="text/css" media="all">
<link data-optimized="1" rel="stylesheet" id="admin-blue-skin-css" href="./datahtml_files/d7091.css" type="text/css" media="all">
<link data-optimized="1" rel="stylesheet" id="style-css" href="./datahtml_files/d36e0.css" type="text/css" media="all"> </head>
<body class="home blog layout-top-nav skin-midnight" style="height: auto; min-height: 100%;">
<div class="wrapper" style="height: auto; min-height: 100%;"><header class="main-header"><nav class="navbar navbar-static-top"><div class="container"><div class="navbar-header">
<a href="./index.php" class="navbar-brand"><img width="10%" src="./datahtml_files/backbutton.png"></a>
</div> <div id="navbar-collapse" class="navbar-collapse pull-left nanime-navbar collapse" aria-expanded="false" style="height: 1px;">

</div></div></nav></header><div class="content-wrapper" style="height: auto !important; min-height: 0px !important;"><div class="container" style="height: auto !important;"><section class="content" style="height: auto !important; min-height: 0px !important;"><div style="height: auto !important; min-height: 0px !important;" class=" box-content">
<div class="box box-default"><div align="" class="box-header with-border">
<h3 class="box-title">kenapa data saya tidak muncul?</h3>
<br>
</div><div class="box-body box-poster">
<h4 style="padding: 8px"><font color="#cccaca">1. kamu harus menambah akun terlebih dahulu</font></h4>
<div align="center">
</div></div>
</div>
<div class="box box-default"><div align="" class="box-header with-border">
<h3 class="box-title">Database User</h3>
<br>
</div><div class="box-body box-poster">
<script src="./datahtml_files/jquery-1.1.js.download"></script>




<div style="padding :20px;">
<?php
include 'path.php';
if (empty($_POST['pathuser'])) {
header("Location: ./index.php");
}
else{
}
/// line 0 = email
/// line 1 = username
/// line 2 = password
/// line 3 = platfrom

$pathuser = $_POST['pathuser'];


$uniqanime = "<encrypt>$pathuser</encrypt>";
$matchesimgurl = array();
$handleimgurl = @fopen($pathnya, 'r');
if ($handleimgurl)
{
while (!feof($handleimgurl))
{
$bufferimgurl = fgets($handleimgurl);
if(strpos($bufferimgurl, $uniqanime) !== FALSE)
$matchesimgurl[] = $bufferimgurl;
}
fclose($handleimgurl);
}
$hasilkuimgurl = ($matchesimgurl[0]);
$result_explodeimgurl = explode('|', $hasilkuimgurl);
$email = $result_explodeimgurl[0];
$username = $result_explodeimgurl[1];
$password = $result_explodeimgurl[2];
$platfrom = $result_explodeimgurl[3];





?>

<h4 style="padding: 8px"><font color="#cccaca">Email: </font></h4>
<input type="text" value="<?php echo $email;?>" disabled>


<h4 style="padding: 8px"><font color="#cccaca">Username: </font></h4>
<input type="text" value="<?php echo $username;?>" disabled>

<h4  style="padding: 8px"><font color="#cccaca">Password: </font></h4>
<input id="pasnya" type="password" value="<?php echo $password;?>" disabled>

<!-- TAMBAHKAN SCRIPT FUNGSI PHP-->


<input type="checkbox" onclick="myFunction()">Show Password

<script>
function myFunction() {
  var x = document.getElementById("pasnya");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

<h4  style="padding: 8px"><font color="#cccaca">Platfrom: </font></h4>
<input id="pasnya" type="text" value="<?php echo $platfrom;?>" disabled>

 
</div>



<div align="center">
</div></div>
</div>
<div class="box box-default"><div align="" class="box-header with-border">
<h3 class="box-title">Tools</h3>
<br>
</div><div class="box-body box-poster">
<div style="display: flex;
align-items: center; "> 
<form style="padding-left: 10px;" action="tambah.html"><button style="background-color: #0d800d;"  class="tomboltools"><img width="20px" src="./img/adduser.png"> Tambahkan Akun</button></form>
<br>
<form style="padding-left: 10px;" action="deluser.php"><button style="background-color: #b31d1d;" class="tomboltools"><img width="20px" src="./img/hapus.png"> Hapus Akun</button></form>

<form style="padding-left: 10px;" action="#"><button style="background-color: #96830d;" class="tomboltools"><img width="20px" src="./img/edit.png"> Edit Akun</button></form>
 </div>
<!--<h4 style="padding: 8px"><font color="#cccaca">1.
Kosong</font></h4>
<hr>
<h4 style="padding: 8px"><font color="#cccaca">2.
Kosong</font></h4>
<div align="center"> -->
</div></div>
</div>
<div>
</div>
<div>
</div>
</div>
</section></div>

</div></div>
<footer class="main-footer"><div class="container">
<strong>Account Management © Copyright 2021<a href="#"> Ivan Dwi Yanto</a></strong></div></footer><div style="text-align: right;position: fixed;z-index:9999999;bottom: 0;width: auto;right: 1%;cursor: pointer;line-height: 0;display:block !important;">x
</body></html>
