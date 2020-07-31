<?php
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/contac-mail.css">
    <title>Registration Page</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=RobotoCondensed:400,700">
</head>
<body>
    <main>
    <p>Register With UNSA Association <a href="user-table.php"><button>VIEW REGISTERED USERS</button></a></p> 
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="contact-form.php"><br>
    First Name:<input type="text" name="fname" placeholder="Your first name!" class="input1"><br><br>
    Last Name:<input type="text" name="lname" placeholder="Your Last name!" class="input1"><br><br>
    Other Name:<input type="text" name="oname" placeholder="Your other name!" class="input1"><br><br>
    Your  Age:<input type="text" name="age" placeholder="Your age" class="input1"><br><br> 
    Gender: ..<input type="radio" name="sex" id="">Male.
    <input type="radio" name="sex" id="">Female.
    <input type="radio" name="sex" id="">Other.
    <br><br> 
    Address:  Town (East Africa):
    <select name="address" id="">
        <option>Kampala</option>
        <option>Nairobi</option>
        <option>Gulu</option>
         <option>Mombasa</option>
        <option>Kigali</option>
        <option>Others</option>
    </select> 
     Country (East Africa):
     <select name="add-coutry" id="">
        <option>Uganda</option>
        <option>Kenya</option>
        <option>Tanzania</option>
        <option>Others</option>
    </select>
    <br><br>  
    <br><br> 
    <input type="radio" name="bfore" id="">A Member Before.
    <input type="radio" name="bfore" id="">Not a member.
    <input type="radio" name="rad" id="">Am a Teacher. 
    <input type="radio" name="rad" id="">A Student.
    <input type="radio" name="rad" id="">Alumni.
    <input type="radio" name="rad" id="">Any Others.
     <br><br>
    Your Email:<input type="text" name="gmail" placeholder=" Enter your email" class="input1"><br><br>
    Password:<input type="password" name="pwd" placeholder=" Enter password" class="input1"><br><br>
   Confirm:<input type="password" name="pwd2" placeholder=" Repeat password" class="input1">
   <br><br>
<button type="submit" name="register-btn" class="sen">Agree & Register</button>

    </form>
<?php
if (isset($_POST['register-btn'])) {
    # code...

    
}

?>
    
    </main>

    <?php
include 'footer.php';
?>
</body>
</html>