<?php
$title= 'Local News'; //page title
require 'head.php';//header file
require 'connect.php';

if (isset($_POST['submit'])) {
	

	$stmt = $pdo->prepare('INSERT INTO  postlocalnews (title, date, articletext) VALUES (:title, :date, :articletext)');
   $date = date('Y-m-d H:i:s');// date variable
   
	$values = [
      'title' => $_POST['title'],
      'date' => $date,
      'articletext' => $_POST['articletext']
      
	];

	$stmt->execute($values);
	echo 'Local news' ." ". $_POST['title'] . " " . $_POST['articletext'] . ' successfully added';
}
else {
?>
<form action="postlocalnews.php" method="POST">
   <label>title:</label>
   <input type="text"  name="title"/>
	<label>articletext:</label>
	<textarea name="articletext"></textarea>
	<input type="submit" name="submit" value="Add" />
</form>
<?php
}
?>