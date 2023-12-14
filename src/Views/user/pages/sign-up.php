<?php

Model('user');
$user = new User();


// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve values from the form
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $cpass = $_POST["cpass"];
    $checkpass = $_POST["checkpass"];
    // Compare passwords
    if ($pass == $cpass) {
      

        if ($user->createAccountUser($email,$pass,$checkpass) === TRUE) {
          header('Location: ./sign-in');
        } else {
          echo "user name or password not correct or this account exists";
        }
    } else {
        echo "non valid password";
    }
    
}?>
<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
  
<?php  include_once  'component/head.php'; ?>
  
  <title>
  shop
  </title>
  
</head>

<body class="sign-in-illustration">

  <section>
    <div class="page-header min-vh-100">
      <div class="container">
        <div class="row">
          <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
            <div class="card card-plain">
              <div class="card-header pb-0 text-left">
                <h4 class="font-weight-bolder">Sign Up</h4>
                <p class="mb-0">Enter your email and password to sign up</p>
              </div>
              <div class="card-body">
              <form method="POST" action="/sign-up">
                  <div class="mb-3">
                    <input type="email" name="email" class="form-control form-control-lg"placeholder="Email" aria-label="Email" aria-describedby="email-addon" required>
                  </div>
                  <div class="mb-3">
                     <input type="password" name="pass" class="form-control form-control-lg "placeholder="Password " aria-label="Password" aria-describedby="password-addon" required>
                  </div>
                  <div class="mb-3">
                    <input type="password" name="cpass" class="form-control form-control-lg" placeholder="Confirm Password" aria-label="Email" aria-describedby="email-addon" required>
                  </div>
                  <div class="mb-3">
                    <input type="text" name="checkpass" class="form-control form-control-lg"placeholder="Date of your Birth" aria-label=""  required>
                  </div>
                  <!-- <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="rememberMe">
                     <label class="form-check-label" for="rememberMe">Remember me</label>
                  </div> -->
                  <div class="text-center">
                      <button type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Sign up</button>
                  </div>
                </form>
              </div>
              <div class="card-footer text-center pt-0 px-lg-2 px-1">
                <p class="mb-4 text-sm mx-auto">
                  Don't have an account?
                  <a href="/sign-in" class="text-primary text-gradient font-weight-bold">Sign in</a>
                </p>
              </div>
            </div>
          </div>
          <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
            <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center">
              <img src="assets/img/shapes/pattern-lines.svg" alt="pattern-lines" class="position-absolute opacity-4 start-0">
              <div class="position-relative">
                <img class="max-width-500 w-100 position-relative z-index-2" src="assets/img/illustrations/chat.png">
              </div>
              <h4 class="mt-5 text-white font-weight-bolder">"Attention is the new currency"</h4>
              <p class="text-white">The more effortless the writing looks, the more effort the writer actually put into the process.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</body>

</html>