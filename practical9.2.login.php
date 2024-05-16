<?php
$server_name="localhost";
$user_name="root";
$password="";
$database="AVPTI";
$connection = mysqli_connect($server_name,$user_name,$password,$database);
if(!$connection)
        {
            echo "connection not established because of ".mysqli_connect_error();
        }
else
    {
            echo "connection is established"."<br>";
    }
$empid=$_POST['empid'];
$empname=$_POST['empname'];

$sql = "SELECT * FROM `MY_COLLEGE` WHERE `name`='$empname' AND `id`='$empid'";
$result = mysqli_query($connection,$sql);
if ($result->num_rows > 0) {
    // Employee exists, redirect to the dashboard or any other page
    echo "welcome back ".$empname." your id is ".$empid;
    session_start();
    $_SESSION['username'] = $empname;
    $_SESSION['employee_id'] = $empid;
} 
else{
    echo "have not found any user with".$empname." and ".$empid;
}

?>