<?php

include("database.php");

	$email=$_POST['email'];
	$pswd=password_hash($_POST['pswd'],PASSWORD_DEFAULT);

	$sql_validation = "SELECT * FROM usuarios WHERE email = '$email' AND password = '$pswd'";
	$result=$conn->query($sql_validation);

	if($result->num_rows >0){
		header("Refresh:0;url=index.php");
	}else{
		echo "<script language='javascript'>alert('Usuario o contraseña inválidos intentelo de nuevo. Gracias')</script>";
		header("Refresh:0;url=login.php");
	}
?>
