<?php require "./logic.php"; 
  global $uname;
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- fav icon -->
    <link rel="shortcut icon" href="./assets/img/small_logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="./assets//bootstrap-5.1.3-dist/css/bootstrap.min.css" />
    <title>TREZ Blogsite | Show</title>
    <!-- css external links -->
    <link rel="stylesheet" href="./assets/css/general_styling.css" />
    <link rel="stylesheet" href="./assets/css/navbar.css" />
    <link rel="stylesheet" href="./assets/css/blog.css" />
  </head>
  <style>
    @media (max-width: 450px) {
      .card-img_url img{
       width: 15rem;
      }
    }
  </style>
  <body  class="bg" style="height: 100vh;">
    <!-- to run = ctrl + l + o -->
    <!-- ! then enter -->

    <div>
      <?php include "./app/include/navbar_inc.php"; ?>

      <div class="containerr">
    <div class="container">

<div class="row mx-auto" style="margin-top: -3rem; max-width: 1400px; width:90%;">
  <?php

    foreach($query9 as $que) { ?>
    <div class="col-lg-6 col-md-12 col-xxl-4 d-flex flex-column justify-content-center align-items-center">
      <div class="card bg-light text-dark mt-5" style="border-radius: 1rem;">
        <div class="card-body" style="width: 25rem; height: 36rem;">
        <!-- username -->
        <div>
          <a href="./profile.php?username=<?php echo $que['username']; ?>">
            <h6 class="card-username">Author: <span style="font-weight: bold;"><?php echo $que['username']; ?></span></h6>
          </a>
        </div>
          <!-- title -->
          <h4 class="card-title text-center mt-4 fw-bold"><?php echo $que['title']; ?></h4>
          <!-- category -->
          <p class="card-category text-center" style="font-weight: 500;">~ <?php echo $que['category']; ?> ~</p>
          <!-- image -->
          <div class="card-img_url">
            <img class="" style="width: 25rem; height: 15rem; object-fit: cover; margin-left: -1rem; margin-bottom: 1rem;" src="./upload/<?php echo $que['img_url']; ?>" alt="">
          </div>
          
          <!-- content -->
          <div class="">
            <textarea style="width: 22.5rem; height: 7.5rem; overflow: none; outline: none; border: none; background: transparent; resize: none;" class="card-content mx-auto"><?php echo $que['content']; ?></textarea>
          </div>
          <!-- read more -->
          <a href="./read.php?id=<?php echo $que['id']; ?>" class="btn btn-dark text-light mx-1">Read Full <span class="text-light">&rarr;</span> </a>
        </div>
      </div>
    </div>
    <?php } ?>
  </div>
</div>
          
      </main>
    </div>
    <script src="./assets/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
    <div class="mt-5" style="background: #edf6f5;">
      <div clas="container">
        <?php include "./app/include/footer.php"; ?>
      </div>
    </div>
  </body>
</html>
