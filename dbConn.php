<?php

    $servername = "54.175.23.88";
    $username = "root";
    $password = "secretpassword";
    $dbname = "pictures";

    // Create connection
    $conn = mysql_connect($servername, $username, $password);
    $db = mysql_select_db($dbname, $conn);



    $query = mysql_query("SELECT images.imageurl, users.firstname, users.lastname, users.username FROM images INNER JOIN users ON users.userid = images.userid WHERE images.private=0");
    $array = array();

    $index = 0;
    while($row = mysql_fetch_assoc($query)){
      $array[$index] = json_encode($row);
      $index++;
    }


    echo json_encode($array);

?>
