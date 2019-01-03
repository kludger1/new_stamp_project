<?php include "partials/header.php"; ?>


<div class="nav-container">
<a href="../views/add_stamp.php">add stamp</a>
<a href="../pre_views/album_coll_pre.php">Albums</a>  
    <a href="../views/login.php">Log Out</a>
</div>



<div class="container flex-column-center">

<h1><span><?php echo $currentAlbumName;?></span> Album's Stamps</h1>

<?php if($success) { ?><div class="message success" role="alert"><?= $success ?></div><?php }?>



<div class="search-container">
<form action="../includes/search.inc.php" method="GET">
 <input type="search" name="stamp_search" placeholder="Name of stamp">
<button  type="submit" name="stamp_search_btn">Search</button>   
 </form>
</div>




<div class="container">
<?php if(empty($stamps)){
	echo "<p class='error'>no stamps here</p>";
}?>
 <?php foreach ($stamps as $key=> $stamp):?>
 <div class='stamp display'>
     <div><a class=" m-b delete" href="../includes/delete.inc.php?stampId=<?php echo $stamp->stamp_id?>">X</a></div>
     
 <a  href='../views/stamp.php?id=<?php echo $stamp->stamp_id?>&name=<?php
  echo $stamp->stamp_name?>&des=<?php echo $stamp->stamp_description?>'>
  <p class="stamp-name" ><?php echo $stamp->stamp_name ?></p>
 <p class="stamp-des"><?php echo $stamp->stamp_description?></p>
<p class="stamp-inser"><?php echo $stamp->inserted?></p>
</a>
</div>

<?php endforeach; ?>

</div>



</div>

<?php include "partials/footer.php"; ?>