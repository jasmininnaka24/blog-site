

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- fav icon -->
    <link rel="shortcut icon" href="./assets/img/small_logo.png" type="image/x-icon" />
    <title>TREZ Blogsite | About Us</title>
    <!-- css external links -->
    <link rel="stylesheet" href="./assets/bootstrap-5.1.3-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <link rel="stylesheet" href="./assets/css/general_styling.css" />
    <link rel="stylesheet" href="./assets/css/navbar.css" />
    <link rel="stylesheet" href="./assets/css/about_us.css" />
  </head>
  <style>
    /* animations */
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
<body class="bg" >
  <!-- to run = ctrl + l + o -->
  <!-- ! then enter -->
  
  <?php include "./app/include/navbar_inc.php"; ?>
  
  <div class="container anim-to-top" style="margin-top: -2rem;">

    <div class="category-header">About Us</div>
    
      <section class="row d-flex align-items-center justify-content-center mx-auto">
        <div class="aboutus-info col-12 mx-auto">
          <img src="./assets/img/huge_logo.png" style="width: 100%;" alt="" />
          <p class="text-lg-start text-md-center col-lg-12" style="width: 100%;">
          The word "trez," which means "three" in Spanish, has been chosen to represent the three creators of this website. These three creators are innovators in their fields, which focuses on audience management, programming, and designing. Therefore, is able to develop this website where individuals from all over the world can share their ideas and talents.
          </p>
        </div>



        <div class="about-us-persons col-lg-6 d-flex  align-items-center justify-content-center mx-auto gap1">
          <div class="flexcol align-center justify-center abouttus-user">
            <img style="width: 9rem; height: 9rem; object-fit: cover;" class="rounded-circle" src="./assets/img/yz.png" alt="" />
            <p onclick="openModal(this)" class="developer-1">Alyza Amiruddin</p>
          </div>
          <div class="flexcol align-center justify-center abouttus-user">
            <img style="width: 9rem; height: 9rem; object-fit: cover;" class="rounded-circle" src="./assets/img/nn.png" alt="" />
            <p onclick="openModal(this)" class="developer-2">Nathalie Enriquez</p>
          </div>
          <div class="flexcol align-center justify-center abouttus-user">
            <img style="width: 9rem; height: 9rem; object-fit: cover;" class="rounded-circle" src="./assets/img/jas.png" alt="" />
            <p onclick="openModal(this)" class="developer-3">Jasmin In-naka</p>
          </div>
        </div>
      </section>

    <section class="container contact_us">
      <div class="row d-flex flex-column align-center p-5 rounded-3" style="background: #f6ffffcc;">
        
          <img src="./assets/img/work.png" style="width: 22rem;" class="mx-auto" alt="">
        
        <div class="col-lg-6 col-md-8 d-flex flex-column align-items-center justify-center col-sm-12 mx-auto">
          <h4 class="text-center fw-bold" style="color: #444;">Have a request?</h4>
          <p class="lead text-center" style="color: #444; font-weight: 600;">Email us at: <span class="bg-dark-green col-6 mx-auto mt-3 d-block text-center text-light py-1 fw-bold rounded-pill" style="background: #44ac9d; width: 13rem; font-size: 16px;">trezblog@gmail.com</span></p>
        </div>
      </div>
    </section>
    <section class="modal-1 yza hidden">
      <button onclick="closeModal(this)" class="close-modal-1">&times;</button>
      <img style="width: 9rem; height: 9rem; object-fit: cover; border: double 10px #999;" class="rounded-circle mt-5" src="./assets/img/yz.png" alt="" />
      <p class="lead mt-4">Hi 👋🏻 I am Nur-Alyza Amiruddin from Trez company, an undergraduate student and an audience manager that focuses on tracking the progress of the website via the audience feedback.</p>
    </section>
    <section class="modal-1 nath hidden">
      <button onclick="closeModal(this)" class="close-modal-1">&times;</button>
      <img style="width: 9rem; height: 9rem; object-fit: cover; border: double 10px #999;" class="rounded-circle mt-5" src="./assets/img/nn.png" alt="" />
      <p class="lead mt-4">Hi 👋🏻 I am Nathalie Enriquez from Trez company, an undergraduate student and a graphic designer working in web development, the Trez blog site. My job is to give users the best attractive design that they can have.</p>
    </section>
    <section class="modal-1 jas hidden">
      <button onclick="closeModal(this)" class="close-modal-1">&times;</button>
      <img style="width: 9rem; height: 9rem; object-fit: cover; border: double 10px #999;" class="rounded-circle mt-5" src="./assets/img/jas.png" alt="" />
      <p class="lead mt-4">Hi 👋🏻 I am Jasmin In-naka from Trez company, an undergraduate student and a web developer implementing software designs and functionalities. I enjoy learning new things, and with that, I'm so much grateful to work with my team mates.</p>
    </section>
    <section style="height: 10vh;"></section>
    
  </div>
  <div class="overlay hidden"></div>
   <div class="mt-5 px-5" style="background: #edf6f5;">
      <div clas="container">
        <?php include "./app/include/footer.php"; ?>
      </div>
    </div>
  <script src="./assets/js/about_us.js"></script>
  </body>
</html>

