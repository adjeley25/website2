<?php
session_start(); // must always place on top to be effective
if (isset($_POST['submit'])) {
 //check whether correct login details is provided
 if ($_POST['username'] === 'dacosta26' && $_POST['password'] === 'oliver') {
 $_SESSION['loggedin'] = true;
 // directs you to the administration page when successfully logged in
 echo '<a href="admin.php">Hello welcome click to log into Administration</a>';
 }
 //it will display error when log in is unsuccessful and direct you back to login page
 else {
 echo '<p>You did not enter the correct username and password</p><a href="loginpage.php">Back to Login page<a/>';
 }
}

else { 
    $title= 'Login';
   // require 'head.php';
?>
<!--login forms-->
<center>
<form action="loginpage.php" method="POST">
 <label>Username: </label>
 <input type="text" name="username" />
 <br>
 <br>
 <label>Password: </label>
 <input type="password" name="password" />
 <br>
 <br>
 <input type="submit" name="submit" value="Log In" />
</form>
</center>
<?php
}
?>