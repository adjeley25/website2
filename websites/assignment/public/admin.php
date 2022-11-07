<?php
session_start();
$title ='admin'; // for page title
require 'connect.php';
require 'head.php';// header file
//logout button
unset($_SESSION['loggedin']);
echo '<button><a href="loginpage.php">LogOut</a></button>';
?>

<article>
<h2>add new categories</h2>
<p>new article stories</p>

</article>
</main>

 <?php
 require 'footer.php';// footer file
 ?>
</body>
</html>


