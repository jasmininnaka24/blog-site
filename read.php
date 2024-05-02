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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />

    <title>TREZ Blogsite | Read</title>
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

        <div class="containerr anim-to-top" style="margin-top: 5rem;">
        <div class="row mx-auto mb-5" style="margin-top: -3rem; max-width: 1400px; width:90%;">
        <?php foreach($query as $que ) { ?>
          <div class="col-lg-8 col-md-10 col-12 d-flex flex-column mx-auto bg-light p-5" style="border-radius: .8rem;">
            <a href="./profile.php?username=<?php echo $que['username']; ?>">
              <h6 style="background: #44ac9d; color: beige; border-radius: 20px; font-size: 25px; " class="fw-bold card-username px-4 py-1 m-1 d-inline"><?php echo $que['username']; ?></h6>
          </a>
            <h1 class="my-4 text-center fw-bold mt-5 mb-5" style="font-size: 30px; color: #333""><?php echo $que['title']; ?></h1>
            <img style="width: 70%; height: 20rem; object-fit: cover; border-radius: .8rem; box-shadow: 3px 5px 10px #555;" src="./upload/<?php echo $que['img_url']; ?>" class="mx-auto" alt="">
            <a class="mx-auto d-flex justify-center text-center align-center mt-5" href="./categories.php?category=<?php echo $que['category']; ?>">
              <p class="card-category text-center py-1 px-3" style="font-weight: bold; background: #545454; color: #fff; border-radius: 20px;"><?php echo $que['category']; ?> Blog</p>
            </a>
            <p style="min width: 90%; font-size: 18px" class="text-start mx-auto" style="text-align: justify;"><?php echo $que['content']; ?></p>
            <!-- edit & delete buttons -->
            <div class="d-flex align-items-center justify-center mt-5 mb-5">
              <a style="width: 15rem; background: #edf6f5; border: #555 solid 1px;" href="./validation.php?id=<?php echo $que['id']; ?>" class="btn text-dark mx-1 py-2">Edit</a><br>
              <a href="./delete.php?id=<?php echo $que['id']; ?>"></a>
              <a style="width: 15rem; background: #4d4d4d;" href="./delete.php?id=<?php echo $que['id']; ?>" class="btn text-light mx-1 py-2">Delete</a><br>
              <a href="./delete.php?id=<?php echo $que['id']; ?>"></a>
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
