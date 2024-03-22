<?php
session_start();

require_once 'database.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('image-from-rawpixel-id-3110209-jpeg-1500x800-acf-cropped.jpg'); /* Replace 'background-image.jpg' with the path to your image */
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        
        .form-container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        
        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        
        .form-container form input[type="text"],
        .form-container form input[type="password"],
        .form-container form input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        
        .form-container form input[type="submit"] {
            width: 100%;
            background-color: #007bff; /* Blue color */
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        
        .form-container form input[type="submit"]:hover {
            background-color: #0056b3; /* Darker shade of blue on hover */
        }
        
        .form-container .form-link {
            text-align: center;
            margin-top: 10px;
        }
        
        .form-container .form-link a {
            color: #007bff; /* Blue color */
            text-decoration: none;
            cursor: pointer;
        }
        
        .form-container .form-link a:hover {
            text-decoration: underline;
        }

        /* Hide signup form initially */
        #signup-form {
            display: none;
        }
    </style>
</head>
<body>
    <div class="form-container" id="login-form">
        <h2>Login</h2>
        <form action="#" method="POST">
            <input type="text" name="username" placeholder="Username" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <input type="submit" value="Login">
        </form>
        <div class="form-link">
            <p>Don't have an account yet? <a onclick="showSignupForm()">Create one here</a></p>
        </div>
    </div>

    <div class="form-container" id="signup-form">
        <h2>Sign Up</h2>
        <form action="#" method="POST">
            <input type="text" name="username" placeholder="Username" required><br>
            <input type="email" name="email" placeholder="Email" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <input type="password" name="confirm_password" placeholder="Confirm Password" required><br>
            <input type="submit" value="Sign Up">
        </form>
        <div class="form-link">
            <p>Already have an account? <a onclick="showLoginForm()">Login here</a></p>
        </div>
    </div>

    <script>
        function showSignupForm() {
            document.getElementById('signup-form').style.display = 'block';
            document.getElementById('login-form').style.display = 'none';
        }

        function showLoginForm() {
            document.getElementById('login-form').style.display = 'block';
            document.getElementById('signup-form').style.display = 'none';
        }
    </script>
</body>
</html>

