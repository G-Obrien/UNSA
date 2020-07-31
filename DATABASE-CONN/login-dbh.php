
<?php
if (isset($_POST['login-btn'])) {
require 'dbh-conn.php';

$UserEmail = $_POST['username-email'];
$userPasswd = $_POST['login-pwd'];
if (empty($UserEmail) || empty($userPasswd)) {

header("location: ../login.php? Empty=field!");
exit();

}
else{
$sql = "SELECT * FROM users WHERE user_email = ? OR usa_name = ?;";
$stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
  header("location: ../login.php? Connect=failed!");
 exit();
}
else {
  mysqli_stmt_bind_param($stmt, "ss", $UserEmail, $userPasswd);
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);
  if ($row = mysqli_fetch_assoc($result)) {

   $PwdCheck = password_verify($userPasswd, $row['u_password']);

if ($PwdCheck == false) {
 header("location: ../login.php? Wrong=password!");
exit();
}
else if ($PwdCheck == true) {
session_start(); 
$_SESSION['Uname'] = $row['usa_name'];
$_SESSION['Ename'] = $row['user_email'];

 header("location: ../login.php? Successfull=Login!");
exit();

}
else{
  header("location: ../login.php? Error=Wrong password!");
exit();

}
  }
 header("location: ../login.php? User=NoUser!");
exit();

   }
  }
  }
else{
  exit;
}
?>