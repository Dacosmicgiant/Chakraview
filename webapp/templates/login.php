<?php
    session_start();
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="{{ url_for('static',filename='css/loginstyle.css') }}">
  <title>Chakravyuh-The Detector</title>
</head>
<body>
    <section>
        <div class="form-box" id="login">
            <div class="form-value">
                 <form id="login-form" class="form" role="form" method="post" autocomplete="off" action="../api/login_submit.php">
                    <h2>Login</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" name="email" required>
                        <label for="">Email</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="email" required>
                        <label for="">Password</label>
                    </div>
                    <div class="forget">
                        <label for=""><input type="checkbox">Remember Me &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Forget Password</a></label>
                      
                    </div>
                    <a href="/">
                     <button>Log in</button> 
                    </a>
                    <div class="register">
                        <p>Don't have a account &nbsp;&nbsp;<a href="signup.php">Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
