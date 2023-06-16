<?php

require_once ("DBImplementation.php");
$db=new DBImplementation();

$user_id=$_GET['user_id'];


$result=$db->delete_record($user_id);

if($result==true)
{
    header("location:index.php?s=1");
}
else
{
    header("location:index.php?s=0");
}

?>