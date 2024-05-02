
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- fav icon -->
    <link rel="shortcut icon" href="./assets/img/small_logo.png" type="image/x-icon" />
    
    <title>TREZ Blogsite</title>
    <!-- css external links -->
      
    <link
      rel="stylesheet"
      href="./assets/bootstrap-5.1.3-dist/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <link rel="stylesheet" href="./assets/css/general_styling.css" />
    <link rel="stylesheet" href="./assets/css/navbar.css" />
    <link rel="stylesheet" href="./assets/css/signin_up.css" />
  </head>
  <style>
    *{
      overflow: auto;
    }
    .logo{
      width: 7rem;
    }
    .nav-link{
      margin-top: -1.7rem;
    }
    .seemores{
      color: #444;
    }
    .seemores:hover{
      color: #777;
      transition: all .5s;
    }
    .seemore{
      color: #555;
      background: #fff;
      transition: all .5s;
    }
    .seemore:hover{
      background: #555;
      color: #fff;
      transition: all .5s;
    }

  </style>
  <body  class="bg" >
    <!-- to run = ctrl + l + o -->
    <!-- ! then enter -->

      <div class="container flexrow justify-between header-box anim-to-bottom">
        <!-- left -->
        <section id="header-left">
          <a href="./home.php">

            <img src="./assets/img/huge_logo.png" alt="" class="logo">
          </a>
        </section>
        <!-- right -->
        <section id="header-right" class="flexrow">
          <!-- nav -->

          <div class="btns">
            <a href="./login.php">
              <div
              class="btn mx-1 px-2 pv1 rounded-pill show-modal-1 modal-btn-sign-in btn-width fw-bold"
              >
              Sign In
            </div>
          </a>
          <a href="./signup.php">
            <div
            class="btn bg-light-green mx-1 px-2 pv1 rounded-pill show-modal-1 modal-btn-sign-in btn-width fw-bold"
            >
            Sign Up
          </div>
        </a>
          </div>
        </section>
      </div>

      <input type="checkbox" class="checkbox-open" id="open" hidden />
      <button class="bg-none anim-to-bottom border-none">
        <label for="open">
          <img src="./assets/img/menu.png" id="nav-menu" alt="" />
        </label>
      </button>

      <section id="header-pop" class="flexcol text-center">
        <div>
          <div class="btns d-flex flexcol gap2">
            <a href="./login.php">
              <div
              class="btn bg-light-green mx-1 ph4 pv1 rounded-pill showw-modal-1 modal-btn-sign-inn fw-bold"
              >
              Sign In
            </div>
          </a>
            <a href="./signup.php">
              <div
              class="btn bg-semi-light mx-1 ph4 pv1 rounded-pill showw-modal-2 modal-btn-sign-upp fw-bold"
              >
              Sign Up
            </div>
          </a>
          </div>
        </div>
      </section>


      <div class="container">

      <div
        class="row d-flex align-items-center px-3 justify-content-center" style="margin-top: -5rem;"
      >
        <section class="col-lg-6 col-md-8 col-sm-10 col-12 anim-to-right">
          <div>
            <img src="./assets/img/huge_logo.png" style="width: 100%;" alt="" class="header-brand" />
          </div>
          <p class="text-lg-start text-center mb-5 mx-auto" style="margin-top: -1rem; width: 80%;">
            Trez is the hub for people to discover, create and share their fuzz around the world. 
          </p>
        </section>

        <section class="col-lg-6 d-flex flex-column align-items-center justify-content-center mx-auto anim-to-left">
          <div>
            <ul class="header-categories-list">
              <a href="./login.php"><li class="seemore text-center">Art</li></a>
              <a href="./login.php"><li class="seemore text-center">Sci-Tech</li></a>
              <a href="./login.php"><li class="seemore text-center">Food</li></a>
              <a href="./login.php"><li class="seemore text-center">Wild Life</li></a>
              <a href="./login.php"><li class="seemore text-center">Music</li></a>
              <a href="./login.php"><li class="seemore text-center">Travel</li></a>
            </ul>
            <a href="./login.php" class="mt-5 text-end"><p class="lead fst-italic fw-bold seemores">See more...</p></a>
          </div>
     
        </section>

        <div class="anim-to-top-slow d-flex flex-column justify-content-center align-items-center"
          id="down-arrow" style="margin-top: 1rem;"
        >
            <a href="#howto">
              <img src="./assets/img/down-arrow.png" alt="down arrow" />
            </a>
          </div>
        </div>
        
        
        <div class="" style="margin-top: 7rem;">
        <section class="row" id="howto">
        <div class="col-10 mx-auto lead fw-bold text-center" style="color: #333;">
          Here's on how to use
        </div>
        <div class="mt-3 col-lg-6 col-md-8 col-sm-10 col-12 d-flex align-items-center justify-content-center mx-auto" style="height: 55vh">
            <iframe src="https://drive.google.com/file/d/1AlGsW4LfpV_FQP2UFyYJgfuBNKA3HU5s/preview" controls muted="true" style="border-radius: 20px; width: 100%; height: 100%" id="vid"></iframe>
        </div>
      </section>

    </div>
    </div>
        
        
      </div>
    </div>
        <!-- footer -->
  <div class="mt-5 px-5" style="background: #edf6f5;">
      <div clas="container">
        <!-- footer -->
    <footer class="d-sm-flex align-items-center justify-content-between mx-auto fw-bold py-3" style="color: #444;">
              <div class="d-flex justify-content-center align-items-center gap-3">
                <a href="./home.php" class="text-center">
                  <div class="text-center" style="color: #444;" class="fw-bold">
                    Contact with us
                  </div>
                </a>
                <div class="d-flex justify-content-center align-items-center gap-1">
                  <a style="font-size: 1.2rem;" href="./home.php">
                    <i class="fa-brands fa-square-twitter"></i>
                  </a>
                  <a style="font-size: 1.2rem;" href="./home.php">
                    <i class="fa-brands fa-facebook"></i>
                  </a>
                  <a style="font-size: 1.2rem;" href="./home.php">
                    <i class="fa-brands fa-square-instagram"></i>
                  </a>
                </div>
              </div>
              <a class="text-center" style="color: #444; margin-right: -2rem;" href="./home.php">
                <div>Trez</div>
              </a>
              <a href="./home.php" class="text-center" style="color: #444;">
                <div>http://trez-blog.epizy.com/home.php</div>
              </a>
    </footer>

      </div>
    </div>

    <div class="overlay hidden"></div>
    <script src="./assets/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
    <script src="./assets/js/home.js"></script>
  </body>

</html>
