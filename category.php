<?php require "./another_con.php"; 

if(isset($_REQUEST['category'])){

  $category = $_REQUEST["category"];

  $query = "SELECT category FROM categories WHERE category = '$category'";
  $result = mysqli_query($conn2, $query);
}

function showAllCat() {
  global $conn2;

  $query = "SELECT * FROM categories";
  $result = mysqli_query($conn2, $query);

  while($row = mysqli_fetch_assoc($result)){
    $category = $row['category'];

    echo "
    <div class='col-lg-4 col-md-4 col-sm-6 col-xxl-4 d-flex flex-column justify-content-center align-items-center'>
      <a class='card d-flex align-center justify-center col-12 mt-2 py-3' style='background: #edf6f5; height: 6.5rem; color: #4d4d4d; border-radius: 1rem;' href='./categories.php?category=$category'>
        <div class=''>
          <!-- category -->
          <p class='card-category text-center fw-bold'>$category</p>
        </div>
      </a>
      </div>";
      
  }
}
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <title>TREZ Blogsite | Blog Page</title>
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
    .cathov:hover{
      background: #555;
      color: #edf6f5;
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

      <div class="container anim-to-top" style="height: 100%; margin-top: -2rem;">

        <div class="row">
          <div class="col-12 display-6 d-flex justify-center align-center py-4 fw-bold mx-auto text-center" style="background: #edf6f5; margin-top: -3rem; color: #4d4d4d; border-radius: 20px;">Categories</div>
        </div>
        <div class="row mx-auto mt-3">
          
            <?php showAllCat(); ?>
        </div>
        
    </div>
    <section style="height: 35vh;"></section>
    <script src="./assets/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
  <div class="mt-5 px-5" style="background: #edf6f5;">
      <div clas="container">
        <?php include "./app/include/footer.php"; ?>
      </div>
    </div>

  </body>
</html>
