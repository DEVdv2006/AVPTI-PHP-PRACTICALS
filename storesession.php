<?php
$name=$_GET['name'];
$age=$_GET['age'];

session_start();
$_SESSION['name']=$name;
$_SESSION['age']=$age;





?>