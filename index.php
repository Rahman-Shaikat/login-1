<?php include('header.php'); ?>
        <?php 
        if(isset($_GET['msg'])){
            echo "<h5>".$_GET['msg']."</h5>";
        }
        ?>
       
    <form action="login.php" method="post" class="form-group">
        <div>
            <label for="uname">Username</label>
            <input type="text" name="uname" class="form-control">
        </div>

        <div>
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control">
        </div>

        <div>
            <input type="submit" name="login" value="Login" class="btn btn-success">
        </div>
    </form>



 <?php include('footer.php')?>