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
   
   $sql = 'SELECT * from product_details';
   $result = $conn->query($sql);
   
   if ($result->num_rows > 0) {
   		echo "<table border='1'><tr><th>Brand Name</th><th>Product Name</th><th>Product ID</th><th>Product MRP</th><th>Quantity</th><th>Description</th></tr>";
  		// output data of each ro
  		while($row = $result->fetch_assoc()) {
    		
			echo "<tr><td>" . $row["brand_name"]. "</td><td>".$row["product_name"]. "</td><td>" . $row["product_id"]. "</td><td>" . $row["product_mrp"]. "</td><td>".$row["quantity"]. "</td><td>" . $row["description"] ."</td><tr>"."<br>";
  		}
		echo "</table>";
	} else {
  		die('Could not get data: ' . $conn->error);
	}
   
   echo "Fetched data successfully\n";
   
   $conn->close();
?>
</html>
