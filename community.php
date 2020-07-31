<?php
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/comm.css">
    <link rel="stylesheet" href="CSS/contac-mail.css">
    <title>contact page</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=RobotoCondensed:400,700">
</head>
<body>

<?php

/* capturing user inputs and throwing error for wrong input and success for right entry 
this will get the entry from the URL 
*/

$UrlError = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

if (strpos($UrlError, "Empty=Space") == true) {
	echo "<p class='era'>
 <b>Empty field..!</b>... Could not Send Message...!..  <a href='community.php'><button>X</button></a></p>";
}

elseif (strpos($UrlError, "Attatchment=Too-Big") == true) {
	echo "<p class='era'>
 <b>Posting Failled.!</b>... The file you uploaded is too Large..  .. <a href='community.php'><button>X</button></a></p>";
}

elseif (strpos($UrlError, "Error=Connection") == true) {
	echo "<p class='era'><b>Connection Failed..!</b>... Try Again Later..  .. <a href='community.php'><button>X</button></a></p>";
}

elseif (strpos($UrlError, "Post=Success") == true) {
	echo "<p class='suc'>
 <b>Message Sent..!  <a href='community.php'><button>OK</button></a></b>";
}

elseif (strpos($UrlError, "Error=can't-Connect!") == true) {
	echo "<p class='era'>
 <b>Access Failled!</b>... Failed to connect to Database!.  .. <a href='community.php'><button>X</button></a></p>";
}

?> 

    <main>
    <p>SEND & RECIEVE OR SHARE COMMENTS WITH COMMUNITY</p>
    <form action="DATABASE-CONN/sharing-dbh.php" method="post" class="form"><br>
    <h2>Compose Your Messages</h2><br>
    Usermail:
     <input type="text" name="mail" placeholder="Your email...!" class="input1"><br><br>
      Campuss:<input type="text" name="school" placeholder="Your Campus / College / School.." class="input1"><br><br>
      Top Story:<input type="text" name="subject" placeholder="Enter title to your Post..!" class="input1"><br><br>Message:
<textarea name="message" id="txt-area" cols="20" rows="3" placeholder="Message:"></textarea><br><br>
Attatch File:
<input type="file" name="upload" id="up-file" class="input-file"><input type="reset" value="Refresh" class="input-file"><br><br>
<button type="submit" name="submit-post" class="sen">POST</button>
<a href="comm-post.php"><button type="button" name="show-post" class="sen">VIEW ALL POSTS</button></a>
 
    </form>
    </main>

<?php
include 'footer.php';
?>
</body>
</html>