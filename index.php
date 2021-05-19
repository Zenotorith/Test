<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ngắm chó Petshop</title>
    <link rel="icon" href="./assets/img/logo.ico">
    <!--Stylesheet-->
    <link rel="stylesheet" href="styles.css">

    <!--CDN-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

</head>
<body>
    <!--Navbar-->
    <div class="nav-bar">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
              <a class="navbar-brand" href="#" data-aos="flip-left" data-aos-duration="800"><img src="assets/img/logo.png" alt=""><div class="brand-name"><h1>Ngắm <span>Chó</span></h1></div></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars" aria-hidden="true"></i>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#chihuahua" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0">CHIHUAHUA</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#corgi" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="250">CORGI</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#husky" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">HSKY</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#shiba" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="750">SHIBA</a>
                  </li>
                </ul>
              </div>
            </div>
        </nav>
      </div>
      <!--End Navbar-->

      <!--Main Content-->
      <main class="container">

        <!--Introduction-->
        <div class="introduction">
          <h1>GIỚI THIỆU:</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sollicitudin nec mi et facilisis. Praesent id condimentum tortor, porta ultrices enim. Nunc nisl sem, varius vitae libero vitae, laoreet suscipit nulla. Donec vestibulum eget quam at blandit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc eget sapien congue turpis semper maximus. Morbi tempus ante vel arcu dictum, id egestas ipsum gravida. Vestibulum augue nibh, lobortis quis mattis non, maximus lacinia ligula. Donec sit amet ullamcorper lectus. Suspendisse vel eros ex. Nullam molestie dolor et turpis bibendum, eget posuere nisl rutrum. Sed lacinia, arcu sit amet tincidunt bibendum, libero augue consectetur lectus, sit amet pulvinar risus libero sed purus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas suscipit, arcu vel pretium ultricies, tellus arcu accumsan erat, vitae varius ipsum quam eu mauris. Donec magna turpis, laoreet sed viverra in, pulvinar sit amet quam. Maecenas blandit convallis libero.</p>
        </div>
        <!--End Introduction-->
        <br>

        <!--Content 2-->
        <div class="go-btn">
          <div class="c-btn">
            <p>Bắt cún</p>
            <img src="assets/svg/down-arrow.svg" alt="down" class="btn-svg">
          </div>
        </div>

        <br>
          <!--Section show pets-->
            <section class="card row" style="display: grid; border: none; border-radius: 0;" data-aos="fade-left" id="chihuahua">
              <div class="col-md-4"></div>
                <img src="assets/img/introduction/chihuahua.jpg" alt="Chihuahua">
              <div class="col-md-4">
                <h3>Chihuahua</h3>
                <p>Donec scelerisque purus faucibus mauris lacinia lobortis. Donec massa leo, fermentum id dapibus ut, placerat et nunc. Quisque maximus elit vel neque pretium, at tristique arcu tempor. Ut commodo leo a sapien vehicula, sit amet commodo risus scelerisque. Aliquam est lectus, cursus quis mi eu, vehicula fringilla arcu. Suspendisse sed fringilla velit. Suspendisse potenti. Suspendisse potenti. Nulla in quam tellus.</p>
                <a href="#" class="buy-btn">Buy Now~!</a>
              </div>
            </section>

            <section class="card" style="display: grid; border: none; border-radius: 0;" data-aos="fade-left" id="corgi">
              <img src="assets/img/introduction/corgi.jpg" alt="Corgi">
              <div>
                <h3>Corgi</h3>
                <p>Donec scelerisque purus faucibus mauris lacinia lobortis. Donec massa leo, fermentum id dapibus ut, placerat et nunc. Quisque maximus elit vel neque pretium, at tristique arcu tempor. Ut commodo leo a sapien vehicula, sit amet commodo risus scelerisque. Aliquam est lectus, cursus quis mi eu, vehicula fringilla arcu. Suspendisse sed fringilla velit. Suspendisse potenti. Suspendisse potenti. Nulla in quam tellus.</p>
                <a href="#" class="buy-btn">Buy Now~!</a>
              </div>
            </section>

            <section class="card" style="display: grid; border: none; border-radius: 0;" data-aos="fade-left" id="husky">
              <img src="assets/img/introduction/husky.jpg" alt="Husky">
              <div>
                <h3>Husky</h3>
                <p>Donec scelerisque purus faucibus mauris lacinia lobortis. Donec massa leo, fermentum id dapibus ut, placerat et nunc. Quisque maximus elit vel neque pretium, at tristique arcu tempor. Ut commodo leo a sapien vehicula, sit amet commodo risus scelerisque. Aliquam est lectus, cursus quis mi eu, vehicula fringilla arcu. Suspendisse sed fringilla velit. Suspendisse potenti. Suspendisse potenti. Nulla in quam tellus.</p>
                <a href="#" class="buy-btn">Buy Now~!</a>
              </div>
            </section>

            <section class="card" style="display: grid; border: none; border-radius: 0;" data-aos="fade-left" id="shiba">
              <img src="assets/img/introduction/shiba.jpg" alt="Shiba">
              <div>
                <h3>Shiba</h3>
                <p>Donec scelerisque purus faucibus mauris lacinia lobortis. Donec massa leo, fermentum id dapibus ut, placerat et nunc. Quisque maximus elit vel neque pretium, at tristique arcu tempor. Ut commodo leo a sapien vehicula, sit amet commodo risus scelerisque. Aliquam est lectus, cursus quis mi eu, vehicula fringilla arcu. Suspendisse sed fringilla velit. Suspendisse potenti. Suspendisse potenti. Nulla in quam tellus.</p>
                <a href="#" class="buy-btn">Buy Now~!</a>
              </div>
            </section>
          <!--End Section-->
      </main>
      <!--End Main Content-->

      <!--Footer-->
      <footer class="footer-basic">
        <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
          <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Home</a></li>
            <li class="list-inline-item"><a href="#">Services</a></li>
            <li class="list-inline-item"><a href="#">About</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
          </ul>
        <p class="copyright">Harry Company © 2021</p>
      </footer>
      <!--End of Footer-->
    



    <!--Script CDN-->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init({
        offset: 400, // offset (in px) from the original trigger point
        delay: 0, // values from 0 to 3000, with step 50ms
        duration: 1000 // values from 0 to 3000, with step 50ms
      });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  
  </body>
</html>