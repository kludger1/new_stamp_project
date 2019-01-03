<?php include "partials/header.php"; ?>

<div class="nav-container">
<a href="../pre_views/album_coll_pre.php">Albums</a>
    <a href="login.php">Log Out</a>
</div>

<div class="container flex-column-center">
<h1>Add Album</h1>
<?php 
$error = isset($_GET['error']) && $_GET['error'] != "" ? $_GET['error'] : false;
if($error) { ?>
	<div class="message error" role="alert"><?= $error ?></div>
<?php } ?>
<form action="../includes/add_album.inc.php" method="post">
	<div>
		<input type="text" name="album_name" placeholder="Album Name" maxlength="50" required /><br>
		<textarea rows="5" cols="30" name="album_description" placeholder="Enter album's description here...(50 characters only)" maxlength="50" required></textarea>
	</div>

	<button type="submit" name="add_album_btn" >Add</button>


</form>

</div>


<?php include "partials/footer.php"; ?>