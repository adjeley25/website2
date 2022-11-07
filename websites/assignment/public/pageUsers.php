<?php
$title= 'Register'; //page title
require 'connect.php';
require 'head.php';//header file

  //command to insert data 
  if (isset($_POST['submit'])) {
   $stmt = $pdo->prepare('INSERT INTO pageUsers(firstname, surname, email)
                          VALUES ( :firstname, :surname, :email)');
//$date = date('Y-m-d H:i:s');// date variable
$values = [
          'firstname' => $_POST['firstname'], // user input firstname
          'surname' => $_POST['surname'], // user surname input
          'email' => $_POST['email'] // user email input
];    
      //execute button
   unset($_POST['submit']);
   $stmt->execute($values);

   echo 'New record added successfully';

   echo '<p><a href="searchusers.php">return home </a>'; //redirects you back to the homepage
}

else {
?>
<h2>User Information</h2>
<!-- data input forms-->
<article>
<form action="pageUsers.php"   method="post">
<label>Author firstname</label>
<input type="text"  name="firstname" />
<label>Author surname</label>
<input type="text"  name="surname" />
<label>email</label>
<input type="text"  name="email" />
<input type="submit" value="submit" name="submit" />
</form>
</article>
</main>
<?php
}
require 'footer.php';
?>
</body>
</html>
