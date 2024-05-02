<?php include "./logic.php";
  if(isset($_POST['register'])){

    $uname = $_POST['uname'];
    $password = $_POST['password'];
  
    $queryReg = "INSERT INTO users(uname, password) VALUES('$uname', '$password')";
  
    $res = mysqli_query($conn, $queryReg);



    echo
      "
      <script>
      setTimeout(() => {
        document.querySelector('.registered').classList.remove('hidden');
      }, 0000)
      setTimeout(() => {
        document.querySelector('.registered').classList.add('hidden');
        document.location.href = 'login.php';
      }, 1000)
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
  <title>TREZ Blogsite | Register</title>
  <link rel="stylesheet" href="./assets//bootstrap-5.1.3-dist/css/bootstrap.min.css" />
  <!-- css external links -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <link rel="shortcut icon" href="./assets/img/small_logo.png" type="image/x-icon" />

  <link rel="stylesheet" href="./assets/css/general_styling.css" />
  <link rel="stylesheet" href="./assets/css/navbar.css" />
  <link rel="stylesheet" href="./assets/css/blog.css" />
</head>
<body  class="bg">
  <div class="container">
    <div class="col-sm-4 mx-auto mt-5">
      <h1 class="text-center mb-5" style="color: #485858;">Trez</h1>
      <h3 class="registered p-3 text-center rounded-3 hidden" style="background: #edf6f5; color: #333; transition: all .5s ease-in; font-size: 1.2rem;">Successfully Registered!</h3>


    <h1 class="text-center my-3 mx-auto py-1" style="color: #fff; background: #4d4d4d; font-size: 1.3rem; width: 10rem; border-radius: 10px;">Sign Up</h1>

    <form class="p-5 rounded-3" style="border: none; background: #edf6f5;" method="post" autocomplete="off">
      <input type="text" name="uname" id="uname" placeholder="Username" class="form-control" style="border: none;" required>
      <input type="password" name="password" placeholder="Password" class="form-control text-dark mt-3" style="border: none;" required>

      <button name="register" class="btn bg-dark-green mt-4 mx-auto col-12 text-center" style="font-weight: bold;">Register</button>
      
    </form>
      
    </div>
        <a href="./login.php"><div class="mt-4 fst-italic text-center">Already have an account?</div></a>
    <section style="height: 15vh;"></section>
  </div>

    <div class="mt-5 px-5" style="background: #edf6f5;">
      <div clas="container">
        <?php include "./app/include/footer.php"; ?>
      </div>
    </div>

</body>
</html>