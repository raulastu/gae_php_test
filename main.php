<html>
  <head>
      <link type="text/css" rel="stylesheet" href="/stylesheets/main.css" />
    </head>
  <body>
    <?php

        // $db = new PDO('mysql:unix_socket=/cloudsql/round-device-509:round-device-509:cloudsqltest;charset=utf8',
        // 'root',
        // 'root');
      echo 'ECHOING THIS';
        $user='root';
        $password='root';
        $projectId='round-device-509';
        $sqlinstance='cloudsqltest';
        // $conn = new mysql_connect('173.194.83.192', $user, $password);
        // $conn = new mysql_connect('localhost', $user, $password);
        $conn = new mysql_connect(':/Applications/MAMP/tmp/mysql/mysql.sock', $user, $password);
        
        

        $db_selected = mysql_select_db('a',$conn);

        if($db_selected){
          die('Cant use db:'.mysql_error());
        }

        // perform query

        $sql = 'SELECT * FROM a';
        $result = mysql_query($sql);
        while ($row=mysql_fetch_assoc($result)) {
          echo '<tr><td align=left>'.$row['hihi'].'</td>';
        }

        // $result = $mysqli_query($query,$conn);

        // $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        // printf ("%s (%s)\n",$row["Lastname"],$row["Age"]);


        // while($row = $result->fetch_array())
        //   {
        //   echo $row['FirstName'] . " " . $row['LastName'];
        //   echo "<br />";
        //   }

    
    ?>
    <form action="/sign" method="post">
      <div><textarea name="content" rows="3" cols="60"></textarea></div>
      <div><input type="submit" value="Sign Guestbook"></div>
    </form>
  </body>
</html>