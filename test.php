<?php
$name=$_POST['ename'];
if($_POST['display_button']=="show address")
{
    echo "you need address of ".$name;
}
else{
    echo "you need phone number of ".$name;
}

?>