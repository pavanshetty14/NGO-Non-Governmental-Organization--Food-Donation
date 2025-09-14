<?php
$dbhost = 'localhost';
$dbuser = 'root'; //change to your MySQL installed user
$dbpass = ''; //give MySQL password of your system
$dbase = 'ngo'; //give the database name created in your system

$db = mysqli_connect($dbhost, $dbuser, $dbpass, $dbase);
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$requestMethod = isset($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : null;
if ($requestMethod == "POST") {
  if (isset($_POST['update'])) {
    $vemail = $_POST['vemail'];
    $vname = $_POST['vname'];
    $vphone = $_POST['vphone'];
    $vaddress = $_POST['vaddress'];
    $vmsg = $_POST['vmsg'];

    $updateQuery = "UPDATE vregister SET vname='$vname', vphone='$vphone', vaddress='$vaddress', vmsg='$vmsg' WHERE vemail='$vemail'";
    $result = mysqli_query($db, $updateQuery);
    if ($result) {
      // Success message
      echo "<script>alert('Volunteer details updated successfully.');</script>";
      echo "<script>window.location.href='http://localhost/NGO/AD/admin/volunteer.php';</script>"; // Replace 'your-page-url.php' with the URL of the page you want to redirect to
    } else {
      // Error message
      echo "<script>alert('Failed to update volunteer details. Please try again.');</script>";
    }
  }

  if (isset($_POST['delete'])) {
    $vemail = $_POST['delete'];

    $deleteQuery = "DELETE FROM vregister WHERE vemail='$vemail'";
    $result = mysqli_query($db, $deleteQuery);
    if ($result) {
      // Success message
      echo "<script>alert('Volunteer deleted successfully.');</script>";
      echo "<script>window.location.href='http://localhost/NGO/AD/admin/volunteer.php';</script>"; // Replace 'your-page-url.php' with the URL of the page you want to redirect to
    } else {
      // Error message
      echo "<script>alert('Failed to delete volunteer. Please try again.');</script>";
    }
  }
}

// Fetching volunteers from the database
$details = "SELECT * FROM vregister";
$resultstaff = mysqli_query($db, $details);
$rows = mysqli_num_rows($resultstaff);
?>

<!--This is the HTML file-->
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
</head>

<body class="bg" style="background-image: url('4.jpg');">
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
      // Displaying volunteer details in HTML
      if ($resultstaff) {
        echo "<table><tr><th>NAME</th><th>Email</th><th>Phone</th><th>ADDRESS</th><th>Message</th><th>Actions</th></tr>";
        while ($row = mysqli_fetch_array($resultstaff, MYSQLI_ASSOC)) {
          echo "<tr><td>" . $row['vname'] . "</td><td>" . $row['vemail'] . "</td><td>" . $row['vphone'] . "</td><td>" . $row['vaddress'] . "</td><td>" . $row['vmsg'] . "</td>";
          echo "<td>";
          echo "<button type='button' class='edit-btn' data-email='" . $row['vemail'] . "'>Edit</button>";
          echo "<button type='button' class='delete-btn' data-email='" . $row['vemail'] . "'>Delete</button>";
          echo "</td>";
          echo "</tr>";
        }
        echo "</table>";
      }
      ?>
    </div>
  </form>
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

  <!-- Edit Form -->
  <div id="edit-form-container" style="display: none;">
    <h2>Edit Volunteer Details</h2>
    <form id="edit-form" method="POST">
      <input type="hidden" id="edit-vemail" name="vemail">
      <label for="edit-vname">Name:</label>
      <input type="text" id="edit-vname" name="vname" required>
      <label for="edit-vphone">Phone:</label>
      <input type="text" id="edit-vphone" name="vphone" required>
      <label for="edit-vaddress">Address:</label>
      <input type="text" id="edit-vaddress" name="vaddress" required>
      <label for="edit-vmsg">Message:</label>
      <input type="text" id="edit-vmsg" name="vmsg" required>
      <button type="submit" name="update">Update</button>
    </form>
  </div>

  <!-- JavaScript -->
  <script>
    // Edit button click event
    $(document).on("click", ".edit-btn", function () {
      var email = $(this).data("email");
      var row = $(this).closest("tr");
      var name = row.find("td:nth-child(1)").text();
      var phone = row.find("td:nth-child(3)").text();
      var address = row.find("td:nth-child(4)").text();
      var msg = row.find("td:nth-child(5)").text();

      $("#edit-vemail").val(email);
      $("#edit-vname").val(name);
      $("#edit-vphone").val(phone);
      $("#edit-vaddress").val(address);
      $("#edit-vmsg").val(msg);

      $("#edit-form-container").show();
    });

    // Delete button click event
    $(document).on("click", ".delete-btn", function () {
      var email = $(this).data("email");

      if (confirm("Are you sure you want to delete this volunteer?")) {
        // Send AJAX request to delete the volunteer
        $.ajax({
          url: "http://localhost/NGO/AD/admin/volunteer.php", 
          method: "POST",
          data: {
            delete: email
          },
          success: function (response) {
            alert("Successfully deleted");
            location.reload();
          },
          error: function () {
            alert("Failed to delete volunteer. Please try again.");
          }
        });
      }
    });
  </script>
</body>

</html>