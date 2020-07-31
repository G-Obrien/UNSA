<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="CSS/unsa.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>unsa.com/login</title>
</head>
<body>
<form action="DATABASE-CONN/login-dbh.php" method="post">
<img src="img/logo/unsa.png" alt="logo">
<h1>UNSA</h1>
<h2>Login</h2><br>
<input type="text" placeholder="Username or Email" name="username-email">
<br><br>
<input type="password" placeholder="Enter your Password" name="login-pwd">
<br><br>
<input type="submit" name="login-btn" value="LOGIN" class="btn-lon">

<h3>OR</h3>
<a href="signup.php">Sign Up</a>
<br>
<h3>Uganda National Student's Association</h3>
<br>
</form>


<?php

$UrlError = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

if (strpos($UrlError, "Empty=field!") == true) {
	echo "<p class='era'>
 <b>Login Failled!</b>... You did not fill all the field.</p>";
}
if (strpos($UrlError, "Connect=failed!") == true) {
	echo "<p class='era'>
 <b>Connection Failled!</b>... Please try again.</p>";
}
elseif (strpos($UrlError, "Wrong=password!") == true) {
	echo "<p class='era'>
 <b>Login Failled!</b>... Wrong Password.</p>";
}
elseif (strpos($UrlError, "Successfull=Login!") == true) {
	echo "<p class='suc'>
 <b>Login is Successful! <br> <a href='MAIN-PAGES/home.php'><button>OK</button></p>";
}

elseif (strpos($UrlError, "User=NoUser!") == true) {
	echo "<p class='era'>
 <b>No User!</b>... Create new User or Signup! <br><a href='signup.php'><button>SignUp</button></p>";

}

?>
</body>
</html>