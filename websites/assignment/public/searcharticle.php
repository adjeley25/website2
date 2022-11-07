<?php
echo '<p><a href="index.php">return home </a>';
require 'connect.php';
$date = date('Y-m-d H:i:s');

// querrying to display data in every table/ code reference stackoverflow
$result = $pdo->query("SELECT * FROM postlocalnews 
                        UNION ALL 
                        SELECT * FROM postsports
                        UNION ALL 
                        SELECT * FROM posttechnology
                        UNION ALL
                        SELECT * FROM postbusiness
                        ORDER BY date DESC");
 
foreach ($result as $ram) {

    echo '<h2>' . $ram['title'] . '</h2><p>' . $ram['articletext'] .'<br>' . 'POSTED ON '. $ram['date'] . '</p>' ;

}
?>
