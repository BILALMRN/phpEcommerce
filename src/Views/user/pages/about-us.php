<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $email = $_POST['email'];
  if ( !isset($email)) {
    echo 'Invalid input. Please check your details and try again.';
    exit;
  }
  file_put_contents('email.log', $email . PHP_EOL, FILE_APPEND);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <?php include_once  'component/head.php'; ?>

  <title>
    shop
  </title>

</head>

<body class="about-us">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg blur border-radius-sm top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
    <div class="container-fluid px-1">
      <a class="navbar-brand font-weight-bolder ms-lg-0 " href="/">
        shop
      </a>
      <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon mt-2">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </span>
      </button>
      <div class="collapse navbar-collapse" id="navigation">
        <ul class="navbar-nav ms-xl-auto">

          <li class="nav-item">
            <a class="nav-link d-flex align-items-center me-2 text-dark font-weight-bold" href="/sign-in">
              <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class=" text-dark  me-1">
                <path fill-rule="evenodd" d="M15.75 1.5a6.75 6.75 0 00-6.651 7.906c.067.39-.032.717-.221.906l-6.5 6.499a3 3 0 00-.878 2.121v2.818c0 .414.336.75.75.75H6a.75.75 0 00.75-.75v-1.5h1.5A.75.75 0 009 19.5V18h1.5a.75.75 0 00.53-.22l2.658-2.658c.19-.189.517-.288.906-.22A6.75 6.75 0 1015.75 1.5zm0 3a.75.75 0 000 1.5A2.25 2.25 0 0118 8.25a.75.75 0 001.5 0 3.75 3.75 0 00-3.75-3.75z" clip-rule="evenodd" />
              </svg>
              Sign In
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center me-2 text-dark font-weight-bold" href="/sign-up">
              <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="opacity-6 me-1">
                <path fill-rule="evenodd" d="M12 1.5a5.25 5.25 0 00-5.25 5.25v3a3 3 0 00-3 3v6.75a3 3 0 003 3h10.5a3 3 0 003-3v-6.75a3 3 0 00-3-3v-3c0-2.9-2.35-5.25-5.25-5.25zm3.75 8.25v-3a3.75 3.75 0 10-7.5 0v3h7.5z" clip-rule="evenodd" />
              </svg>
              Sign Up
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center me-2 text-dark font-weight-bold" href="/contact-us">
              <span class="ps-3">Contact Us</span>
            </a>
          </li>
        </ul>

      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <!-- -------- START HEADER 7 w/ text and video ------- -->
  <header class="bg-gradient-dark">
    <div class="page-header min-vh-75" style="background-image: url('assets/img/office-dark.jpg');">
      <span class="mask bg-gradient-info opacity-8"></span>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 text-center mx-auto my-auto">
            <h1 class="text-white">Work with an amazing design</h1>
            <p class="lead mb-4 text-white opacity-8">We’re constantly trying to express ourselves and actualize our dreams. If you have the opportunity to play this game</p>
            <a href="/admin" class="btn bg-white text-dark">Create Account</a>
            <h6 class="text-white mb-2 mt-5">Find us on</h6>
            <div class="d-flex justify-content-center">
              <a href="javascript:;"><i class="fab fa-facebook text-lg text-white me-4"></i></a>
              <a href="javascript:;"><i class="fab fa-instagram text-lg text-white me-4"></i></a>
              <a href="javascript:;"><i class="fab fa-twitter text-lg text-white me-4"></i></a>
              <a href="javascript:;"><i class="fab fa-google-plus text-lg text-white"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="position-absolute w-100 z-index-1 bottom-0">
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 40" preserveAspectRatio="none" shape-rendering="auto">
          <defs>
            <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
          </defs>
          <g class="moving-waves">
            <use xlink:href="#gentle-wave" x="48" y="-1" fill="rgba(255,255,255,0.40" />
            <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.35)" />
            <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.25)" />
            <use xlink:href="#gentle-wave" x="48" y="8" fill="rgba(255,255,255,0.20)" />
            <use xlink:href="#gentle-wave" x="48" y="13" fill="rgba(255,255,255,0.15)" />
            <use xlink:href="#gentle-wave" x="48" y="16" fill="rgba(255,255,255,1" />
          </g>
        </svg>
      </div>
    </div>
  </header>
  <!-- -------- END HEADER 7 w/ text and video ------- -->
  <!-- Section with four info areas left & one card right with image and waves -->
  <section class="py-7">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="row justify-content-start">
            <div class="col-md-6">
              <div class="info">
                <div class="icon icon-shape text-center">
                  <svg class="text-info" width="25px" height="25px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <title>spaceship</title>
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <g transform="translate(-1720.000000, -592.000000)" fill="#FFFFFF" fill-rule="nonzero">
                        <g transform="translate(1716.000000, 291.000000)">
                          <g transform="translate(4.000000, 301.000000)">
                            <path class="color-foreground" d="M39.3,0.706666667 C38.9660984,0.370464027 38.5048767,0.192278529 38.0316667,0.216666667 C14.6516667,1.43666667 6.015,22.2633333 5.93166667,22.4733333 C5.68236407,23.0926189 5.82664679,23.8009159 6.29833333,24.2733333 L15.7266667,33.7016667 C16.2013871,34.1756798 16.9140329,34.3188658 17.535,34.065 C17.7433333,33.98 38.4583333,25.2466667 39.7816667,1.97666667 C39.8087196,1.50414529 39.6335979,1.04240574 39.3,0.706666667 Z M25.69,19.0233333 C24.7367525,19.9768687 23.3029475,20.2622391 22.0572426,19.7463614 C20.8115377,19.2304837 19.9992882,18.0149658 19.9992882,16.6666667 C19.9992882,15.3183676 20.8115377,14.1028496 22.0572426,13.5869719 C23.3029475,13.0710943 24.7367525,13.3564646 25.69,14.31 C26.9912731,15.6116662 26.9912731,17.7216672 25.69,19.0233333 L25.69,19.0233333 Z"></path>
                            <path class="color-foreground" d="M1.855,31.4066667 C3.05106558,30.2024182 4.79973884,29.7296005 6.43969145,30.1670277 C8.07964407,30.6044549 9.36054508,31.8853559 9.7979723,33.5253085 C10.2353995,35.1652612 9.76258177,36.9139344 8.55833333,38.11 C6.70666667,39.9616667 0,40 0,40 C0,40 0,33.2566667 1.855,31.4066667 Z"></path>
                            <path class="color-background" d="M17.2616667,3.90166667 C12.4943643,3.07192755 7.62174065,4.61673894 4.20333333,8.04166667 C3.31200265,8.94126033 2.53706177,9.94913142 1.89666667,11.0416667 C1.5109569,11.6966059 1.61721591,12.5295394 2.155,13.0666667 L5.47,16.3833333 C8.55036617,11.4946947 12.5559074,7.25476565 17.2616667,3.90166667 L17.2616667,3.90166667 Z" opacity="0.598539807"></path>
                            <path class="color-background" d="M36.0983333,22.7383333 C36.9280725,27.5056357 35.3832611,32.3782594 31.9583333,35.7966667 C31.0587397,36.6879974 30.0508686,37.4629382 28.9583333,38.1033333 C28.3033941,38.4890431 27.4704606,38.3827841 26.9333333,37.845 L23.6166667,34.53 C28.5053053,31.4496338 32.7452344,27.4440926 36.0983333,22.7383333 L36.0983333,22.7383333 Z" id="color-3" opacity="0.598539807"></path>
                          </g>
                        </g>
                      </g>
                    </g>
                  </svg>
                </div>
                <h5>Fully integrated</h5>
                <p>We get insulted by others, lose trust for those We get back freezes</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info">
                <div class="icon icon-shape text-center">
                  <svg class="text-info" width="43px" height="20px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <title>credit-card</title>
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                        <g transform="translate(1716.000000, 291.000000)">
                          <g id="credit-card" transform="translate(453.000000, 454.000000)">
                            <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743">
                            </path>
                            <path class="color-foreground" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                          </g>
                        </g>
                      </g>
                    </g>
                  </svg>
                </div>
                <h5>Payments functionality</h5>
                <p>We get insulted by others, lose trust for those We get back freezes</p>
              </div>
            </div>
          </div>
          <div class="row justify-content-start">
            <div class="col-md-6">
              <div class="info">
                <div class="icon icon-shape text-center">
                  <svg class="text-info" width="25px" height="25px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <title>box-3d-50</title>
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <g transform="translate(-2319.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                        <g transform="translate(1716.000000, 291.000000)">
                          <g id="box-3d-50" transform="translate(603.000000, 0.000000)">
                            <path class="color-foreground" d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z"></path>
                            <path class="color-background" d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z" opacity="0.7"></path>
                            <path class="color-background" d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z" opacity="0.7"></path>
                          </g>
                        </g>
                      </g>
                    </g>
                  </svg>
                </div>
                <h5>Prebuilt components</h5>
                <p>We get insulted by others, lose trust for those We get back freezes</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info">
                <div class="icon icon-shape text-center">
                  <svg class="text-info" width="25px" height="25px" viewBox="0 0 46 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <title>customer-support</title>
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <g transform="translate(-1717.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                        <g transform="translate(1716.000000, 291.000000)">
                          <g transform="translate(1.000000, 0.000000)">
                            <path class="color-background" d="M45,0 L26,0 C25.447,0 25,0.447 25,1 L25,20 C25,20.379 25.214,20.725 25.553,20.895 C25.694,20.965 25.848,21 26,21 C26.212,21 26.424,20.933 26.6,20.8 L34.333,15 L45,15 C45.553,15 46,14.553 46,14 L46,1 C46,0.447 45.553,0 45,0 Z" opacity="0.59858631"></path>
                            <path class="color-foreground" d="M22.883,32.86 C20.761,32.012 17.324,31 13,31 C8.676,31 5.239,32.012 3.116,32.86 C1.224,33.619 0,35.438 0,37.494 L0,41 C0,41.553 0.447,42 1,42 L25,42 C25.553,42 26,41.553 26,41 L26,37.494 C26,35.438 24.776,33.619 22.883,32.86 Z"></path>
                            <path class="color-foreground" d="M13,28 C17.432,28 21,22.529 21,18 C21,13.589 17.411,10 13,10 C8.589,10 5,13.589 5,18 C5,22.529 8.568,28 13,28 Z"></path>
                          </g>
                        </g>
                      </g>
                    </g>
                  </svg>
                </div>
                <h5>Improved platform</h5>
                <p>We get insulted by others, lose trust for those We get back freezes</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 ms-auto mt-lg-0 mt-4">
          <div class="card shadow-lg">
            <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
              <div class="d-block blur-shadow-image">
                <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/funny.jpg" alt="img-blur-shadow" class="img-fluid shadow rounded-3">
              </div>
              <div class="colored-shadow" style="background-image: url(&quot;https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/funny.jpg&quot;);"></div>
            </div>
            <div class="card-body">
              <a href="javascript:;">
                <h5 class="mt-3">
                  Get insights on Search
                </h5>
              </a>
              <p>
                Website visitors today demand a frictionless user expericence — especially when using search. Because of the hight standards.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END Section with four info areas left & one card right with image and waves -->
  <!-- -------- START Features w/ pattern background & stats & rocket -------- -->
  <section class="pt-sm-8 pb-5 position-relative bg-gradient-dark">
    <div class="position-absolute w-100 z-inde-1 top-0 mt-n3">
      <svg width="100%" viewBox="0 -2 1920 157" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <title>wave-down</title>
        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <g fill="#FFFFFF" fill-rule="nonzero">
            <g id="wave-down">
              <path d="M0,60.8320331 C299.333333,115.127115 618.333333,111.165365 959,47.8320321 C1299.66667,-15.5013009 1620.66667,-15.2062179 1920,47.8320331 L1920,156.389409 L0,156.389409 L0,60.8320331 Z" id="Path-Copy-2" transform="translate(960.000000, 78.416017) rotate(180.000000) translate(-960.000000, -78.416017) "></path>
            </g>
          </g>
        </g>
      </svg>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 text-start mb-5 mt-5">
          <h3 class="text-white z-index-1 position-relative">The Executive Team</h3>
          <p class="text-white opacity-8 mb-0">There’s nothing I really wanted to do in life that I wasn’t able to get good at. That’s my skill.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-12">
          <div class="card card-profile overflow-hidden">
            <div class="row">
              <div class="col-lg-4 col-md-6 col-12 pe-lg-0">
                <a href="javascript:;">
                  <div class="p-3 pe-md-0">
                    <img class="w-100 border-radius-md" height="200px" src="assets/img/p1.png" alt="image">
                  </div>
                </a>
              </div>
              <!-- nabil  -->
              <div class="col-lg-8 col-md-6 col-12 ps-lg-0 my-auto">
                <div class="card-body">
                  <h5 class="mb-0">Nabil Boussalham</h5>
                  <h6 class="text-info">Programmer</h6>
                  <p class="mb-0">Etudiant en ESTSB 2eme ane en DUT.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-12">
          <div class="card card-profile mt-lg-0 mt-5 overflow-hidden">
            <div class="row">
              <div class="col-lg-4 col-md-6 col-12 pe-lg-0">
                <a href="javascript:;">
                  <div class="p-3 pe-md-0 ">
                    <img class="w-100 border-radius-md" height="200px" src="assets/img/p2.jpg" alt="image">
                  </div>
                </a>
              </div>
              <!-- bilal   -->
              <div class="col-lg-8 col-md-6 col-12 ps-lg-0 my-auto">
                <div class="card-body">
                  <h5 class="mb-0">Bilal Marin</h5>
                  <h6 class="text-info">Programmer</h6>
                  <p>Etudiant en ESTSB 2eme ane en DUT.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br>
      <br>
  </section>
  <!-- -------- END Features w/ pattern background & stats & rocket -------- -->
  <section class="pt-2 pb-6 bg-gray-100" id="count-stats">
    <br>
    <br>

    <div class="container">

      <div class="row justify-content-center text-center">
        <div class="col-md-3">
          <h1 class="text-gradient text-info" id="state1" countTo="5234">2+</h1>
          <h5>Project Shop</h5>
          <p>Of “high-performing” level are led by a certified project shop</p>
        </div>
        <div class="col-md-3">
          <h1 class="text-gradient text-info"><span id="state2" countTo="3400">4+</span></h1>
          <h5>user</h5>
          <p>That meets quality standards required by our users</p>
        </div>
        <div class="col-md-3">
          <h1 class="text-gradient text-info"><span id="state3" countTo="24">24</span>/7</h1>
          <h5>Support</h5>
          <p>Actively engage team members that finishes on time</p>
        </div>
      </div>
    </div>
  </section>
  <!-- -------- START PRE-FOOTER 1 w/ SUBSCRIBE BUTTON AND IMAGE ------- -->
  <section class="my-5 pt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6 m-auto">
          <h4>Be the first to see the news</h4>
          <p class="mb-4">
            Your company may not be in the software business,
            but eventually, a software company will be in your business.
          </p>
          <form action="/about-us" method="POST">
            <div class="row">
              <div class="col-8">
                <div class="input-group">
                  <input type="email" name="email" class="form-control mb-sm-0" placeholder="Email Here..." required>
                </div>
              </div>
              <div class="col-4 ps-0">
                <button type="submit" class="btn bg-gradient-info mb-0 h-100 position-relative z-index-2">Subscribe</button>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-5 ms-auto">
          <div class="position-relative">
            <img class="max-width-50 w-100 position-relative z-index-2" src="assets/img/illustrations/sign-up.png" alt="image">
          </div>
        </div>
      </div>
    </div>
  </section>


  <?php include_once  'component/footer.php'; ?>


  <script src="assets/js/soft-design-system.min.js?v=1.0.9" type="text/javascript"></script>
  
 
</body>

</html>