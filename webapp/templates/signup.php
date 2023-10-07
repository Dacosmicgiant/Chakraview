<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="{{ url_for('static',filename='css/loginstyle.css') }}">
  <title>Chakravyuh-The Detector</title>
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                 <form id="signup-form" class="form" role="form" method="post" autocomplete="off" action="../api/signup_submit.php">
                    <h2>Signup</h2>
                    <div class="inputbox">
                        <ion-icon name="person-outline"></ion-icon>
                        <input type="text" name="full_name" required>
                        <label for="">Name</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" name="email" required>
                        <label for="">Email</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="password" required>
                        <label for="">Set password</label>
                    </div>
                    <a href="/">
                      <button>Sign in</button>
                    </a>
                    <div class="register">
                        <span>Already have an account?
                            <a href="login.php" data-target="#login">Login</a>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
