<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])
    && isset($_POST['name']) && isset($_POST['re_password']) && isset($_POST['email']) 
	&& isset($_POST['phone_number'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);
	$re_pass = validate($_POST['re_password']);
	$name = validate($_POST['name']);
	$email = validate($_POST['email']);
	$Phone_number = validate($_POST['phone_number']);

	// Validate password strength Validation

	function password12($pass){
	if (preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#", $pass)) {
		header ("Location: signup.php");
	   } else {
		header ("Location: signup.php?error=strong password is required &$user_data");
		exit();
	   }
	}
	password12($pass);

	// phone number validation 

	function validating($Phone_number){
		if(preg_match('/^[0-9]{10}+$/', $Phone_number)) {
			header ("Location: signup.php");
				} else {
					header ("Location: signup.php?error=Valid phone number is required &$user_data");
					exit();
				}
			}
	validating($Phone_number);


	$user_data = 'uname='. $uname. '&name='. $name;

	
	if(empty($name)){
        header("Location: signup.php?error=Name is required&$user_data");
	    exit();
	}
	else if (empty($uname)){
		header("Location: signup.php?error=User Name is required&$user_data");
	    exit();
	}
	else if(empty($pass)){
        header("Location: signup.php?error=Password is required&$user_data");
	    exit();
	}
	else if(empty($re_pass)){
        header("Location: signup.php?error=Re Password is required&$user_data");
	    exit();
	}
	
	else if(empty($email)){
        header("Location: signup.php?error=Email is required&$user_data");
	    exit();
	}
	else if(empty($Phone_number)){
        header("Location: signup.php?error=phone number is required&$user_data");
	    exit();
	}
	else if($pass !== $re_pass){
        header("Location: signup.php?error=The confirmation password  does not match &$user_data");
	    exit();
	}

	else{

		// hashing the password
        //$pass = md5($pass);

		$pass = password_hash($pass, PASSWORD_DEFAULT);

	    $sql = "SELECT * FROM users WHERE user_name='$uname'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) { 
			header("Location: signup.php?error=The username is taken try another&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO users(user_name, password, name, email, phone_number) VALUES('$uname', '$pass', '$name', '$email', '$Phone_number')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: signup.php?success=Your account has been created successfully");
	         exit();
           }else {
	           	header("Location: signup.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}

}else{
	header("Location: signup.php");
	exit();
}