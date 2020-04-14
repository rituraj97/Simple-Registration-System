<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Home Page</h2>
	</div>
	<div class="content">

		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
			<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong>. <br> You are now logged in and a part of our organization.</p>
			<p class="logout"> <a href="index.php?logout='1'" style="color: rgb(95, 221, 228);">logout</a> </p>
		<?php endif ?>
	</div>	
	<footer id = "footer" class="footer">
   	 <div class="footerContainer">
        <p class="copyright">© 2020 by Rituraj Saurabh MCA Pondicherry University.</p>
    </div>
	</footer>
</body>

</html>