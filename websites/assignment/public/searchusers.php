<a href="pageUsers.php">Add new user</a>
<?php
require 'connect.php';
if (isset($_POST['submit'])) {

    if ($_POST['field'] == 'firstname' || $_POST['field'] == 'surname' || $_POST['field'] == 'email') {
        $stmt = $pdo->prepare('SELECT * FROM pageUsers WHERE ' . $_POST['field'] . ' = :search');
        $values = [
            'search' => $_POST['search']
        ];

        $stmt->execute($values);

    }
}
//Otherwise, list all the records
else {
    $stmt = $pdo->prepare('SELECT * FROM pageUsers');
    $stmt->execute();
}
?>
    <form action="searchusers.php" method="POST">

        <label>Search</label>
        <input type="text" name="search" />

        <label>Field</label>
        <select name="field">
            <option value="firstname">First name</option>
            <option value="surname">Surname</option>
            <option value="email">Email Address</option>
        </select>

        <input type="submit" name="submit" value="Search" />

    </form>
    <?php

echo '<ul>';
foreach ($stmt as $row) {
    echo '<li>';
    echo $row['firstname'] . ' ' . $row['surname'] . ' has the email address ' . $row['email'];
    echo ' <a href="edit.php?email=' . $row['email'] . '">Edit</a> '; //able to edit user details
    echo ' <a href="delete.php?email=' . $row['email'] . '">Delete</a>'; //able to delete user details
    echo '</li>';
}
    echo '</ul>';
?>