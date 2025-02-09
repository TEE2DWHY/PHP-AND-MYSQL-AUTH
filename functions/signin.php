<?php
require_once("config/config.php");

if (isset($_POST['submit'])) {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    $errorMessage = '';

    if (empty($email) || empty($password)) {
        $errorMessage = 'Email and password are required.';
    } else {
        try {
            // Query to check if the email exists in the database
            $sql = "SELECT id, fullname, email, password FROM users WHERE email = :email";
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->execute();

            // Check if a row was returned
            if ($stmt->rowCount() > 0) {
                $user = $stmt->fetch(PDO::FETCH_ASSOC);

                // Verify the password using password_verify()
                if (password_verify($password, $user['password'])) {
                    // Password is correct, log the user in
                    echo "<script type='text/javascript'>alert('Login is Successful!');</script>";
                    // header("Location: dashboard.php");
                } else {
                    // Invalid password
                    $errorMessage = 'Invalid password.';
                }
            } else {
                // No user found with this email
                $errorMessage = 'No user found with this email.';
            }
        } catch (PDOException $e) {
            $errorMessage = "Error: " . $e->getMessage();
        }
    }

    // If there's an error, display it
    if ($errorMessage) {
        echo "<script type='text/javascript'>alert('$errorMessage');</script>";
    }
}
?>