<?php 
include 'connection.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <div class="register-container">
        <h2>Registration Form</h2>
        <form method="POST" action="">
            <input type="text" name="firstname" placeholder="First Name" required>
            <input type="text" name="lastname" placeholder="Last Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="submit">Register</button>
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $username = $_POST['username'];
            $password = $_POST['password'];

            $sql = "INSERT INTO users (firstname, lastname, email, username, password)
                    VALUES ('$firstname', '$lastname', '$email', '$username', '$password')";

            if (mysqli_query($conn, $sql)) {
                $_SESSION['username'] = $username; 
                echo "<script>alert('Registration successful!'); window.location='login.php';</script>";
                exit();
            } else {
                echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
            }
        }
        ?>
    </div>
</body>
</html>
