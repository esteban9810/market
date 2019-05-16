<?php
	include("database.php");
	$email=$_POST['email'];
	$pswd=password_hash($_POST['pswd'],PASSWORD_DEFAULT);
	//$pswd=$_POST['pswd'];

  $sql_validation = "SELECT * FROM usuarios WHERE email = '$email' ";
    //2. Execute query
    $result=$conn->query($sql_validation);
    //3. Validation
    if($result->num_rows == 0){

      if ($conn->query($sql)==0) {
        echo "<script language='javascript'>alert('Usuario no encontrado')</script>";
        header("Refresh:0;url=login.php");
      }else{
        echo "Error:".$sql."<br>".$conn->error;
      }
    }

	$sql_validation = "SELECT * FROM usuarios WHERE email = '$email' AND password = '$pswd'";
	$result=$conn->query($sql_validation);

	if($result->num_rows >0){
		header("Refresh:0;url=index.php");
	}else{
		echo "<script language='javascript'>alert('Invalid user or password')</script>";
		header("Refresh:0;url=login.php");
	}
?>
