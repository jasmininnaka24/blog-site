<?php include "./logic.php"; 
include "./another_con.php";


if(isset($_REQUEST['login'])){

  $uname = $_REQUEST["uname"];
  $password = $_REQUEST["password"];

  $uname = mysqli_escape_string($conn, $uname);
  $password = mysqli_escape_string($conn, $password);

  $query = "SELECT * FROM users WHERE uname = '$uname' AND password = '$password'";
  $select_user_query = mysqli_query($conn, $query);

  $queryAd = "SELECT * FROM admin_user WHERE uname = '$uname' AND password = '$password'";
  $select_user_queryAd = mysqli_query($conn2, $queryAd);

  // while($row = mysqli_fetch_array($select_user_query)){
  
   if($row = mysqli_fetch_array($select_user_query)){
    echo
      "
      <script>
      setTimeout(() => {
        document.querySelector('.redirecting').classList.remove('hidden');
      }, 0000)
      setTimeout(() => {
        
        document.location.href = 'landing_page.php?uname=$uname';
        document.querySelector('.redirecting').classList.add('hidden');
      }, 1000)
      </script>

      ";
    } else if($row2 = mysqli_fetch_array($select_user_queryAd)){
      echo 
        "
        <script>
        setTimeout(() => {
          document.querySelector('.redirecting').classList.remove('hidden');
        }, 0000)
        setTimeout(() => {
          
          document.location.href = 'admin_category.php';
          document.querySelector('.redirecting').classList.add('hidden');
        }, 1000)
        </script>
  
        ";
      } else {
    echo
    "
    <script>
    setTimeout(() => {
      document.querySelector('.error').classList.remove('hidden');
    }, 0000)
    
    </script>
    ";
  }
}
  
  switch(true){

  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TREZ Blogsite | Login</title>
  <link rel="stylesheet" href="./assets//bootstrap-5.1.3-dist/css/bootstrap.min.css" />
      <link rel="shortcut icon" href="./assets/img/small_logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />

  <!-- css external links -->
  <link rel="stylesheet" href="./assets/css/general_styling.css" />
  <link rel="stylesheet" href="./assets/css/navbar.css" />
  <link rel="stylesheet" href="./assets/css/blog.css" />
  <script src="./assets/js/linkprf.js" defer></script>
</head>
<body style="height: 100vh;">
<div class="bg">
  <div class="container">
    <div class="col-sm-4 mx-auto mt-5">
      <h1 class="text-center mb-5" style="color: #485858;">Trez</h1>

      <h3 class="redirecting p-3 text-center rounded-3 hidden" style="background: #edf6f5; color: #333; transition: all .5s ease-in; font-size: 1.2rem;">Redirecting...</h3>
      <h3 class="error bg-danger text-white p-2 text-center rounded-3 hidden" style="transition: all .5s ease-in; font-size: 1.2rem;">Invalid Username or Password</h3>
      
      <h1 class="text-center my-3 mx-auto py-1" style="color: #fff; background: #4d4d4d; font-size: 1.3rem; width: 10rem; border-radius: 10px;">Sign In</h1>
      
      <form class="p-5 rounded-3" style="border: none; background: #edf6f5;" method="post" autocomplete="off">
        <input type="text" name="uname" id="uname" placeholder="Username" class="form-control text-dark" style="border: none;" required>
        <input type="password" name="password" placeholder="Password" class="form-control text-dark mt-3" style="border: none;" required>
        <button name="login" class="btn bg-dark-green mt-4 mx-auto col-12 text-center" style="font-weight: bold;">Login</button>
      </form>
    </div>
        <a href="./signup.php"><div class="mt-4 fst-italic text-center">Don't have an account?</div></a>
  </div>
    <section style="height: 15vh;"></section>
  
      <div class="mt-5 px-5" style="background: #edf6f5;">
      <div clas="container">
        <?php include "./app/include/footer.php"; ?>
      </div>
    </div>
</body>
</html>