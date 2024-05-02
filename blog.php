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
    <title>TREZ Blogsite | Blog Page</title>
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

    ::-webkit-scrollbar {
  width: 5px;
}

/* Track */
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
  <body class="bg" id="refresh-section">
    <!-- to run = ctrl + l + o -->
    <!-- ! then enter -->

    <div >
      <?php include "./app/include/navbar_inc.php"; ?>

      <!-- hover search -->
      <!-- <div class="hover-search hidden">
        <h3>Trending now!</h3>
        <ul>
          <a href="./art.php" class="flexrow align-center">
            <img src="./assets/img/user.png" alt="" />
            <li>Art</li></a
          >
          <a href="./food.php" class="flexrow align-center">
            <img src="./assets/img/user.png" alt="" />
            <li>Food</li></a
          >
          <a href="./music.php" class="flexrow align-center">
            <img src="./assets/img/user.png" alt="" />
            <li>Music</li></a
          >
          <a href="./travel.php" class="flexrow align-center">
            <img src="./assets/img/user.png" alt="" />
            <li>Travel</li></a
          >
        </ul>
      </div> -->

    <div class="anim-to-top">

      <section class="flexcol align-center justify-between " style="margin-top: -3rem;">
        
        
        <div class="text-center mb-4">
          <a href="./create.php" class="text-center">
            <h4 style="width: 15rem; cursor: pointer; background: #4d4d4d;" class="text-center text-white rounded-pill px-2 py-1">+ Create a Post</h4>
          </a> 
        </div>
      </section>
      
      
      
      <div class="containerr" style="min-height: 56vh;">
        
        <div class="row mx-auto mb-5" style="margin-top: -3rem; max-width: 1400px; width:90%;">
          <?php
    
    foreach($query as $que) { ?>
            <div class="col-lg-6 col-md-12 col-xxl-4 d-flex flex-column justify-content-center align-items-center">
              <div class="card bg-light text-dark mt-5" style="border-radius: 1rem;">
                <div class="card-body" style="width: 25rem; height: 38rem;">
                  <!-- username -->
                  <div>
                    <a href="./profile.php?username=<?php echo $que['username']; ?>">
                      <h6 style="background: #44ac9d; color: beige; border-radius: 20px;" class="fw-bold card-username px-3 py-1 m-1 d-inline"><?php echo $que['username']; ?></h6>
                    </a>
                  </div>
                  <!-- title -->
                  <h4 class="card-title text-center mt-4 mb-3 fw-bold" style="color: #333"><?php echo $que['title']; ?></h4>
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
                    <textarea style="width: 22rem; height: 6.9rem; outline: none; border: none; background: none; resize: none; margin-left: .5rem; padding: .5rem .5rem;" class="text-center card-content"><?php echo $que['content']; ?></textarea>
                  </div>
                  <!-- read more -->
                  <a href="./read.php?id=<?php echo $que['id']; ?>" style="background: #44ac9d;" class="btn text-light mt-1 mx-1">Read Full <span class="text-light">&rarr;</span> </a>
                </div>
              </div>
            </div>
            <?php } ?>
          </div>
        </div>
        
    </div>
  </div>
    <section style="height: 10vh;"></section>
      <div class="mt-5 px-5" style="background: #edf6f5;">
      <div clas="container">
        <?php include "./app/include/footer.php"; ?>
      </div>
    </div>
    
  </body>
  <script src="./assets/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
  <script src="./assets/js/linkprf.js"></script>
  </html>
  