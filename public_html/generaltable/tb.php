<html><head><title>MySQL Table Viewer</title></head><body>
<?php
$servername = "cs-sql2014.ua-net.ua.edu";
$username = "blindow";
$password = "11708355";
$dbname = "blindow";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) 
    die("Connection failed: " . $conn->connect_error);

function showEmployees($conn) {
	$sql = "SELECT * FROM employees";
	$result = $conn->query($sql);
	displayTable($result);
}

function showCustomers($conn) {
        $sql = "SELECT * FROM customers";
        $result = $conn->query($sql);
        displayTable($result);
}

function showOffices($conn) {
        $sql = "SELECT * FROM offices";
        $result = $conn->query($sql);
        displayTable($result);
}

function showOrderDetail($conn) {
        $sql = "SELECT * FROM orderdetails";
        $result = $conn->query($sql);
        displayTable($result);
}

function showOrders($conn) {
        $sql = "SELECT * FROM orders";
        $result = $conn->query($sql);
        displayTable($result);
}

function showPayments($conn) {
        $sql = "SELECT * FROM payments";
        $result = $conn->query($sql);
        displayTable($result);
}

function showProductLines($conn) {
        $sql = "SELECT * FROM productlines";
        $result = $conn->query($sql);
        displayTable($result);
}

function showProducts($conn) {
        $sql = "SELECT * FROM products";
        $result = $conn->query($sql);
        displayTable($result);
}


function displayTable($result) {
	echo "<table border='1'>";
	$i = 0;
	while($row = $result->fetch_assoc())
	{	
    		if ($i == 0) {
      			$i++;
      			echo "<tr>";
      			foreach ($row as $key => $value) {
        			echo "<th>" . $key . "</th>";
     		 	}
      			echo "</tr>";
    		}	
    		echo "<tr>";
    		foreach ($row as $value) {
      		echo "<td>" . $value . "</td>";
    		}
    		echo "</tr>";
	}	
	echo "</table>";
}


if (isset($_POST['element_1'])) {
	$sql = $_POST['element_1'];
	$result = $conn->query($sql);
	displayTable($result);


}


mysqli_close($conn);

















?>
