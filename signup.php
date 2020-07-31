<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/unsa.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>unsa.com/signup</title>
</head>
<body>
<form action="database-conn/signup-dbh.php" method="post">
<img src="img/logo/unsa.png" alt="logo">
<h1>UNSA</h1>
SIGNUP <br>
<input type="text" placeholder="Username" name="user-name">
<br><br>
<input type="text" placeholder="User Email" name="user-mail">
<br><br>
<input type="password" placeholder=" Password" name="user-pwd">
<br><br>
<input type="password" placeholder=" Re-Enter Password" name="confirm-pwd">
<br><br>
<input type="submit" name="signup-btn" value="SIGNUP" class="btn-lon">
<br><br>
<a href="index.php">
    <input type="button" name="signup-btn" value="CANCEL" class="cancel-btn">
</a>
<h6>Uganda National Student's Association</h6>
</form>
</body>
</html>



<?php
/* capturing user inputs and throwing error for wrong input and success for right entry 
this will get the entry from the URL 
*/

$UrlError = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

if (strpos($UrlError, "Empty=fields!") == true) {
	echo "<p class='era'>
 <b>Empty field..!</b>... Please fill up as required..! <a href='signup.php'><button>X</button></a></p>";
}
elseif (strpos($UrlError, "could't=connect") == true) {
	echo "<p class='era'>
 <b>Sorry..!</b>... Connection Aborted..! <a href='signup.php'><button>X</button></a></p>";
}
elseif (strpos($UrlError, "Miss-match=Character!") == true) {
	echo "<p class='era'>
 <b>Failled.!</b>... Please input in the right character for email.. <a href='signup.php'><button>X</button></a></p>";
}

elseif (strpos($UrlError, "Wrong=password") == true) {
	echo "<p class='era'><b>Signup Failed..!</b>... Wrong password, Try Again..<a href='signup.php'><button>X</button></a></p>";
}
elseif (strpos($UrlError, "Connects=failed!") == true) {
	echo "<p class='era'><b>Connection Failed..!</b>... Try Again Later..<a href='signup.php'><button>X</button></a></p>";
}
elseif (strpos($UrlError, "SameName=User-existed!") == true) {
	echo "<p class='era'><b>User error..!</b>... Username already exists..<a href='signup.php'><button>X</button></a></p>";
}
elseif (strpos($UrlError, "SameName=User-existed!") == true) {
	echo "<p class='era'><b>User error..!</b>... Username already exists..<a href='signup.php'><button>X</button></a></p>";
}
elseif (strpos($UrlError, "Error=can't-Connect!") == true) {
	echo "<p class='era'><b>Connection Failed..!</b>... Please try connecting to database...<a href='signup.php'><button>X</button></a></p>";
}

elseif (strpos($UrlError, "SignUp=Successful") == true) {
	echo "<p class='suc'> Signup Successful..
 <b>Thanks..!</b> <br>
 <a href='index.php'><button>LOGIN NOW</button></a>
<a href='login.php'><button>Login Later</button></a></p>
 ";
}

elseif (strpos($UrlError, "Error=can't-Connect!") == true) {
	echo "<p class='era'>
 <b>Access Failled!</b>... Failed to connect to Database!.  <a href='signup.php'><button>X</button></a></p>";
}