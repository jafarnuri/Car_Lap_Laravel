<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website with Login & Signup Form | CodingNepal</title>
    <!-- Google Fonts Link For Icons -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0">
    <link rel="stylesheet" href="{{asset('/')}}loginandregister/style.css">

</head>

<body>

    <div class="form-popup">

        <div class="form-box signup">
            <div class="form-details">
                <h2>Create Account</h2>
                <p>To become a part of our community, please sign up using your personal information.</p>
            </div>
            <div class="form-content">
                <h2>SIGNUP</h2>
                <form action="" method="POST">
                    <div class="input-field">
                        <input type="text" name="name" required>
                        <label>Enter your name</label>
                    </div>
                    <div class="input-field">
                        <input type="email" name="email" required>
                        <label>Enter your email</label>
                    </div>

                    <div class="input-field">
                        <input type="password" name="password" required>
                        <label>Enter your password</label>
                    </div>
                    <div class="input-field">
                        <input id="confirm_password" type="password" name="confirm_password" required>
                        <label for="confirm_password"> Confirm Password</label>
                    </div>
                    <div class="policy-text">
                        <input type="checkbox" id="policy">
                        <label for="policy">
                            I agree the
                            <a href="#" class="option">Terms & Conditions</a>
                        </label>
                    </div>
                    <button type="submit">Sign Up</button>
                </form>
                <div class="bottom-link">
                    Already have an account?
                    <a href="/login" id="login-link">Login</a>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('/')}}loginandregister/script.js" defer></script>
</body>

</html>