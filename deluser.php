<?php
$ip = $_SERVER['REMOTE_ADDR'];
$lines = file('./login.encrypt');
$before = $lines[0];
if ($ip == $before){
    echo "Berhasil login";
}
else {
   header("location: ./login.php");
}?><html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />
</head>
<body>
<script>  $(document).ready(function () {
      $('select').selectize({
          sortField: 'text'
      });
  });</script>
  <form method="post" action="delnext.php">
  <select id="select-state" name="path" placeholder="Pick a state...">
<?php 
include './path.php';
$lines = file("$pathconfig"); 
foreach ($lines as $line_num => $line){
 print " 
" . $line . "
  
 "; 
}
?>
  </select><button type="submit">Hapus Data</button><form>
</body>
</html>
