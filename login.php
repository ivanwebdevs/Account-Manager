<?php
$username = "admin";
$password = "123@admin";


$ip = $_SERVER['REMOTE_ADDR'];
$lines = file('./login.encrypt');
$before = $lines[0];
if ($ip == $before){
    $loc = "./index.php";
}
else{
    

if(!empty($_POST['username'])){
    
    if(!empty($_POST['password'])){
    
    
    
    $requsername = $_POST['username'];
$reqpassword = $_POST['password'];

if ($username == $requsername){
    if ($password == $reqpassword){
        $ip = $_SERVER['REMOTE_ADDR'];
        $handle = fopen('./login.encrypt','w');
        fwrite ($handle,"$ip");
        $loc = "./index.php";
    }
}
    
}

else{
    echo "Please Fill The Password";
}
    
}

else{
    echo "Please Fill The Username";
}
  

}


if (!empty($loc)){
    header("Location: $loc");
}

   
?>


    
    
    
    
    
    
    
</html>

<html lang="en-US" style="height: auto; min-height: 100%;"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta http-equiv="Cache-Control" content="no-store">
<meta http-equiv="refresh" content="">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />
<meta http-equiv="Cache-Control" content="no-store">
<meta http-equiv="refresh" content="">




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

</style>
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>Account Manager</title>
<link data-optimized="1" rel="stylesheet" id="bootstrap-css" href="./datahtml_files/d4a16.css" type="text/css" media="all">
<link data-optimized="1" rel="stylesheet" id="bootstrap-toggle-css" href="./datahtml_files/8fb55.css" type="text/css" media="all">
<link data-optimized="1" rel="stylesheet" id="font-awesome-css" href="./datahtml_files/3f8ff.css" type="text/css" media="all">
<link data-optimized="1" rel="stylesheet" id="admin-lte-css" href="./datahtml_files/99f4e.css" type="text/css" media="all">
<link data-optimized="1" rel="stylesheet" id="admin-midnight-skin-css" href="./datahtml_files/4954c.css" type="text/css" media="all">
<link data-optimized="1" rel="stylesheet" id="admin-blue-skin-css" href="./datahtml_files/d7091.css" type="text/css" media="all">
<link data-optimized="1" rel="stylesheet" id="style-css" href="./datahtml_files/d36e0.css" type="text/css" media="all"> 

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
input {
  color: blue;
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}

input::placeholder{
  color: #f00;
}


.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}

</style>
</head>
<body class="home blog layout-top-nav skin-midnight" style="height: auto; min-height: 100%;">
<div class="wrapper" style="height: auto; min-height: 100%;"><header class="main-header"><nav class="navbar navbar-static-top"><div class="container"><div class="navbar-header">
<h3>Account Manager</h3></div> <div id="navbar-collapse" class="navbar-collapse pull-left nanime-navbar collapse" aria-expanded="false" style="height: 1px;">

</div></div></nav></header><div class="content-wrapper" style="height: auto !important; min-height: 0px !important;"><div class="container" style="height: auto !important;"><section class="content" style="height: auto !important; min-height: 0px !important;"><div style="height: auto !important; min-height: 0px !important;" class=" box-content">
<div class="box box-default"><div align="" class="box-header with-border">
<h3 class="box-title">Report Box</h3>
<br>
</div><div class="box-body box-poster">





<div align="center">
</div></div>

</div>
<div class="box box-default"><div align="" class="box-header with-border">
<h3 class="box-title">Database User</h3>
<br>
</div><div class="box-body box-poster">
<script src="./datahtml_files/jquery-1.1.js.download"></script>


  <form action="" method="post">
            <h3 class="box-title">Username:</h3>
            <input type="username" name="username" placeholder="username....">
            <h3 class="box-title">Password:</h3>
            <input type="password" name="password" placeholder="**********">
            <button class="button" type="submit">Login</button>
        </form>


<div align="center">
</div></div>
</div>


</div>
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