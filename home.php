<?php include('header.php'); ?>
<?php session_start();?>


<?php 
if(isset($_SESSION['uname'])){
    echo "<h2> Hello ".$_SESSION['uname']."</h2>";
}
else{
    header('location:index.php?msg=You need to login first.');
}
?>


<a href="logout.php" class="btn btn-danger">Logout</a>












<?php include('footer.php')?>