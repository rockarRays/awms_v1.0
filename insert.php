<?php
$servername = "localhost:3308";
$username = "root";
$password = "";
$dbname = "awms_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$brand_name = mysqli_real_escape_string($conn, $_REQUEST['t1']);
$poduct_name = mysqli_real_escape_string($conn, $_REQUEST['t2']);
$product_id = mysqli_real_escape_string($conn, $_REQUEST['t3']);
$mrp = mysqli_real_escape_string($conn, $_REQUEST['t4']);
$quantity = mysqli_real_escape_string($conn, $_REQUEST['t5']);
$description = mysqli_real_escape_string($conn, $_REQUEST['t6']);

$sql = "INSERT INTO product_details (brand_name, product_name, product_id, product_mrp, quantity, description)
VALUES ('$brand_name', '$poduct_name', '$product_id', '$mrp', '$quantity', '$description')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
#header("Location: http://advancewholesalemanagementsystem/ProductCreate.html");
$conn->close();
?>
