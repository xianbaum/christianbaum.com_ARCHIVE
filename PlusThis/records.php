<?php
$title = 'Records - Hello World!';
$back = '../';
require '../template.php';
pheader();
pmain();
$con = new mysqli("localhost","user","password","db");
$query = "SELECT name FROM names";
$result = $con->query($query);
if($result->num_rows > 0){
  while($row = $result->fetch_assoc()) {
    echo "<p>".$row['name']."</p>";
  }
}
else {
  echo '<p>There are no records to display.</p>';
}
$con->close();
echo '<p><a href="index.php">Click here to go back</a></p>';
pfooter();
?>
