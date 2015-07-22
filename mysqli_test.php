<?php

echo 'echoing mysqli </br>';

// local php - local mysql - working
$mysqli = new mysqli('localhost:8889', 'root', 'root', 'gae_test');
  

// local php - Cloud SQL - working

// $mysqli = new mysqli('173.194.83.192', 'root', 'root', 'gae_test');


// GAE - Cloud SQL

// $mysqli = new mysqli(null, 'root', '', 'gae_test', null, '/cloudsql/round-device-509:cloudsqltest');


$query = "SELECT * FROM gae_table";
$result = $mysqli->query($query) or die ($mysqli->error.__LINE__);

if($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo stripslashes($row['id']).' '.stripslashes($row['name']).'<br/>';
  }
}