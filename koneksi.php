<?php 
$db_host="localhost";
$db_user="root";
$db_pass="";
$db_name="mykampus";

if ($db_host!=null && $db_user!=null && $db_name!=null):
$con= mysqli_connect($db_host, $db_user, $db_pass, $db_name);
else:
return false;
endif;

// dibuat oleh tania firjinia mahessa //

 ?>