<?php
// Include database connection file
require 'connection.php';

// Get user's location
$lat = $_GET['lat'];
$lng = $_GET['lng'];

// Query the database for all ngoRegister
$sql = "SELECT name, email, phone, address, lat, lng FROM ngoRegister";
$result = mysqli_query($conn, $sql);

// Calculate the distance for each location and store it in an array
$distances = array();
while ($row = mysqli_fetch_assoc($result)) {
	$distance = sqrt(pow($row['lat'] - $lat, 2) + pow($row['lng'] - $lng, 2));
	$distances[] = array('name' => $row['name'], 'email' => $row['email'], 'phone' => $row['phone'], 'address' => $row['address'], 'distance' => $distance);
}

// Sort the array by distance in ascending order
usort($distances, function ($a, $b) {
	return $a['distance'] <=> $b['distance'];
});

// Get the nearest location
$nearest = $distances[0];

// Format the result as an HTML table row
$nearestName = $nearest['name'];
$nearestEmail = $nearest['email'];
$nearestPhone = $nearest['phone'];
$nearestAddress = $nearest['address'];
$nearestDistance = round($nearest['distance'], 2);

// WhatsApp Message URL
$whatsappMessageUrl = "https://api.whatsapp.com/send?phone=$nearestPhone&text=";

// Donor Details
$donorName = "";
$donorPhone = "";
$donorAddress = "";
$donorEmail = "";

// Food Donation Details
$foodInformation = "We would like to donate various food items such as .";
$foodQuantity = "";

// Generate the prefilled message with donor and food information
$message = "Donor Name: $donorName\nDonor Phone: $donorPhone\nDonor Address: $donorAddress\nDonor Email: $donorEmail\n\nFood Information:\n$foodInformation\nFood Quantity: $foodQuantity";
$prefilledMessage = urlencode($message);

$contactWhatsApp = "<a href='$whatsappMessageUrl$prefilledMessage'>Contact</a>";
$contactPhone = "<a href='tel:$nearestPhone'>Phone</a>";
$resultRow = "<tr><td>$nearestName</td><td>$nearestAddress</td><td>$contactWhatsApp</td><td>$contactPhone</td></tr>";

// Output the result
echo $resultRow;

// Close the database connection
mysqli_close($conn);
?>