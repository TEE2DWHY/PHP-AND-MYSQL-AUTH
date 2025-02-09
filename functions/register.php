<?php
if (isset($_POST["submit"])) {
    $fullName = trim($_POST["fullName"]);
    $email = trim($_POST["email"]);
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirm-password"];

    $errorMessage = '';
    $successMessage = '';

    if (empty($fullName) || empty($email) || empty($password) || empty($confirmPassword)) {
        $errorMessage = 'All fields are required.';
    } elseif ($password !== $confirmPassword) {
        $errorMessage = 'Passwords do not match.';
    } else {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        try {
            $sql = "INSERT INTO users (fullname, email, password) 
                    VALUES(:fullName, :email, :password)";
            $stmt = $db->prepare($sql);

            // Bind the values to the named placeholders
            $stmt->bindParam(':fullName', $fullName);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $hashedPassword);

            $result = $stmt->execute();

            if ($result) {
                echo "<script type='text/javascript'>
                    alert('Registration is successful!');
                    window.location.href = './login.php'; // Redirect after alert
                       </script>";
                // header("Location: ./login.php");
            } else {
                $errorMessage = "Registration Failed. Please try again later.";
            }
        } catch (PDOException $e) {
            $errorMessage = "Error: " . $e->getMessage();
        }
    }
}
?>