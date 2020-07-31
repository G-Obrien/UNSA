<?php

if (isset($_POST['signup-btn'])) {
require 'dbh-conn.php';

$UserName = $_POST['user-name'];
$Email = $_POST['user-mail'];
$UserPwd = $_POST['user-pwd'];
$Confpwd = $_POST['confirm-pwd'];

if ( empty($UserName) || empty($Email) || empty($UserPwd) || empty($Confpwd)) {
	header("location: ../signup.php? Empty=fields!");
	exit();
}
elseif (!filter_var($Email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/" ,$UserName)) {

	header("location: ../signup.php? Miss-match=Character!");
	exit();
}

elseif ($UserPwd !== $Confpwd) {
		header("location: ../signup.php? Wrong=password");
	exit();
}
else{
	//checking if a user exists in the database.(by running a prepared statement).
	$sql = "SELECT usa_name FROM users WHERE usa_name = ?;";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
	header("location: ../inex.php? Connects=failed!");
	exit();
}
else{
	mysqli_stmt_bind_param($stmt, "s",$UserName);
    mysqli_stmt_execute($stmt);
     mysqli_stmt_store_result($stmt);
     $resultCheck = mysqli_stmt_num_rows($stmt);
     if ($resultCheck > 0) {
 	header("location: ../signup.php? SameName=User-existed!");
	exit();
}
	else{
		//We then insert values into the database.
	$sql = "INSERT INTO users (usa_name, user_email, u_password
) VALUES (?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
 	header("location: ../signup.php? Error=can't-Connect!");
	exit();
}
else{
	//hide password from view in the database.---Using P-Cript hash method.
	$pwdHashed = password_hash($UserPwd, PASSWORD_DEFAULT);
	mysqli_stmt_bind_param($stmt, "sss", $UserName, $Email, $pwdHashed);
	mysqli_stmt_execute($stmt);
   header("location: ../signup.php? SignUp=Successful");
	exit();
}
	}
  } 
}
   mysqli_stmt_close($stmt);
 mysqli_close($conn);

  }
  else{
      
       header("location: ../index.php? could't=connect");
       exit();
  }
  

?>