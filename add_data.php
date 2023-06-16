
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Data</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container col-4 mt-5 bg-light">
    <h2 class="text-center text-secondary">Add New User</h2>
    <form action="add_data_db.php" method="post">
        <div class="form-group">
            <label for="email">Username :</label>
            <input required type="text" class="form-control" id="email"
                   placeholder="Enter Username" name="username" </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input required type="email" class="form-control" id="email" placeholder="Enter Email Address" name="email">


        <div class="text-center mt-4">
            <button type="submit" class="btn btn-primary text-center">Submit</button>
        </div>
    </form>
</div>



</body>
</html>

