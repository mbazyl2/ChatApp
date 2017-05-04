<?php


$host = '';
$user = '';
$pass = '';
$db_name = '';


  $con = new mysqli($host,$user, $pass, $db_name);


function formatDate($date){
  return date('G:i', strtotime($date));
}
 ?>
