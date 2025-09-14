<?php
// Include database connection file
require 'connection.php';

// Get form data
$cname = (isset($_POST['cname']) ? $_POST['cname'] : '');
$cmail = (isset($_POST['cmail']) ? $_POST['cmail'] : '');
$subject = (isset($_POST['subject']) ? $_POST['subject'] : '');
$msg = (isset($_POST['msg']) ? $_POST['msg'] : '');

// Insert data
$sql = "INSERT INTO contact (cname, cmail, subject, msg) VALUES ('$cname', '$cmail', '$subject', '$msg')";

if (mysqli_query($conn, $sql)) {
  // Display popup message and redirect
  echo "<script>alert('Thank You for contacting us, We will reach out to you soon.');</script>";
  echo "<script>window.location.href = 'contact.html';</script>";
} else {
  echo "<script>alert('Error in Contacting us, wait for some time.');</script>";
  echo "<script>window.location.href = 'contact.html';</script>";
}


mysqli_close($conn);
?>