<?php
include 'conn.php';
if(count($_POST)!=0)
{
    extract($_POST);
    extract($_GET);
    $query="UPDATE USER SET username='$username', password='$password' WHERE ID='$id'";
    $result=mysqli_query($conn,$query);
    if($result==true)
    {
        echo "Record Inserted";
    }
    else{
        echo "Failed";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="cl-lg-6 m-auto">
               <form method="post">
               <div class="card">
                    <div class="card-header bg-dark">
                        <h1 class="ext-center text-white">Update Operation</h1>
                    </div>
                    <div class="form-group">
                        <label for="username">UserName</label>
                        <input type="text" class="form-control" name="username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" class="form-control" name="password">
                    </div>
                    <button type="submit" class="btn btn-success">submit</button>
                </div>

               </form>
               <h5><a href="display.php"><input type="button" class="btn btn-primary" value="view user"></a></h5>

            </div>
        </div>
    </div>
</body>
</html>