<?php 
require 'logic.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./assets/img/small_logo.png" type="image/x-icon" />
  <link rel="stylesheet" href="./assets/bootstrap-5.1.3-dist/css/bootstrap.min.css">
  <title>TREZ Blogsite | Edit Post</title>
  <style>
    .hidden{
      display: none;
    }
  </style>
</head>
<body>
  
  <div class="container mb-5">
    <div class="col-sm-6 mx-auto mt-5">
    <h3 class="added p-3 text-center rounded-3 hidden" style="background: #b2e2b2; color: #333; transition: all .5s ease-in;">Successfully added!</h3>
      <h1 class="text-center my-3" style="color: #555;">Edit a post</h1>

    <?php
      foreach($query as $que){ ?>
      
      <form class="bg-light p-5 rounded-3" style="border: #999 solid 2px;" method="POST" autocomplete="off" enctype="multipart/form-data">

      <input type="text" hidden name="id" value="<?php echo $que['id'] ?>">
      <label for="title" style="font-size: 20px; font-weight: 600; color: #555;">Title</label>
      <input type="text" id="title" name="title" placeholder="TITLE" class="form-control text-center text-dark mt-1" value="<?php echo $que['title'] ?>" >

      <input type="file" name="img_url" class="form-control mt-3" required accept=".jpg, .jpeg, .png" value="<?php echo $que['img_url'] ?>" >
      
      <div class="form-group">
          <label for="content" class="mt-4" style="font-weight: bold; color: #555;">CONTENT</label>
          <textarea  name="content" id="content" class="form-control mt-2" rows="8" ><?php echo $que['content'] ?></textarea><br>
      </div>

        <!-- <div class="form-group mb-4">
          <select hidden name="category" id="" class="form-control" required>
            <option value=""></option>
            <option value="Food">Food</option>
            <option value="Travel">Travel</option>
            <option value="Health and Fitness">Health and Fitness</option>
            <option value="Lifestyle">Lifestyle</option>
            <option value="Fashion and Beauty">Fashion and Beauty</option>
            <option value="Science">Science</option>
            <option value="Horror or Thriller">Horror or Thriller</option>
            <option value="Comedy">Comedy</option>
            <option value="Photography">Photography</option>
            <option value="Personal">Personal</option>
            <option value="DIY Crafts">DIY Crafts</option>
            <option value="Parenting">Parenting</option>
            <option value="Music">Music</option>
            <option value="Business">Business</option>
            <option value="Arts and Designs">Arts and Designs</option>
            <option value="Book and Writing">Book and Writing</option>
            <option value="Personal Finance">Personal Finance</option>
            <option value="Interior Design">Interior Design</option>
            <option value="Sports">Sports</option>
            <option value="News">News</option>
            <option value="Movie or Series">Movie or Series</option>
            <option value="Religion">Religion</option>
            <option value="Politics">Politics</option>
            <option value="Wild Life">Wild Life</option>
          </select>
        </div> -->
        
        <div class="mt-4 d-flex align-items-center justify-content-center">
          <button name="update" class="btn text-light text-center" style="background: #555; width: 10rem; font-weight: 600;">Update</button>
        </div>     
      </form>
    </div>


    <?php  } ?>
  </div>
  <script src="./assets/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>

</body>
</html>