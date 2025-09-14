<?php
$dbhost = 'localhost';
$dbuser = 'root'; //change to ur mysql installed user
$dbpass = ''; //give mysql password of ur system
$dbase = 'ngo'; //give database name created in ur system

$db = mysqli_connect($dbhost, $dbuser, $dbpass, $dbase);
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$requestMethod = isset($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : null;
if ($requestMethod == "POST") {
  //nothing
}

//fetching feedbacks from database
$details = "SELECT * FROM contact";
$resultstaff = mysqli_query($db, $details);
$rows = mysqli_num_rows($resultstaff);

if ($resultstaff) {
  for ($j = 0; $j < $rows; $j++) {
    $row = mysqli_fetch_array($resultstaff, MYSQLI_ASSOC);
  }
}

?>
<!--This is the html file-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>NGO_Admin</title>
  <link rel="stylesheet" href="../css/tableview.css">
  <link rel="stylesheet" href="../css/slideshower.css">
  <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->
  <script src="form-script.js"></script>
</head>

<style type="text/css">
  body {
    font-family: Raleway;
  }


  /*headeer top*/
  .topbar {
    background-color: #212529;
    padding: 0;
  }

  .topbar .container .row {
    margin: -7px;
    padding: 0;
  }

  .topbar .container .row .col-md-12 {
    padding: 0;
  }

  .topbar p {
    margin: 0;
    display: inline-block;
    font-size: 13px;
    color: #f1f6ff;
  }

  .topbar p>i {
    margin-right: 5px;
  }

  .topbar p:last-child {
    text-align: right;
  }

  header .navbar {
    margin-bottom: 0;
  }

  .topbar li.topbar {
    display: inline;
    padding-right: 18px;
    line-height: 52px;
    transition: all .3s linear;
  }

  .topbar li.topbar:hover {
    color: #1bbde8;
  }

  .topbar ul.info i {
    color: #131313;
    font-style: normal;
    margin-right: 8px;
    display: inline-block;
    position: relative;
    top: 4px;
  }

  .topbar ul.info li {
    float: right;
    padding-left: 30px;
    color: #ffffff;
    font-size: 13px;
    line-height: 44px;
  }

  .topbar ul.info i span {
    color: #aaa;
    font-size: 13px;
    font-weight: 400;
    line-height: 50px;
    padding-left: 18px;
  }

  ul.social-network {
    border: none;
    margin: 0;
    padding: 0;
  }

  ul.social-network li {
    border: none;
    margin: 0;
  }

  ul.social-network li i {
    margin: 0;
  }

  ul.social-network li {
    display: inline;
    margin: 0 5px;
    border: 0px solid #2D2D2D;
    padding: 5px 0 0;
    width: 32px;
    display: inline-block;
    text-align: center;
    height: 32px;
    vertical-align: baseline;
    color: #000;
  }

  ul.social-network {
    list-style: none;
    margin: 5px 0 10px -25px;
    float: right;
  }

  .waves-effect {
    position: relative;
    cursor: pointer;
    display: inline-block;
    overflow: hidden;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    -webkit-tap-highlight-color: transparent;
    vertical-align: middle;
    z-index: 1;
    will-change: opacity, transform;
    transition: .3s ease-out;
    color: #fff;
  }

  a {
    color: #0a0a0a;
    text-decoration: none;
  }

  li {
    list-style-type: none;
  }

  .bg-image-full {
    background-position: center center;
    background-repeat: no-repeat;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
    -o-background-size: cover;
  }

  .bg-dark {
    background-color: #222 !important;
  }

  .mx-background-top-linear {
    background: -webkit-linear-gradient(45deg, ##e2818a 48%, #1b1e21 48%);
    background: -webkit-linear-gradient(left, ##e2818a 48%, #1b1e21 48%);
    background: linear-gradient(45deg, #d35f00  48%, #1b1e21 48%);
  }
</style>

<body class="bg" style="background-image: url('4.jpg');">


  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <!-- Navigation -->
  <div class="fixed-top">
    <header class="topbar">
      <div class="container">
        <div class="row">
          <!-- social icon-->
          <div class="col-sm-12">
            <ul class="social-network">
              <li><a class="waves-effect waves-dark" href="#"><i></i></a></li>
              <li><a class="waves-effect waves-dark" href="#"><i></i></a></li>
              <li><a class="waves-effect waves-dark" href="#"><i></i></a></li>
              <li><a class="waves-effect waves-dark" href="#"><i></i></a></li>
              <li><a class="waves-effect waves-dark" href="#"><i></i></a></li>
            </ul>
          </div>

        </div>
      </div>
    </header>
    <nav class="navbar navbar-expand-lg navbar-dark mx-background-top-linear">
      <div class="container">
        <a class="navbar-brand" href="../index.html" style="text-transform: uppercase;"> FoodAid</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
          aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">

          <ul class="navbar-nav ml-auto">

            <li class="nav-item">
              <a class="nav-link" href="ngoregister.php">View NGO</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="volunteer.php">View Volunteers</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="contactusview.php">Queries</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="../index.html">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <br><br><br>


  <form method="POST">
    <h2>REGISTERED VOLUNTEERS DETAILS</h2><br>
    <div align=center class="scroll">

      <?php
      //displaying staff details in html
      $resultstaff = mysqli_query($db, $details);
      if ($resultstaff) {
        echo "<table><tr><th> Name</th><th> Email </th><th> Subject </th><th> Message </th></tr>";
        for ($j = 0; $j < $rows; $j++) {
          $row = mysqli_fetch_array($resultstaff, MYSQLI_ASSOC);

          echo nl2br("<tr><td>" . $row['cname'] . "</td><td>" . $row['cmail'] . "</td><td>" . $row['subject'] . "</td><td>" . $row['msg'] . "</tr></td>");
        }
        echo "</table>";
      }

      ?>
    </div>

</body>

<br><br><br>
<footer style=" 
    position: fixed;
    background-color:#1b1e21; 
    color: white;padding: 10px;
    text-align: center;
    font-family: Raleway;
    font-size: 20px;
    left: 0;
    bottom: 0;
    width: 100%;">
  Developed and Maintained by Group 1
</footer>

</html>