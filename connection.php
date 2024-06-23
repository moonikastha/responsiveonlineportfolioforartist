<?php
$conn = mysqli_connect('localhost', 'root', '', 'contact');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
