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
$newempid=$_POST['newpass'];
$empname=$_POST['empname'];

$sql = "UPDATE `MY_COLLEGE` SET  `id`='$newempid' WHERE `name`='$empname'";
$result = mysqli_query($connection,$sql);
if ($result) {
    // Employee exists, redirect to the dashboard or any other page
    echo "id updated ";
    
} 
else{
    echo "employee don not exist";
}