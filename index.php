<?php
require_once("config/config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
  <!-- Custom CSS -->
  <link rel="stylesheet" href="./styles/style.css" />
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js"></script>
  <title>My LocalHost App</title>
</head>

<body>
  <?php
  include("./registration.php")
    ?>
  <h1>My LocalHost App</h1>
  <!-- Signup Container -->
  <div class="signup">
    <!-- Form -->
    <form method="post">
      <!-- Create Account -->
      <h3 class="signup-header">Create An Account</h3>

      <!-- Error or Success Message -->
      <?php if (!empty($errorMessage)) {
        echo "<p class='text-danger'>$errorMessage</p>";
      } ?>
      <?php if (!empty($successMessage)) {
        echo "<p class='text-success'>$successMessage</p>";
      } ?>

      <div>
        <!-- Full Name -->
        <div class="input-headers">Full Name</div>
        <input type="text" name="fullName" placeholder="fullname" value="<?= isset($fullName) ? $fullName : '' ?>"
          required />
      </div>
      <!-- Email -->
      <div>
        <div class="input-headers">Email</div>
        <input type="email" name="email" placeholder="johndoe@gmail.com" value="<?= isset($email) ? $email : '' ?>"
          required />
      </div>
      <!-- Password -->
      <div>
        <div class="input-headers">Password</div>
        <input type="password" name="password" placeholder="create password" required />
      </div>
      <!-- Confirm Password -->
      <div>
        <div class="input-headers">Confirm Password</div>
        <input type="password" name="confirm-password" placeholder="confirm password" required />
      </div>
      <p class="terms">
        By clicking "Sign up", you agree to our newsletter subscription.
      </p>
      <!-- Login Button -->
      <button type="submit" class="signup-button" name="submit">
        <span class="button-text"> Sign Up</span>
        <div class="loading"></div>
      </button>
      <!-- Login -->
      <p class="login">
        Already have an account?
        <a href="./login.html"><span class="login-text">Login.</span></a>
      </p>
    </form>
  </div>
</body>

</html>