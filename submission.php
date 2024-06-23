
<?php
include 'connection.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $message = $_POST['message'];
    $sql = "INSERT INTO `send`(name,email,number,message) VALUES ('$name', '$email', '$number', '$message')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>alert('Data inserted successfully by you');</script>";
    } else {
        die(mysqli_error($conn));
    }
}
?>