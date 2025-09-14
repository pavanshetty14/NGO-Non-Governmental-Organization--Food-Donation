<!DOCTYPE html>
<html lang="en">

<head>
  <title>NGO</title>
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

<body>

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.php">Food Aid</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
        aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
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
                href="index.php">Home</a></span> <span>Donate</span></p>
          <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Donations</h1>
        </div>
      </div>
    </div>
  </div>

  <section class="section ftco-section contact-section ftco-degree-bg">
    <div class="container">
      <div class="row d-flex mb-5 contact-info" id="dispNGO">
        <div class="col-md-12 mb-4">
          <h2 class="mb-3 bread" style="text-align:center;"><u>Registered NGO's</u></h2>
        </div>
        <?php
        // Include database connection file
        require 'connection.php';
        // Query the database for all records
        $sql = "SELECT name, email, phone, address, lat, lng FROM ngoRegister";
        $result = mysqli_query($conn, $sql);

        // Display the results
        if (mysqli_num_rows($result) > 0) {
          echo "<table>
							  <tr>
									<th>Name</th>
									<th>Email</th>
									<th>Phone</th>
									<th>Address</th>
							  </tr>";
        } else {
          echo "<marquee><h2 style='color:red'>There are no NGO's Registered Yet.</h2></marquee>";
        }
        while ($row = mysqli_fetch_assoc($result)) {
          $name = $row['name'];
          $email = $row['email'];
          $phone = $row['phone'];
          $address = $row['address'];
          echo "<tr><td>$name</td><td>$email</td><td>$phone</td><td>$address</td></tr>";
        }
        echo "</table>";
        // Close the database connection
        mysqli_close($conn);
        ?>

      </div>
      <!--Nearest NGO FIND-->
      <?php
      // Include database connection file
      require 'connection.php';

      // Query the database for all records
      $sql = "SELECT * FROM ngoRegister";
      $result = mysqli_query($conn, $sql);

      // Get the number of rows in the result set
      $row_count = mysqli_num_rows($result);

      // Display the results if there are any rows
      if ($row_count > 1) {
        echo "<div class='row d-flex mb-5 contact-info'>
				  <div class='col-md-12 mb-4'  style='text-align:center;'>
					<button class='btn btn-white py-3 px-5' onclick='getLocation()'>Find The Nearest NGO</button>
				  </div>
					<table>
						<thead>
							<tr>
								<th>Name</th>
								<th>Address</th>
								<th>Whatsapp</th>
								<th>Contact</th>
							</tr>
						</thead>
						<tbody id='results'></tbody>
					</table>";
      }
      ?>
      <script>
        function getLocation() {
          if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
          } else {
            alert("Geolocation is not supported by this browser.");
          }
        }

        function showPosition(position) {
          var lat = position.coords.latitude;
          var lng = position.coords.longitude;

          // Send the user's location to the server for processing
          var xhr = new XMLHttpRequest();
          xhr.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
              // Update the results table with the nearest location
              document.getElementById("results").innerHTML = this.responseText;
            }
          };
          xhr.open("GET", "nearest_location.php?lat=" + lat + "&lng=" + lng, true);
          xhr.send();
        }
      </script>

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
              <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
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