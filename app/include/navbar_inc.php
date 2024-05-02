<?php require "./logic.php"; ?>
<style>
  .containerrr{
  max-width: 1400px; 
  width:90%;
  margin: 0 auto;
  padding: 3rem 0;
}

.logo{
  width: 7rem;
}

.text-dark nav-link{
  margin-top: -1.7rem;
}
.navbarr{
  max-width: 1400px; 
  width:90%;
  margin: auto;
  /* animation: slideFromTop .3s ease-in; */
  /* position: fixed; */
}
.navlink{
  position: relative;
}
.navlink:hover{
  color: #444;
}
.navlink::before{
  content: "";
  width: 0%;
  background: black;
  height: 2px;
  position: absolute;
  top: 1.5rem;
  transition: all .5s cubic-bezier(1,0,0,1);
}
.navlink:hover::before{
  width: 100%;
}
.logout{
  background: #fff;
  color: #444;
  transition: all .4s;
}
.logout:hover{
  background-color: #555;
  color: #fff;
}
#header-pop{
  height: 30rem;
}
@keyframes slideFromTop {
  0%{
    transform: translateY(-100%);
  }
  100%{
    transform: translateX(0%);
  }
}
@keyframes slideFromLeft {
  0%{
    transform: translateX(-100%);
  }
  100%{
    transform: translateX(0%);
  }
}
@keyframes slideFromRight {
  0%{
    transform: translateX(100%);
  }
  100%{
    transform: translateX(0%);
  }
}
@keyframes slideFromBottom {
  0%{
    transform: translateY(100%);
  }
  100%{
    transform: translateX(0%);
  }
}
</style>
<div class="containerrr">

  <div class="navbarr d-flex flexrow justify-between align-center header-box">
    <!-- left -->
    <section id="header-left" style="margin-top: -1rem;">
        <a href="./landing_page.php">
          <img src="./assets/img/huge_logo.png" style="z-index: 100;" alt="" class="logo">
        </a>
        </section>
        <!-- right -->
        <section id="header-right" class="flexrow" style="margin-top: -2rem;">
          <!-- nav -->
          <nav>
            <ul class="flexrow gap-5 nav-main mt-5">
              <!-- 1st item -->

              <li style="position: relative;" ><a class="fw-bold navlink" href="./landing_page.php">Home</a></li>
              <li style="position: relative;" ><a class="fw-bold navlink" href="./blog.php">Blog</a></li>
              <li style="position: relative;" ><a class="fw-bold navlink" href="./category.php">Categories</a></li>
              <li style="position: relative;" ><a class="fw-bold navlink" href="./aboutus.php">About Us</a></li>
              <li style="position: relative;" ><a class="fw-bold px-5 py-3 logout" style="border-radius: 20px;" href="./home.php">Logout</a></li>
    
              </li>
            </ul> 
          </nav>
      
          </section>
        </div>
        
        <input type="checkbox" class="checkbox-open" id="open" hidden />
        <button class="bg-none border-none">
          <label for="open">
            <img src="./assets/img/menu.png" id="nav-menu" alt="" />
          </label>
        </button>
        
        <section id="header-pop" class="flexcol text-center" >
          <!-- nav -->
          <nav>
            <ul class="d-flex flex-column align-items-center justify-content-center p-0" >
              <!-- 1st item -->
              <li style="position: relative;" ><a class="fw-bold navlink" href="./landing_page.php">Home</a></li>
              <li style="position: relative;" ><a class="fw-bold navlink" href="./blog.php">Blog</a></li>
              <li style="position: relative;" ><a class="fw-bold navlink" href="./category.php">Categories</a></li>
              <li style="position: relative;" ><a class="fw-bold navlink" href="./aboutus.php">About Us</a></li>
              <li style="position: relative;" ><a class="fw-bold bg-dark text-light px-5 py-3 logout" style="border-radius: 20px;" href="./home.php">Logout</a></li>
            </ul>
            
          </nav>
        </section>
        
        
        <script src="./assets/js/linkprf.js"></script>
      </div>