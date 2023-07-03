<?php
if (isset($_POST['submit'])){
  $user = $_POST['username'];
  $pass = $_POST['password'];
  if ($user == "admin" && $pass == "admin"){
    echo ("Username and Password Matched");
  }
  echo("Please fill out this field.");

}
?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="shortcut icon" type="png" href="Login/images//favicon.png" />
    <title>Login SignUp</title>
    <link rel="stylesheet" type="text/css" href="loginStyle.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- It will redirect to the Home Page after submitting the form -->
    <script>
      $(document).ready(function () {
        $("form").submit(function () {
          alert("مرحبا بك!😊");
        });
      });
    </script>
  </head>
  <body>
    <div  class="logo">
      <img src="Logo/logo2.png" alt="">
    </div>
    <div class="form-box">
      <div class="button-box">
        <div id="btn"></div>
        <button
          type="button"
          class="toggle-btn"
          id="log"
          onclick="login()"
          style="color: #fff"
        >
          Log In
        </button>
        <button type="button" class="toggle-btn" id="reg" onclick="register()">
          Register
        </button>
      </div>
      <div class="social-icons">
        <a onclick="facebook()"><img src="Login/images/fb2.png" /></a>
        <a onclick="instagram()"><img src="Login/images/insta2.png" /></a>
        <a onclick="twitter()"><img src="Login/images/tt2.png" /></a>
      </div>

      <!-- Login Form -->
      <form id="login" class="input-group" action="index2.php" method="post">
        <div class="inp">
          <img src="Login/images/user.png" /><input
            type="text"
            id="email"
            name="username"
            class="input-field"
            placeholder="Username or Phone Number"
            style="width: 88%; border: none"
            required="required"
          />
        </div>
        <div class="inp">
          <img src="Login/images/password.png" /><input
            type="password"
            id="password"
            name="password"
            class="input-field"
            placeholder="Password"
            style="width: 88%; border: none"
            required="required"
          />
        </div>
        <input type="checkbox" class="check-box" />Remember Password
        <button type="submit" class="submit-btn">Log In</button>
      </form>


      <div class="other" id="other">
        <div class="instead">
          <h3>or</h3>
        </div>
        <button class="connect" onclick="google()">
          <img src="Login/images/google.png" /><span>Sign in with Google</span>
        </button>
      </div>

      <!-- Registration Form -->
      <form id="register" class="input-group" action="index.php">
        <input
          type="text"
          class="input-field"
          placeholder="Full Name"
          required="required"
        />
        <input
          type="email"
          class="input-field"
          placeholder="Email Address"
          required="required"
        />
        <input
          type="password"
          class="input-field"
          placeholder="Create Password"
          name="psame"
          required="required"
        />
        <input
          type="password"
          class="input-field"
          placeholder="Confirm Password"
          name="psame"
          required="required"
        />
        <input
          type="checkbox"
          class="check-box"
          id="chkAgree"
          onclick="goFurther()"
        />I agree to the Terms & Conditions
        <button type="submit" id="btnSubmit" class="submit-btn reg-btn">
          Register
        </button>
      </form>
    </div>
    <script type="text/javascript" src="loginscript.js"></script>
  </body>
</html>