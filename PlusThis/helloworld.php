<?php
  if( isset($_POST['name']) ) {
    /* Assumes MySQL is installed with the creedentials of 'user@localhost',
       identified by 'password', with a database named 'db' */
    if(strlen($_POST['name']) < 51 && !empty($_POST['name'])) {
      $con = new mysqli("localhost","user","password","db");
      if($con->connect_error) {
        die('Failed to connect to MySQL server: ' . $con->connect_error);
      }
      /* Assumes on db, there is a table 'names', with an auto increment 
         primary key of 'id' of type int, and a field 'name' of type text.
         Binding should be the safest way, since it is not modifying strings  */
      $query = $con->prepare('INSERT INTO names (name) VALUES( ? );');
      $query->bind_param('s',$_POST['name']);
      if($query->execute()) {
        echo '<p>Record updated successfully.</p>';
      } else {
        echo 'Error updating database: '. $con->error;
      }
      $con->close();
    }
    else if( empty($_POST['name'])) {
      echo '<p>Error: Name is empty.</p>';
    }
    else {
      echo '<p>Error: Name is too long (over 50 characters)</p>';
    }
  }
  echo '<form action = "index.php" method="post">
<table id="contact"><tr><td class = "right"><label for="name">Please enter a name</label></td><td class = "left"> <input type = "text" name="name" /></td><tr><td class = "right"></td><td class = "left"><input type = "submit" value ="Submit" /></td></tr></table>
</form>';
echo '<p><a href="records.php">Click here to view records</a></p>';
?>
