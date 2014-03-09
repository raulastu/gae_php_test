<?php

echo 'echoing PDO <br/>';


//  from local php -  local Mysql - working

// $db = new PDO(
//   'mysql:host=localhost:8889;dbname=gae_test;charset=utf8',
//   'root',
//   'root'
// );

//  local php - Cloud SQL - working

// $db = new PDO(
//   'mysql:host=173.194.83.192;dbname=gae_test;charset=utf8',
//   'root',
//   'root'
// );


// From GAE to Cloud SQl -  working
$db = new PDO(
  'mysql:unix_socket=/cloudsql/round-device-509:cloudsqltest;dbname=gae_test;charset=utf8',
  'root',
  ''
);

// this is a change 



 foreach($db->query('SELECT * FROM gae_table') as $row){
      echo $row['id'].' '.$row['name']."<br/>";
} 
