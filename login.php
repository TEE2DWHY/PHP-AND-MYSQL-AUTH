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
    <link rel="stylesheet" href="./styles/login.css" />
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Title -->
    <title>My LocalHost App</title>
</head>

<body>
    <!-- Login Container -->
    <div class="login">
        <h1>My LocalHost App</h1>
        <!-- Form -->
        <form>
            <h2 class="login-header">Login</h2>
            <!-- Email -->
            <div>
                <div class="input-headers">Email</div>
                <input type="email" name="email" placeholder="johndoe@gmail.com" required />
            </div>
            <div>
                <!-- Password -->
                <div class="input-headers">Password</div>
                <input type="password" name="password" placeholder="Enter Password" required />
            </div>
            <!-- Forgot Password -->
            <a href="./forgot-password.html">
                <div class="forgot-password">Forgot Password?</div>
            </a>
            <!-- Login Button -->
            <button type="submit" class="login-button" name="submit">
                <span class="button-text">Login</span>
                <div class="loading"></div>
            </button>
            <p class="err"></p>
            <!-- Sign up -->
            <div class="sign-up">
                Don't have an account?
                <a href="./index.php"><span class="sign-up-text">Sign Up</span></a>
            </div>
        </form>
    </div>
    <!-- Axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js"></script>
    <!-- JS -->
    <script src="../js/login.js" type="module"></script>
</body>

</html>