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

$id=$_GET[CharID];
$sql = "SELECT * FROM Characters WHERE CharID=".$id;
$result = $conn->query($sql); 

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo '<h1>'.$row["CharName"]. '</h1><p>Character Level: '.$row["CharLvl"].'</p><p>Race: '.$row["CharRace"].'</p><p>Deaths: '.$row["Deaths"].'</p>';
  }
} 

$conn->close();


include('footer.php') ?>
