<?php
if (isset($_COOKIE['fid'])){
  setcookie('fid','',time()-3600);
  setcookie('username','',time()-3600);
}
$home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/index.php';
header('Location: '. $home_url);

 ?>
