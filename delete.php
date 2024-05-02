<?php include "./logic.php"; 
global $uname;
if(isset($_REQUEST['val_del'])){

  
  $id = $_REQUEST["id"];
  $uname = $_REQUEST["uname"];
  $password = $_REQUEST["password"];
  $title = $_REQUEST["title"];

  $uname = mysqli_escape_string($conn, $uname);
  $password = mysqli_escape_string($conn, $password);
  $title = mysqli_escape_string($conn, $title);

  $query = "SELECT username, password, title FROM blog WHERE username = '$uname' AND password = '$password' AND title = '$title'";
  $select_user_query = mysqli_query($conn, $query);

  // while($row = mysqli_fetch_array($select_user_query)){

    if($row = mysqli_fetch_array($select_user_query)){
      
      $sql = "DELETE FROM blog WHERE id = $id";
      $query = mysqli_query($conn, $sql);

      echo
          "
          <script>
          document.location.href = 'blog.php?info=added';
          alert('Post has been deleted');
          </script>
          ";
    

      } else {
        echo
        "
        <script>
        document.location.href = 'read.php?id=$id';
        alert('Invalid keyword');
      </script>

      
      ";
  }
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TREZ Blogsite | Delete Post</title>
  <link rel="stylesheet" href="./assets//bootstrap-5.1.3-dist/css/bootstrap.min.css" />
  <link rel="shortcut icon" href="./assets/img/small_logo.png" type="image/x-icon" />

  
  <!-- css external links -->
  <link rel="stylesheet" href="./assets/css/general_styling.css" />
  <link rel="stylesheet" href="./assets/css/navbar.css" />
  <link rel="stylesheet" href="./assets/css/blog.css" />
  <script src="./assets/js/linkprf.js" defer></script>
</head>
<body>
<div class="container">
    <div class="col-sm-4 mx-auto mt-5">
    <h3 class="redirecting p-3 text-center rounded-3 hidden" style="background: #b2e2b2; color: #333; transition: all .5s ease-in;">Redirecting...</h3>
    <h3 class="error bg-danger text-white p-3 text-center rounded-3 hidden" style="transition: all .5s ease-in;">Invalid Username of Password</h3>
      <h1 class="text-center my-3" style="color: #555;">Fill out to delete</h1>
      <?php foreach($query as $que) { ?>
      <form class="bg-light p-5 rounded-3" style="border: #999 solid 2px;" method="post" autocomplete="off">
      <input type="text" hidden name="id" value="<?php echo $que['id'] ?>">
      <input type="text" name="uname" id="uname" placeholder="Username" class="form-control text-dark" required>
      <input type="password" name="password" placeholder="Password of the post" class="form-control text-dark mt-3" required>
      <input type="title" name="title" placeholder="Title of the post" class="form-control text-dark mt-3" required>
      <div class="mt-4 d-flex align-items-center justify-content-center">
          <button name="val_del" class="btn text-light text-center" style="background: #555; width: 10rem; font-weight: 600;">Delete</button>
        </div> 
      </form>
      <?php  } ?>
    </div>
  </div>

</body>
</html>