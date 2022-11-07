<?php
$title ='articles';
require 'connect.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="styles.css"/>

	</head>

	<body>
		<header>
			<section>
				<h1>Northampton News</h1>
			</section>
		</header>
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<!--<li><a href="admin.php">Admin</a></li>-->
				<li><a href="searchusers.php">Search for users</a>
				<li><a href="searcharticle.php">Search for articles</a>
				</li>
				<li><a href="loginpage.php">admin</a></li>
			</ul>
		</nav>
		<img src="images/banners/randombanner.php" />
		<main>

		            <ul>
						<li><a href="postlocalnews.php">Local News</a></li>
						<li><a href="postsports.php">Sports</a></li>
						<li><a href="posttechnology.php">Technology</a></li>
						<li><a href="postbusiness.php">Business</a></li>
					</ul>
			<!-- Delete the <nav> element if the sidebar is not required -->
			<!--<nav>
				<ul>
					<li><a href="#">Sidebar</a></li>
					<li><a href="#">This can</a></li>
					<li><a href="#">Be removed</a></li>
					<li><a href="#">When not needed</a></li>
				</ul>-->
			</nav>
			<article>
				<h2>NORTHAMPTON NEWS</h2>
				<p>All Parts of Northampton</p>


<!--<ul>
<li><a href="postlocalnews.php">Add Local news</a></li>
<li><a href="postsports.php">Add sports news</a></li>
<li><a href="posttechnology.php">Add technology news</a></li>
<li><a href="postbusiness.php">Add business news</a></li>
</ul>-->


<!--<nav>-->

<!--</nav>-->

<!-- navigation links to all pages-->				
</body>
</html>



