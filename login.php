<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login / Sign Up</title>
    <!-- <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="header.css"> -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/loginheader.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
</head>
<body>

    <div class="login_page">
        
        <!-- Header Section Starts -->
        <div class="header">
            <a href="./index.php">
                <img class="header_logo" src="./assets/mainlogowhite.png">
            </a>
            <nav>
                <ul>
                    <li><a href="./index.php">close <i class="fa fa-times"></i></a></li>
                </ul>
            </nav>
        </div>
        <!-- Header Section Starts -->

        <!-- Form section starts -->
        <div class="container">
            <form class="form" id="form">
                
                <h2 class="form_title">Log In</h2>
                
                <div class="error_msg error_msg--error"></div>
                
                <div class="input_field email">
                    <label for="email">Email</label>
                    <input type="email" id="email" class="input_txt_email" onchange="emailvalidation()" autofocus placeholder="Enter your email" required>
                    <div class="validation_error_msg" id="email_error_msg"></div>
                </div>
                
                <div class="input_field password">
                    <label for="password">Password</label>
                    <input type="password" id="password" class="input_txt_pass" placeholder="Enter your password" required>
                    <i class="bi bi-eye-slash" id="passeye"></i>
                </div>
                
                <div class="submit">
                    <button type="submit" class="submit_btn">Log In</button>
                </div>

                <p class="signup_text">
                    Don't have an account ?
                    <a href="./signup.php" class="signup_link" id="linksignup">Sign Up</a>
                </p>
            
            </form>
        </div>
        <!-- Form section ends --> 
    </div>

    <script type="text/javascript" src="login_signup.js"></script>
</body>
</html>