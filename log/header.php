<?php
session_start(); 
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header>
		<nav>
			<div class="main-wrapper" >

				<ul>
					<li><a href="index.php">Home</a></li>
				</ul>
				<div class="nav-login">
					<?php
						if (isset($_SESSION['u_id'])) {
							echo '	<form action="includes/logout.inc.php" method="POST">

						<button type="submit" name="submit" >Logout</button>
						
					</form>';
						}else{
							echo '<form action="includes/login.inc.php" method="POST">
						<input type="text" name="uid" placeholder="username/email">
						<input type="password" name="pwd" placeholder="password">
						<button type="submit" name="submit">Login</button>
					</form>
					<a href="signup.php">Signup</a>';
						}

					?>
					
				</div>
				
			</div>
		</nav>
		 
	</header>