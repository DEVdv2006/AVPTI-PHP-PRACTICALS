<?php
$myname = $_GET['name'];
$myage = $_GET['age'];

setcookie("my_name",$myname,time()+86400,"/");
setcookie("my_age",$myage,time()+86400,"/");


?>