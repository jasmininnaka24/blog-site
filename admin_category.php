<?php require 'another_con.php';

function showAllData() {
  global $conn2;

  $query = "SELECT * FROM categories";
  $result = mysqli_query($conn2, $query);

  while($row = mysqli_fetch_assoc($result)){
    $category = $row['category'];
    echo "<option value='$category'>$category</option>";
  }
}

function deleteRow() {
  global $conn2;

  $category = $_POST['category'];

    $query = "DELETE FROM categories WHERE category = '$category'";
    $result = mysqli_query($conn2, $query);

    
  
}

  if(isset($_REQUEST['add_category'])){
    $category_name = trim($_REQUEST['category_name']);
    
  
      $query = "INSERT INTO categories(category) VALUES('$category_name')";
      $result = mysqli_query($conn2, $query);

      echo
      "
      <script>
      setTimeout(() => {
        document.querySelector('.added').classList.remove('hidden');
      }, 1000)
      setTimeout(() => {
        document.querySelector('.added').classList.add('hidden');
      }, 3000)
      </script>
      ";
    
  }

  if(isset($_POST['delete'])){

    deleteRow();
    echo
      "
      <script>
      setTimeout(() => {
        document.querySelector('.deleted').classList.remove('hidden');
      }, 1000)
      setTimeout(() => {
        document.querySelector('.deleted').classList.add('hidden');
      }, 3000)
      </script>
      ";
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/bootstrap-5.1.3-dist/css/bootstrap.min.css">
  <title>TREZ Blogsite | Admin Page</title>
    <link rel="stylesheet" href="./assets/css/general_styling.css" />
  <link rel="stylesheet" href="./assets/css/navbar.css" />
  <link rel="stylesheet" href="./assets/css/blog.css" />
  <style>
    .hidden{
      display: none;
    }
    .containerrr{
      max-width: 1400px; 
      width:90%;
      margin: 0 auto;
      padding: 3rem 0;
    }
  </style>

</head>
<body class="bg" >
    
    
  <div class="container">
    <nav class="flexrow justify-between anim-to-bottom">
      <h4 style="font-weight: 600; font-size: 30px; color: #333;">Admin</h4>
      <ul class="flexrow gap-4">
        <a href="./home.php">
          <li class="text-dark ph2 pv1 bg-light btn-radius" style="font-weight: 600; color: #555;">Logout</li>
        </a>
      </ul>
    </nav>
    
    <h1 class="text-center mt-5" style="color: #444;">Applying Changes</h1>
 
    <div class="anim-to-top">

      <h3 class="added hidden col-lg-4 col-md-8 col-12 mx-auto  p-3 text-center rounded-3 " style="background: #b2e2b2; color: #333; transition: all .5s ease-in; margin-top: 2rem;">Successfully Added!</h3>
      <h3 class="deleted hidden col-lg-4 col-md-8 col-12 mx-auto mt-4 p-3 text-center rounded-3 bg-danger" style="color: #fff; transition: all .5s ease-in; margin-top: 2rem;">Successfully Deleted!</h3>
    <div class="container">
    <div class="d-md-flex flex-column justify-content-between align-items-center mt-5">
      <form method="POST"  class="col-lg-5 col-md-6 col-sm-8 col-12 mb-4 p-5 mx-auto add_cat" style="background: white; box-shadow: 0px 3px 20px #cfcdcd; border-radius: 10px;">
        <input type="text" name="category_name" placeholder="Enter Category Name" class="form-control mx-auto mb-3" required>
        <div class="d-flex align-items-center justify-center mt-4">
          <button name="add_category" style="width: 12rem;" class="btn btn-success ">Add Category</button>
        </div>
      </form>
      
      
      <form method="POST" class="mx-auto col-lg-5 col-md-6 col-sm-8 col-12 p-5 del_cat" style="background: white; box-shadow: 0px 3px 20px #cfcdcd; border-radius: 10px;">
        
        <select name="category" class="form-control mx-auto">
          <option value="--Select a Category--">--Select a Category--</option>
          <?php
              showAllData();
              ?>
        </select>
        <br>
        <div class="d-flex align-items-center justify-center">
            <button name="delete" style="width: 12rem;" class="btn btn-danger ">Delete Category</button>
          </div>
        </form>
    </div>
        
      </div>
    </div>
    
  <script src="./assets/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>

</body>
</html>