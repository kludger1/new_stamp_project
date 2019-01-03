<?php include "partials/header.php"; ?>
<div class="nav-container">
<a href="../pre_views/stamp_coll_pre.php">back</a>
<a href="../pre_views/album_coll_pre.php">Albums</a>  
    <a href="login.php">Log Out</a>
</div>

<div class="container flex-column-center">
<h1>Add Stamp</h1>

<form action="../includes/add_stamp.inc.php" method="post" enctype="multipart/form-data">
	<div>
    <input type="file" name="stamp_img" required /> <br>
		<input type="text" name="stamp_name" placeholder="Stamp Name" maxlength="50" required /><br>
		<textarea rows="5" cols="30" name="stamp_description" placeholder="Enter Stamp's description here...(250 characters only)" maxlength="250" required></textarea>
	</div>

	<button type="submit" name="add_stamp_btn" >Add</button>


</form>
</div>
<?php include "partials/footer.php"; ?>