<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'mm');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   $sql='select * from login';
   $result = mysqli_query($db, $sql);
   $json_array=array();
   while ($row = mysqli_fetch_array($result)) {
      $json_array[]=$row;
   }
   echo json_encode($json_array);
?>