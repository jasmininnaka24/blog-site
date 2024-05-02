<?php 
require 'logic.php';

function showAllData() {

  global $conn;

  $query = "SELECT * FROM categories";
  $result = mysqli_query($conn, $query);

  while($row = mysqli_fetch_assoc($result)){
    $category = $row['category'];
    echo "<option value='$category'>$category</option>";
  }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./assets/img/small_logo.png" type="image/x-icon" />

  <link rel="stylesheet" href="./assets/bootstrap-5.1.3-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/css/general_styling.css" />
    <link rel="stylesheet" href="./assets/css/navbar.css" />
  <title>TREZ Blogsite | Create Post</title>
  <style>
    .hidden{
      display: none;
    }
  </style>
</head>
<body>
  
  <div class="container">
    <div class="col-sm-6 mx-auto">
    <h3 class="added p-3 text-center rounded-3 hidden" style="background: #b2e2b2; color: #333; transition: all .5s ease-in;">Successfully Posted!</h3>
      <h1 class="text-center m-3" style="color: #555;">Create a post</h1>
      <form class="bg-light p-5 rounded-3 " style="border: #999 solid 2px;" method="post" autocomplete="off" enctype="multipart/form-data">
      <input type="text" name="username" placeholder="USERNAME" class="form-control text-dark" required>
      <input type="text" name="title" placeholder="TITLE" class="form-control text-center text-dark mt-5" required>
        <input type="file" name="img_url" class="form-control mt-3" accept=".jpg, .jpeg, .png" required>
        <div class="form-group">
          <label for="content" class="mt-4" style="font-weight: bold; color: #555;">CONTENT</label>
          <textarea style="resize: none;" placeholder="Post must only contain 200 words" name="content" id="content" class="form-control mt-2" rows="8" required></textarea><br>
        </div>
        <div class="form-group mb-4">
        <select required name="category" class="form-control">
          <option value="-- Select a category--">-- Select a category--</option>
            <?php
              showAllData();
            ?>
          </select>
        </div>
        <input type="text" name="password" class="form-control mb-3" required placeholder="Set a password only for this post for security purposes">
        <div class="mt-4 d-flex align-items-center justify-content-center">
          <button name="submit" class="btn text-light text-center" style="background: #555; width: 10rem; font-weight: 600;">Post</button>
        </div> 
      </form>
    </div>
  </div>
  <script src="./assets/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>

</body>
</html>