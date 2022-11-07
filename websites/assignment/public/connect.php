<?php
// Connects php file to mysql workbench
$server = 'v.je';// name of the server
$username = 'student';// 
$password = 'student';
//// schema should bealready created in MySQL workbench
//// without schema error will be displayed
$schema = 'assignment1';

$pdo = new PDO('mysql:dbname=' . $schema . ';host=' . $server, $username, $password,
[ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

