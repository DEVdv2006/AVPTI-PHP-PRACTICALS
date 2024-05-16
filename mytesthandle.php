<?php
// if($_GET['language']=="english")
// {
//     echo "Selected english";

// }
// else{
//     echo "Selected hindi";

// }
session_start();
$valid_username="user";
$username=$_GET['uname'];
if($username===$valid_username){
    echo"Welcome ".$username;
}
else{
    echo"session is not started";
}

?>