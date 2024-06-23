<?php
include 'connection.php';
if (isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
//delete query
$sql="delete from `send` where id=$id";
$result=mysqli_query($conn,$sql);
if($result)
{
 header('location:display.php');
}
else{
    die("Connection failed: " . mysqli_connect_error());
}
}
?>