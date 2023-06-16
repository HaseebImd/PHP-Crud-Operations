<?php

require_once ("DBImplementation.php");
$db=new DBImplementation();

$user_id=$_GET['user_id'];


$rows=$db->getoneuser($user_id);
if(sizeof($rows)==0){
    header("Location: showdegress.php");

}else{
    $row=$rows[0];

}







// bc kam krny ka tareeka hota koi yeh echo wali yakki kun lgai hou
// pencil yh update h...sirf ak e row honi h fethc......is liya.....
// mujhy pta ha ek row honi ha yeh echo wali yaaki kia ha ek proper html ka page ni bna ckta ?
//bc echo k andr echo kr rha lun result ana ha ?
//.. ma


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Record</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container col-4 mt-5 bg-light">
<h2 class="text-center text-secondary">Edit User</h2>
<form action="update_record_db.php" method="post">
    <div class="form-group">
        <label for="email">Username : </label>
        <input required type="text" class="form-control" id="email"
               placeholder="Enter Degre Title" name="username" value="<?=$row['username']?>"> </div>
    <div class="form-group">
        <label for="email">Email : </label>
        <input required type="text" class="form-control" id="email" placeholder="Enter Short Name" name="email"
               value="<?=$row['email']?>">
    </div>
    <div>
        <input  hidden name="user_id" value="<?=$row['user_id']?>">
    </div>


    <div class="text-center">
        <button type="submit" class="btn btn-primary text-center">Submit</button>
    </div>
</form>
</div>



</body>
</html>

