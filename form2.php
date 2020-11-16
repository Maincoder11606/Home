<?php 
if($_POST["submit"]){
    $recipient="Haliruyahaya11606@gmail.com ";
    $subject="regarding user login";
    $sender=$_POST["name"];
    $senderEmail=$_POST["Email"];
    $message=$_POST["message"];
    $body="name:$sender\nEmail:$senderEmail\n\n$message";
    mail($recipient,$subject,$body,"from:$sender <$senderEmail>");

}
?>
<!Doctype html>
<html>
<meta name="viewport" content="width=device-width , intial-scale=1" />
    <head><meta charset="utf-8"><title pagetitle="helo">Maincoder</title></head> <link rel="stylesheet" href="design.css">
    <body> 
    
        <h3>Userlogin</h3> 
    <header class="header">
    <ul>
        <li><a href="form2.php" >Home</a></li>
        <li><a href="aboutme.php">About Us</a></li>
        <li><a href="header.php">Contact Us</a></li>
        </ul></header>
<footer class="footer">
             <ul>
             <b>Follows us on Social Media! ❤:</b>
            <li> <a href="https://m.facebook.com/haliru.yahaya.311"><img src="Facebook.png" style="height:50px;"></a></li>
           <li> <a href="https://instagram.com/maincoder"> <img src="ig.png" style="height:50px;"></a></li>
           <li><a href="https://twitter.com/yahayahaliru_"> <img src="tw.png" style="height:50px;"> </a> </div></li></ul>
        </footer>    
        <p id="copy"><b>&copy2020 maincoder All right reserve.</b></P>
<form action="form2.php">
  
<p class="border"></p>
<div class="form">
    
Username:
<br /><input type="text" name="name"required><br><br>
Password:
 <br /><input type="password" name="password" class="password"required><br><br>
 Email:
 <br /><input type="Email" name="Email" class="email"required><br><br>
 message:
 <br /><textarea  name="message" required></textarea><br><br>
male<input  type="radio" name="gender" value="Male"required>
female<input type="radio" name="gender" value="Female"required>
 <br /><input type="submit" name="submit"> <a href="form.php"> <input type="button" value="Next"   onclick="alert('hello' + ' ' + Your_name.value + ' ' + 'we have receive your information via email i will respond to you shortly')"></a><input type="reset"value="Delete"><div>
</form>

    </body>
    </html>
 