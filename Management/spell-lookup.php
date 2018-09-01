<?php
//Step1
 $db = mysqli_connect('192.168.1.150','judy','5dragons','Eltara')
 or die('Error connecting to MySQL server.');
?>

<?php include('header.php') ?>

 <h1>Spell Lookup</h1>
  <div><h2>Please choose from one of these Spells:</h2><br /></div>
<?php
//Step2
$query = "SELECT SpellID, SpellName, Element FROM Spells ORDER BY Element, SpellName";
mysqli_query($db, $query) or die('Error querying database.');

$result = mysqli_query($db, $query);

echo '<div class="faux-table">';
while ($row = mysqli_fetch_array($result)) {
  echo '<a href="speccharacter.php?SpellID='.$row['SpellID'].'"><div class="pseudo-table">'.$row['Element'].'&nbsp&nbsp&nbsp&nbsp&nbsp'.$row['SpellName'].'</div></a>';
}
echo '</div>';

//Step 4
mysqli_close($db);
?>

<?php include('footer.php') ?>

 
