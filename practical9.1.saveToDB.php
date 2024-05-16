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
            echo "connection is established";
    }

$empid=$_POST['empid'];
$empname=$_POST['empname'];
$branch=$_POST['branch'];
$salary=$_POST['salary'];



$sql="INSERT INTO `MY_COLLEGE` (`id`,`name`,`branch`,`salary`) VALUES ( '$empid','$empname','$branch','$salary')";
$result=mysqli_query($connection,$sql);
if($result)
{    echo "record inserted successfully";

}
else{
    echo "not inserted successfully because ".mysqli_error($connection);
}



?>