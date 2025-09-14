<?php
// Include database connection file
require 'connection.php';

// Get form data
$vname = (isset($_POST['vname']) ? $_POST['vname'] : '');
$vemail = (isset($_POST['vemail']) ? $_POST['vemail'] : '');
$vphone = (isset($_POST['vphone']) ? $_POST['vphone'] : '');
$vaddress = (isset($_POST['vaddress']) ? $_POST['vaddress'] : '');
$vmsg = (isset($_POST['vmsg']) ? $_POST['vmsg'] : '');

// Insert data
$sql = "INSERT INTO vregister (vname, vemail, vphone, vaddress, vmsg) VALUES ('$vname', '$vemail', '$vphone', '$vaddress', '$vmsg')";

if (mysqli_query($conn, $sql)) {
  // Display popup message and redirect
  echo "<script>alert('Registered successfully');</script>";
  echo "<script>window.location.href = 'index.php';</script>";
} else {
  echo "<script>alert('Error in Registration');</script>";
  echo "<script>window.location.href = 'index.php';</script>";
}


mysqli_close($conn);
?>