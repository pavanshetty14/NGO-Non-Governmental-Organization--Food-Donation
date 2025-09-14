<!DOCTYPE html>
<html lang="en">

<head>
  <title>FoodAid</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Overpass:300,400,400i,600,700" rel="stylesheet">

  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/table.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/ionicons.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">


  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/icomoon.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<script>
  function getLocation() {
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(showPosition);
    } else {
      alert("Geolocation is not supported by this browser.");
    }
  }

  function showPosition(position) {
    document.getElementById("lat").value = position.coords.latitude;
    document.getElementById("lng").value = position.coords.longitude;
  }
</script>

<body onload="getLocation()">

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.php">Food Aid</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
        aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
          <li class="nav-item"><a href="donate.php" class="nav-link">Donate</a></li>
          <li class="nav-item"><a href="tips.html" class="nav-link">Suggestions</a></li>
          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
          <li class="nav-item"><a href="AD#" class="nav-link">Admin Login</a></li>
          <li class="nav-item"><a href="http://127.0.0.1:8000/" class="nav-link">Service</a></li>
          <li class="nav-item"><a href="ngo.php" class="nav-link">NGO Regsiter</a></li>
          <li class="nav-item"><a href="vol.php" class="nav-link">Volunteer Regsiter</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->

  <div class="hero-wrap" style="background-image: url('images/bg_6.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
          <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a
                href="index.php">Home</a></span> <span>NGO</span></p>
          <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">NGO Registration</h1>
        </div>
      </div>
    </div>
  </div>
  <section id="section1" class="section active ftco-section contact-section ftco-degree-bg" onload="getLocation()">
    <div class="container">
      <div class="row d-flex mb-5 contact-info">
        <div class="col-md-12 mb-4">
          <h2 class="mb-3 bread" style="text-align:center;"><u>NGO Registration</u></h2>
        </div>
      </div>
      <div class="row block-12">
        <div class="col-md-12 pr-md-5">
          <h4 class="mb-4">Fill the Details of the NGO and Register Here:</h4>
          <form action="ngo_register.php" method="post">
            <div class="form-group">
              <input type="text" class="form-control" id="name" name="name" placeholder="NGO Name">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="email" name="email" placeholder="Email">
            </div>
            <div class="form-group">
              <input type="number" class="form-control" id="phone" name="phone" placeholder="Phone Number">
            </div>
            <div class="form-group">
              <textarea cols="30" rows="7" class="form-control" id="address" name="address"
                placeholder="Address"></textarea>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="lat" name="lat" hidden>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="lng" name="lng" hidden>
            </div>
            <div class="form-group">
              <input type="submit" value="Register" class="btn btn-primary py-3 px-5">
            </div>
          </form>

        </div>

      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="ftco-footer ftco-section img">
    <div class="overlay"></div>
    <div class="container">
      <div class="row mb-5">

        <div class="col-md-4">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">About Us</h2>
            <p>NGO stands for Non-Governmental Organization, which is a not-for-profit organization that is independent
              from government and works towards social, environmental, and humanitarian causes. NGOs play a crucial role
              in addressing global issues such as poverty, inequality, human rights violations, and environmental
              degradation.</p>
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
        </div>

        <div class="col-md-4">
          <div class="ftco-footer-widget mb-4 ml-md-4">
            <h2 class="ftco-heading-2">Site Links</h2>
            <ul class="list-unstyled">
              <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
              <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
              <li class="nav-item"><a href="donate.php" class="nav-link">Donate</a></li>
              <li class="nav-item"><a href="tips.html" class="nav-link">Suggestions</a></li>
              <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
              <li class="nav-item"><a href="AD#" class="nav-link">Admin Login</a></li>
              <li class="nav-item"><a href="http://127.0.0.1:8000/" class="nav-link">Service</a></li>
              <li class="nav-item"><a href="ngo.php" class="nav-link">NGO Regsiter</a></li>
              <li class="nav-item"><a href="vol.php" class="nav-link">Volunteer Regsiter</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Have a Questions?</h2>
            <div class="block-23 mb-3">
              <ul>
                <li><span class="icon icon-map-marker"></span><span class="text">Hassan, Karnataka</span></li>
                <li><a href="tel:+919783952210"><span class="icon icon-phone"></span><span class="text">+91 978 3952
                      210</span></a></li>
                <li><a href="mailto:ngo@hassan.com"><span class="icon icon-envelope"></span><span
                      class="text">ngo@hassan.com</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">

          <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;
            <script>document.write(new Date().getFullYear());</script> All rights reserved by <a href=""
              target="_blank">NGO-Hassan</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>
      </div>
    </div>
  </footer>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
        stroke="#F96D00" />
    </svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

</body>

</html>