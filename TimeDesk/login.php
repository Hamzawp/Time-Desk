<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="validation.php" method="post" class="sign-in-form">
            <h2 class="title">ADMIN</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="user" placeholder="Username" required>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" id="myInput" name="password" placeholder="Password" required data-placement="top">
              <input type="checkbox" onclick="myFunction()" style="margin-top: 20px;"><p style="margin-top: 20px; ">Show Password</p></input>
            </div>
            <input type="submit" value="Login" class="btn solid" style="margin-top: 50px;" href />
            <!-- <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div> -->
          </form>

          <form action="validTeacher.php" method="post" class="sign-up-form">
            <h2 class="title">TEACHER</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="user" placeholder="Username" required>
            </div>
          <!--  <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" />
            </div>-->
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" id="myInput1" name="password" placeholder="Password" required>
              <input type="checkbox" onclick="myFunction1()" style="margin-top: 20px;"><p style="margin-top: 20px; ">Show Password</p></input>
            </div>
            <input type="submit" class="btn" value="Login" style="margin-top: 50px;" />
            <!-- <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div> -->
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Teacher ?</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
              ex ratione. Aliquid!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign in
            </button>
          </div>
          <img src="log.svg" class="image" alt="" />
        </div>

        <div class="panel right-panel">
          <div class="content">
            <h3>Admin ?</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
              laboriosam ad deleniti.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="login-removebg-preview.png" class="image" alt="" height="450" width="250" />
        </div>
      </div>
    </div>

    <script src="script.js"></script>
    <!-- <script>
      $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
      });
    </script> -->
    <script>
              function myFunction() {
            var x = document.getElementById("myInput");
            if (x.type === "password") {
              x.type = "text";
            } else {
              x.type = "password";
            }
          }
          function myFunction1() {
            var x = document.getElementById("myInput1");
            if (x.type === "password") {
              x.type = "text";
            } else {
              x.type = "password";
            }
          }
</script>
  </body>
</html>
