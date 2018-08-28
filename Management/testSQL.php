<?php
//Step1
 $db = mysqli_connect('192.168.1.150','judy','5dragons','Eltara')
 or die('Error connecting to MySQL server.');
?>

<?php include('header.php') ?>

 <h1>PHP connect to MySQL</h1>
  <div id="demo"></div>
<?php
//Step2
$query = "SELECT CharName, CharLvl, CharRace FROM Characters";
mysqli_query($db, $query) or die('Error querying database.');

$result = mysqli_query($db, $query);
$row = mysqli_fetch_array($result);

while ($row = mysqli_fetch_array($result)) {
 echo $row['CharName'] . ' ' . $row['CharLvl'] . ' ' . $row['CharRace'] . '<br />';
}
//Step 4
mysqli_close($db);
?>

<?php include('footer.php') ?>
