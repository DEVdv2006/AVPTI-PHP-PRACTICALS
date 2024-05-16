<?php
session_start();
if(isset($_SESSION['name']))
{   echo"hi ".$_SESSION['name']." you are ".$_SESSION['age'];
   
}
else{
    echo"please login ";
}

?>