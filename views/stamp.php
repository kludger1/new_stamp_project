<?php include "partials/header.php"; ?>
<div class="nav-container">
<a href="../pre_views/stamp_coll_pre.php">back</a>
<a href="../pre_views/album_coll_pre.php">Albums</a>  
    <a href="login.php">Log Out</a>
</div>


<?php
$id = isset($_GET['id']) && $_GET['id'] != "" ? $_GET['id'] : false;
$name = isset($_GET['name']) && $_GET['name'] != "" ? $_GET['name'] : false;
$des = isset($_GET['des']) && $_GET['des'] != "" ? $_GET['des'] : false;
if($id && $name && $des) {
    $_SESSION['current_stamp_id'] = $id;
    $_SESSION['current_stamp_name'] = $name;
    $_SESSION['current_stamp_des'] = $des;
    
}
?>

<div class="container stamp-container simple-border flex-column-center">
    <h1><?php echo $name ?></h1>
    <div class="stamp-content">
    <img src="../stampsPics/<?= $name ?>.jpg" alt="stamp img" class="stamp-pic"/>
    <p><?php echo $des ?></p>  
    </div>
</div> <br>



<div>

<?php include "partials/footer.php"; ?>