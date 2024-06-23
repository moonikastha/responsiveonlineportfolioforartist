<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <button class="btn btn-primary my-5"> <a href="index.php" class="text-light">Add User</a>
        </button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">S.N</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Number</th>
                    <th scope="col">Message</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $sql = "SELECT * FROM `send`";
                $result = mysqli_query($conn, $sql);
                if ($result) {

                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['ID'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $number = $row['number'];
                        $message = $row['message'];
                        echo '
                             <tr>
                            <th scope="row">' .$id. '</th>
                            <td>' . $name . '</td>
                            <td>' . $email . '</td>
                            <td>' . $number . '</td>
                            <td>' . $message . '</td>
                            <td  style="text-decoration:none;" >
                    <button class="text-bg-danger p-3"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
                    <button class="text-bg-warning p-3"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
                </td>
                        </tr>';
                    }
                }
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>