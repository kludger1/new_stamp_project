<?php include "partials/header.php"; ?>

<div class="container simple-border flex-column-center user-form">
	<h1>Login</h1>

	
	<?php 
$error = isset($_GET['error']) && $_GET['error'] != "" ? $_GET['error'] : false;
$success = isset($_GET['success']) && $_GET['success'] != "" ? $_GET['success'] : false;
if($error) { ?><div class="message error" role="alert"><?= $error ?></div><?php } 
if($success) { ?><div class="message success" role="alert"><?= $success ?></div><?php }?>


<form action="../includes/login.inc.php" method="POST">
	<div>
		<input type="email" name="email" placeholder="email" required /><br>
		<input type="password" name="pwd" placeholder="password" required />
	</div>

	<button type="submit" name="login" >Login</button>
	<a href="signup.php">Sign Up</a>

</form>

</div>

<?php include "partials/footer.php"; ?>
