<?php
require_once ("DBImplementation.php");
$db=new DBImplementation();

$db->insertdata($_POST['username'], $_POST['email']);

header("Location: index.php?a=1");

