 <?php
//change when original
$servername = "localhost";
$sqlusername = "root";
$sqlpassword = "";
$sqldb="threadsdb";
// Create connection
$conn = new mysqli($servername, $sqlusername, $sqlpassword,$sqldb);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?> 