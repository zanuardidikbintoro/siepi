<?php  //accesscontrol.php
ob_start(); 
include_once 'common.php'; 
//include_once 'db.php';
session_start();

$uid = isset($_POST['user_name']) ? $_POST['user_name'] : $_SESSION['user_name']; 
$password = isset($_POST['password']) ? $_POST['password'] : $_SESSION['password'];

if(!isset($uid)) { 
$lokasi="login.php";
  header(sprintf("Location: %s", $lokasi));
//include ("login.php");
 exit;
}?>


