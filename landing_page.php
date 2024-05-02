<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- fav icon -->
    <link rel="shortcut icon" href="./assets/img/small_logo.png" type="image/x-icon" />
    <title>TREZ Blogsite | Home Page</title>
    <!-- css external links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <link rel="stylesheet" href="./assets//bootstrap-5.1.3-dist/css/bootstrap.min.css" />

    <link rel="stylesheet" href="./assets/css/general_styling.css" />
    <link rel="stylesheet" href="./assets/css/navbar.css" />
  </head>
  <style>
    
    #down-arrow{
      cursor: pointer;
    }
    #down-arrow img{
      position: relative;
      width: 3rem;
      height: 1.2rem;
      margin: 0 auto;
      transition: all 0.5s ease;
    }
    #down-arrow:hover img{
      margin-top: 1rem;
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
    .seemores{
      color: #444;
    }
    .seemores:hover{
      color: #777;
      transition: all .5s;
    }
    @media (max-width: 600px) {
      #vid{
        width: 400px;
      }
    }
    @media (max-width: 430px) {
      #vid{
        width: 300px;
      }
    }
  </style>
  <body class="bg">
    <!-- to run = ctrl + l + o -->
    <!-- ! then enter -->

      <?php include "./app/include/navbar_inc.php"; ?>

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
              <a href="./category.php"><li class="seemore text-center">Art</li></a>
              <a href="./category.php"><li class="seemore text-center">Sci-Tech</li></a>
              <a href="./category.php"><li class="seemore text-center">Food</li></a>
              <a href="./category.php"><li class="seemore text-center">Wild Life</li></a>
              <a href="./category.php"><li class="seemore text-center">Music</li></a>
              <a href="./category.php"><li class="seemore text-center">Travel</li></a>
            </ul>
            <a href="./category.php" class="mt-5 text-end"><p class="lead fst-italic fw-bold seemores">See more...</p></a>
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
    
  <div class="mt-5 px-5" style="background: #edf6f5;">
      <div clas="container">
        <?php include "./app/include/footer.php"; ?>
      </div>
    </div>
  </body>
</html>
