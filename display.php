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
            <div class="col-lg-12">
            <table class="table">
            <thead class="thead-dark">
           <tr>
           <th scope="col">ID</th>
           <th scope="col">Username</th>
           <th scope="col">Password</th>
           <th scope="col">Delete</th>
           <th scope="col">Update</th>
           </tr>
         </thead>
         <?php
           include 'conn.php';
           $query="SELECT * FROM USER";
           $result=mysqli_query($conn,$query);
           while($res=mysqli_fetch_array($result)){
         ?>
         
       <tbody>
      <tr>
      <td><?php echo $res['ID']?></td>
      <td><?php echo $res['username']?></td>
      <td><?php echo $res['password']?></td>
      <td><a href="delete.php?id=<?php echo $res['ID']?>"><input type="button" class="btn btn-primary" value="Delete"></a></td>
      <td><a href="update.php?id=<?php echo $res['ID']?>"><input type="button" class="btn btn-primary" value="Update"></a></td>
      </tr>
  </tbody>
  <?php }?>
</table>
            </div>
        </div>
    </div>
</body>
</html>