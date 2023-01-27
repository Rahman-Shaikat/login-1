<?php session_start(); ?>

<?php session_unset();?>

<?php session_destroy();?>
<?php header('location:index.php?msg=Your logout was successful!'); ?>