<?php
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/contac-mail.css">
    <title>contact page</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=RobotoCondensed:400,700">
</head>
<body>
    <main>
    <p>SEND US YOUR CONTACT MESSAGE</p>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="contact-form.php"><br>
    <input type="text" name="name" placeholder="Your full Name!" class="input1"><br><br>
     <input type="text" name="mail" placeholder="Your email!" class="input1"><br><br>
      <input type="text" name="school" placeholder="Your Campus / College / School!" class="input1"><br><br>
      <input type="text" name="subject" placeholder="Subject!" class="input1"><br><br>
<textarea name="message" id="txt-area" cols="40" rows="10" placeholder="Message:"></textarea><br><br>
<button type="submit" name="sub-msge" class="sen">SEND MAIL</button>
 </form>

<?php


if (isset($_POST['sub-msge'])) {

    $name =$_POST['name'];
    $mailFrom =$_POST['mail'];
    $school =$_POST['school'];
    $subject =$_POST['subject'];
    $message =$_POST['message'];

    $mailTo = "godfreyobita029@gmail.com";
    $headers = "From: ".$mailFrom;
    $text ="You have received an email from: ". $name." of" .$school ."\n\n". $message;
    mail( $mailTo, $subject, $text,$headers );
   
    header("Location: contac-us.php? mail=sent");
} 

?>

</main>

    <?php
include 'footer.php';
?>
</body>
</html>