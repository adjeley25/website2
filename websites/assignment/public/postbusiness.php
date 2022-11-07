<?php
$title= 'Business News'; //page title
require 'head.php';//header file
require 'connect.php';

if (isset($_POST['submit'])) {
	//$pdo = new PDO('mysql:dbname=games;host:v.je', 'student', 'student', [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);


	$stmt = $pdo->prepare('INSERT INTO  postbusiness (title, date, articletext) VALUES (:title, :date, :articletext)');
   $date = date('Y-m-d H:i:s');// date variable
   
	$values = [
      'title' => $_POST['title'],
      'date' => $date,
      'articletext' => $_POST['articletext']
      
	];

	$stmt->execute($values);
	echo 'business news' ." ". $_POST['title'] . " " . $_POST['articletext'] . ' successfully  added';
}
else {
?>
<form action="postbusiness.php" method="POST">
   <label>title:</label>
   <input type="text"  name="title"/>
	<label>articletext:</label>
	<textarea name="articletext"></textarea>
	<input type="submit" name="submit" value="Add" />
</form>
<?php
}
?>