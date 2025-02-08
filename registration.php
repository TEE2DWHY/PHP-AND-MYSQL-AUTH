<?php
if (isset($_POST["submit"])) {
    // Getting form values
    $fullName = trim($_POST["fullName"]);
    $email = trim($_POST["email"]);
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirm-password"];

    $errorMessage = '';
    $successMessage = '';

    // Check if fields are empty
    if (empty($fullName) || empty($email) || empty($password) || empty($confirmPassword)) {
        $errorMessage = 'All fields are required.';
    }
    // Check if passwords match
    elseif ($password !== $confirmPassword) {
        $errorMessage = 'Passwords do not match.';
    } else {
        // Hash the password before saving it
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Insert into the database (make sure your database columns are correct)
        try {
            $sql = "INSERT INTO users (fullname, email, password) VALUES(?, ?, ?)";
            $stmt = $db->prepare($sql);

            // Bind the values to the prepared statement
            $stmt->bindParam(1, $fullName);
            $stmt->bindParam(2, $email);
            $stmt->bindParam(3, $hashedPassword);

            // Execute the statement
            $result = $stmt->execute();

            if ($result) {
                $successMessage = 'Registration successful! Please check your email for verification.';
            } else {
                $errorMessage = "Registration Failed. Please try again later.";
            }
        } catch (PDOException $e) {
            // Catch and display error if database connection or execution fails
            $errorMessage = "Error: " . $e->getMessage();
        }
    }
}
?>