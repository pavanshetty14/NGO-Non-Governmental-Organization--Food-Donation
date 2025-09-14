<?php
// Include database connection file
require 'connection.php';

// Get form data
$name = (isset($_POST['name']) ? $_POST['name'] : '');
$email = (isset($_POST['email']) ? $_POST['email'] : '');
$phone = (isset($_POST['phone']) ? $_POST['phone'] : '');
$address = (isset($_POST['address']) ? $_POST['address'] : '');
$lat = (isset($_POST['lat']) ? $_POST['lat'] : '');
$lng = (isset($_POST['lng']) ? $_POST['lng'] : '');

// Insert data
$sql = "INSERT INTO ngoRegister (name, email, phone, address, lat, lng) VALUES ('$name', '$email', '$phone', '$address', '$lat', '$lng')";

if (mysqli_query($conn, $sql)) {
  // Display popup message and redirect
  echo "<script>alert('Registered successfully');</script>";
  echo "<script>window.location.href = 'ngo.php';</script>";
} else {
  echo "<script>alert('Error in Registation');</script>";
  echo "<script>window.location.href = 'ngo.php';</script>";
}


mysqli_close($conn);
?>