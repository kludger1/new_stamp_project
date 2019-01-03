<?php include "partials/header.php"; ?>


<div class="container simple-border flex-column-center user-form">
<h1>Sign Up</h1>

<?php 
$error = isset($_GET['error']) && $_GET['error'] != "" ? $_GET['error'] : false;
if($error) { ?>
	<div class="message error" role="alert"><?= $error ?></div>
<?php } ?>

<form action="../includes/signup.inc.php" method="post">
	<div>
		<input type="email" name="email" placeholder="Email" required /><br>
		<input type="text" name="first" placeholder="First Name" required /><br>
		<input type="text" name="last" placeholder="Last Name" required /><br>
		<input type="password" name="pwd" placeholder="Password" required /><br>
		<input type="password" name="confirm_pwd" placeholder="Confirm Password" required />
	</div>

	<button type="submit" name="sign_up" >Sign Up</button>
	<a href="login.php">Back</a>

</form>
</div>


<?php include "partials/footer.php"; ?>