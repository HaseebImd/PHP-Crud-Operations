<?php
require_once ("DBImplementation.php");
$db=new DBImplementation();


$db->updatetdata($_POST['user_id'],$_POST['username'], $_POST['email']);
header("location:index.php?d=1");