<?php
require_once ("DBImplementation.php");
$db=new DBImplementation();

$rows=$db->allusers();
if (isset($_GET['s']))
{
    if($_GET['s']==1)
    {
        echo '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                 <strong>Success!</strong> Data is Deleted Successfully
                </div>';
    }
    else
    {
        echo '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                 <strong>Success!</strong> Data is Not Deleted Successfully
                </div>';
    }
}

if (isset($_GET['d']))
{
    if($_GET['d']==1)
    {
        echo '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                 <strong>Success!</strong> Data is Updated Successfully
                </div>';
    }
    else
    {
        echo '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                 <strong>Success!</strong> Data is Not Updated Successfully
                </div>';
    }
}
if (isset($_GET['a']))
{
    if($_GET['a']==1)
    {
        echo '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                 <strong>Success!</strong> Data is Inserted Successfully
                </div>';
    }

}






?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 12</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>

    </style>
</head>
<body>

<div class="container">




    <di class="mt-4 col-4 text-center">
        <h3><b>National Textile University, Faisalabad</b></h3>
    </di>
    <nav class="navbar navbar-light bg-white mb-4">
        <div class="container-fluid">
            <a class="navbar-brand text-info" href='add_data.php'><b>Add Record</b></a>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id="myInput" onkeyup="myFunction()">
            </form>
        </div>
    </nav>




    <table class="table table-bordered table-hover"  id="myTable">
        <thead>
        <tr>
            <th>User ID</th>
            <th>User Name</th>
            <th>Email</th>
            <th>Operations</th>


        </tr>
        </thead>
        <tbody >

        <?php
        foreach ($rows as $row) {
            echo " <tr>
                    <td>$row[0]</td>
                    <td >$row[1]</td>
                     <td>$row[3]</td>
                     <td class='text-center'>
                     <div class='dropdown'>
  <button class='btn btn-secondary dropdown-toggle' type='button' id='dropdownMenuButton' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
    Opearation
  </button>
                <div class='dropdown-menu' aria-labelledby='dropdownMenuButton'>
                 <a class='dropdown-item text-success' href='update_record.php?user_id=$row[0]' >Edit</a>
                 <a class='dropdown-item text-danger' href='delete_record.php?user_id=$row[0]' >Delete</a>
                 
                </div>

              </td>
                    </tr>";

        }
        ?>


        </tbody>
    </table>


    <script>
        function myFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>
</div>

</body>
</html>

