<?php include "partials/header.php";?>



<div class="nav-container">
<a href="../views/add_album.php">add album</a>
    <a href="../views/login.php">Log Out</a>
</div>



<p class="welcome-mess">Hello <span class="user-name"><?php echo  $_SESSION['user_first']?></span>, gald to have you here!</p>


<div class="container flex-column-center">
       <h1>All Albums</h1>
       <?php 
$success = isset($_GET['success']) && $_GET['success'] != "" ? $_GET['success'] : false;
if($success) { ?><div class="message success" role="alert"><?= $success ?></div><?php }?>
   <div class="search-container">
<form action="../includes/search.inc.php" method="GET">
 <input type="search" name="album_search" placeholder="Name of album">
<button  type="submit" name="album_search_btn">Search</button>   
 </form>
</div>

    <div class="container">
<?php if(empty($albums)){
	echo "<p class='error'>no albums here</p>";
}?>
       <?php foreach ($albums as $key=>$album):?>
       <div class="album display">
           <div class="m-b"><a class="delete" href="../includes/delete.inc.php?albumId=<?php echo $album->album_id ?>">X</a></div>
           <div>
              <a  href="../pre_views/stamp_coll_pre.php?key=<?php 
        $_SESSION['current_album_id'] = $album->album_id; echo $_SESSION['current_album_id'];?>&name=<?php 
        $_SESSION['current_album_name'] = $album->album_name; echo $_SESSION['current_album_name'];?>">
       <p class="album-name"><?php $_SESSION['current_album_name'] = $album->album_name;
       echo $_SESSION['current_album_name'];?></p>
       <p class="album-des"><?php echo $album->album_description;?></p>
       </a>       
           </div>
 
       </div>
       <?php endforeach; ?>
    </div>
</div>




<?php include "partials/footer.php"; ?>