<?php

include 'conn.php';
extract($_GET);
$query="DELETE FROM USER WHERE ID='$id'";
mysqli_query($conn,$query);
header('location:display.php');

?>