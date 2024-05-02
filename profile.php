<?php require "./logic.php"; ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- fav icon -->
    <link rel="shortcut icon" href="./assets/img/small_logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="./assets//bootstrap-5.1.3-dist/css/bootstrap.min.css" />
    <title>TREZ Blogsite | Profile</title>
    <!-- css external links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />

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
    ::-webkit-scrollbar-track {
      box-shadow: inset 0 0 5px grey; 
      border-radius: 10px;
    }
    
    /* Handle */
    ::-webkit-scrollbar-thumb {
      background: rgb(94, 126, 128); 
      border-radius: 1px;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
      background: #555; 
    }
  </style>
  <body  class="bg" >
    <!-- to run = ctrl + l + o -->
    <!-- ! then enter -->

    <div>
      <?php include "./app/include/navbar_inc.php"; ?>

      <div style="margin: 5rem 0;">
      <div class="row">
        </div>
        
        <div class="row anim-to-top mx-auto" style="margin-top: -2rem; max-width: 1400px; width:90%;">

          <div class="col-12 display-6 d-flex justify-center align-center py-4 fw-bold mx-auto text-center" style="background: #edf6f5; margin-top: -5rem; color: #4d4d4d; border-radius: 20px;">Profile</div>
        <?php

          foreach($query2 as $que) { ?>
            <div class="col-lg-6 col-md-12 col-xxl-4 d-flex flex-column justify-content-center align-items-center">
              <div class="card bg-light text-dark mt-5" style="border-radius: 1rem;">
                <div class="card-body" style="width: 25rem; height: 37rem;">
                <!-- username -->
                <div>
                  <a href="./profile.php?username=<?php echo $que['username']; ?>">
                    <h6 style="background: #44ac9d; color: beige; border-radius: 20px;" class="fw-bold card-username px-3 py-1 m-1 d-inline"><?php echo $que['username']; ?></h6>
                  </a>
                </div>
                  <!-- title -->
                  <h4 class="card-title text-center mt-4 fw-bold" style="color: #333"><?php echo $que['title']; ?></h4>
                  <!-- category -->
                  <a class="mx-auto d-flex justify-center text-center align-center" href="./categories.php?category=<?php echo $que['category']; ?>">
                    <p class="card-category text-center py-1 px-3" style="font-weight: bold; background: #545454; color: #fff; border-radius: 20px;"><?php echo $que['category']; ?></p>
                  </a>
                  <!-- image -->
                  <div class="card-img_url">
                    <img class="" style="width: 25rem; height: 14rem; object-fit: cover; margin-left: -1rem; margin-bottom: 1rem;" src="./upload/<?php echo $que['img_url']; ?>" alt="">
                  </div>
                  
                  <!-- content -->
                  <div class="">
                    <textarea style="width: 22.5rem; height: 7rem; overflow: none; outline: none; border: none; background: transparent; resize: none;" class="card-content mx-auto"><?php echo $que['content']; ?></textarea>
                  </div>
                  <!-- read more -->
                  <a style="background: #44ac9d;" href="./read.php?id=<?php echo $que['id']; ?>" class="btn text-light mt-1 mx-1">Read Full <span class="text-light">&rarr;</span> </a>
                </div>
              </div>
            </div>

        <?php } ?>
  </div>
</div>
          
      </main>
    </div>
    <script src="./assets/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
    <div class="mt-5 px-5" style="background: #edf6f5;">
      <div clas="container">
        <?php include "./app/include/footer.php"; ?>
      </div>
    </div>

  </body>
</html>
