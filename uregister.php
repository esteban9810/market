<?php

    include("database.php");

    $firstname=$_POST['uname'];
    $lastname=$_POST['ulastname'];
	  $gender = $_POST['gender'];

    $email=$_POST['uemail'];
    $nit=$_POST['nit'];

    $file_name = $_FILES['photo']['name'];
    //tipo de archivo
    $file_type = $_FILES['photo']['type'];
    //tamaño del archivo default (kb)
    $file_size = $_FILES['photo']['size'];
    //donde guarda la carpeta
    $file_tmp = $_FILES['photo']['tmp_name'];
  //  echo $idNumber."<br>".$file_name."<br>".$file_type."<br>".$file_size."<br>".$file_tmp;
    move_uploaded_file($_FILES['photo']['tmp_name'],"photos/".$_FILES['photo']['name']);
    $photo_url_db= "photos/".$_FILES['photo']['name'];

    if (($photo == "" && $gender == "M"))
        $photo = "images/boy.png";
    if    ( ($photo == "") && ($gender == "F"))
        $photo = "images/girl.png";
    else if    ( ($photo == "") && ($gender == ""))
        $photo = "images/img_default.png";

  $pswd=password_hash($_POST['pswd'],PASSWORD_DEFAULT);
	//1. Create query
	$sql_validation = "SELECT * FROM usuarios WHERE (email = '$email')OR(ident = '$nit')";
	//2. Execute query
	$result=$conn->query($sql_validation);
	//3. Validation
	if($result->num_rows == 0){
		$sql="INSERT INTO usuarios (firstname, lastname,email, password,nit,photo) VALUES('$firstname','$lastname','$email','$pswd','$nit','$photo_url_db')";
		if ($conn->query($sql)===true) {
			echo "<script language='javascript'>alert('Usuario registrado con exito')</script>";
			header("Refresh:0;url=login.php");
		}else{
			echo "Error:".$sql."<br>".$conn->error;
		}
	}else{
		echo "<script language='javascript'>alert('La identificacion o email ya existe por favor verifique nuevamente')</script>";
    header("Refresh:0;url=login.php");
	}


?>
