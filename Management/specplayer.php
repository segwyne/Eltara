<?php include('header.php'); 

$servername = "192.168.1.150";
$username = "judy";
$password = "5dragons";
$dbname = "Eltara";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$id=$_GET[PlayerID];
$sql = "SELECT * FROM Players WHERE PlayerID=".$id;
$result = $conn->query($sql); 

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo '<h1>'.$row['FirstName'].' '.$row['LastName'].'</h1><div id="address"><p>'.$row['Address'].'<br />'.$row['City'].', '.$row['State'].' '.$row['Zip'].'</p></div>';
    echo '<p class="label">Staff?</p><p> '.$Staff.'</p>';
  }
} 

$conn->close();

include('footer.php') ?>
