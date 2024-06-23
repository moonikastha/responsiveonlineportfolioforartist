<?php
include 'connection.php';
$id = $_GET['updateid'];
echo "<script>console.log('$id')</script>";
if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $message = $_POST['message'];
    // Using simple method without prepared statements (not recommended for production)
    $sql = "UPDATE `send` SET name='$name', email='$email', number='$number', message='$message' WHERE ID='$id'";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Updated successfully');</script>";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section id="contact" class="contact">
        <div class="primarycenter">Contact Us</div>
        <div class="contact-box">
            <form action="update.php?updateid=<?php echo $id; ?>" method="POST">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="number">Phone Number</label>
                    <input type="number" name="number" id="number" placeholder="Enter your phone">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" cols="30" rows="10"></textarea>
                </div>
                <button name="update" onclick="">Update</button>
            </form>
        </div>
    </section>
<script>
    // Get all the input fields
    const inputs = document.querySelectorAll('input');
    const textarea = document.querySelector('textarea');

    // on clicking update it should check if all the fields are filled,the only submit fo pho
    document.querySelector('button').addEventListener('click', (e) => {
        inputs.forEach(input => {
            if (input.value === '') {
                e.preventDefault();
                alert('Please fill all the fields');
            }
        });
        if (textarea.value === '') {
            e.preventDefault();
            alert('Please fill all the fields');
        }
    });
</script>
</body>
</html>