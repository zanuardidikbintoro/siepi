<?php
	ob_start();
	session_start();
	//$db_user = 'root';
	//$db_pass = '';
	$user_name = $_POST['user_name'];
	$password = $_POST['password'];
include "common.php";
if($user_name=="" and $password=="")
error("Username dan password belum diisi");
if($user_name=="" )
error("Username belum diisi");
if( $password=="")
error("password belum diisi");

	if($user_name=="admin" and $password=="purworejo") {

		$_SESSION['user_name'] = $user_name;
		$_SESSION['password'] = $password;
		$_SESSION['favcolor'] = 'green';
//$_SESSION['animal']   = 'cat';
echo "Login berhasil, please wait....";
		echo("<meta http-equiv=\"refresh\" content=\"1;url=index.php\">");
		//echo "Login berhasil";

	}
	else {
		error( 'Username atau Password tidak cocok!');
	}
?>
