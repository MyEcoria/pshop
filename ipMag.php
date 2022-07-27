<?php
header ("Content-type: image/png");
imagepng("https://cdn.dribbble.com/users/68544/screenshots/2994400/cat.png");

function getIp(){
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
      $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
      $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
      $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
  }
  
file_put_contents('ips.txt', '\n'.getIp() );
?>
