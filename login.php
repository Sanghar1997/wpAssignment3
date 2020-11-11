<?php 

	if (isset($_POST['submit'])){
		 include_once 'dbh.php';
		 $title = mysqli_real_escape_string($conn,$_POST['title']);
		 $name = mysqli_real_escape_string($conn,$_POST['name']);
		 $pwd = mysqli_real_escape_string($conn,$_POST['pwd']);
		 $Rpwd = mysqli_real_escape_string($conn,$_POST['Rpwd']);
		 $Wurl = mysqli_real_escape_string($conn,$_POST['Wurl']);

		 if(empty($title) || empty($name) || empty($pwd) || empty($Rpwd) || empty($Wurl)){
		 	
		 	header("Location: header.php?signup=empty");
   			exit();
		 }else{
		 	if( $pwd != $Rpwd){
		 		header("Location: header.php?password=incorrect");
   				exit();
		 	}else{
		 		$sql = "SELECT * FROM store WHERE title = '$title'";
		 		$result = mysqli_query($conn, $sql);
    			$resultCheck = mysqli_num_rows($result);
    			if($resultCheck >= 1){
    				header("Location: header.php?entry=exists");
    				exit();
    			}else {
		 		 $hashpwd = password_hash($pwd, PASSWORD_DEFAULT);
		 		$sql = "INSERT INTO store (title, user_name, password, url) VALUES ('$title','$name','$hashpwd','$Wurl');";
		 		mysqli_query($conn, $sql);
		 		session_unset();
  				session_destroy();
		 		header("Location: front.php?entry=success");
		 		exit();
		 	}
		 	}
		 }
	}else{
		 		header("Location: header.php?Error=Pass_value_error");
		 		exit();
	}


?>