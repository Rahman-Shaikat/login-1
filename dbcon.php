<?php
define("HOSTNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DATABASE", "login_system1");

$con = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE);

if(!$con){
    die("Connection Failed".mysqli_error($connection));
}
else{
 
}



?>