<?php
// mysql:unix_socket=/cloudsql/hello-php:my-cloudsql-instance;charset=utf8

        // $user='root';
        // $password='root';
        // $projectId='round-device-509';
        // $sqlinstance='cloudsqltest';
echo 'echoing';

$db = new PDO(
  'mysql:unix_socket=/cloudsql/round-device-509:cloudsqltest;charset=utf8',
  'root',
  'root'
);
// 
// $db = new PDO(
//   'mysql:host=localhost:8889;dbname=gae_test;charset=utf8',
//   'root',
//   'root'
// );


// $db = new PDO(
//   'mysql:host=173.194.83.192;dbname=gae_test;charset=utf8',
//   'root',
//   'root'
// );
// round-device-509:cloudsqltest
// $db = new PDO('mysql:host=localhost;dbname=testdb;charset=utf8', 'username', 'password');


try {
    //connect as appropriate as above
    //invalid query!
    foreach($db->query('SELECT * FROM gae_table') as $row){
    	echo $row['id'].' '.$row['name'];
    } 
	
} catch(PDOException $ex) {
    echo "An Error occured!"; //user friendly message
    some_logging_function($ex->getMessage());
}