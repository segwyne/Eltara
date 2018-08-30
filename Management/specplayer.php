<?php include('header.php'); 

$db = mysqli_connect('192.168.1.150','judy','5dragons','Eltara')
  or die('Error connecting to MySQL server.');

$id = $_GET['PlayerID']; 
$sql = mysqli_query($db,'SELECT * FROM Players WHERE PlayerID = "'.$id.'"');

echo ["PlayerID"].': '.["LastName"].', '.["FirstName"];

mysqli_close($db);

include('footer.php') ?>
