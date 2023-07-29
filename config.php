<?php
    $dbName = 'move_db';
    $conn = mysqli_connect('localhost','root','',$dbName);
    if(mysqli_connect_errno()){
        die("Failed to connect with MySQL :".mysqli_connect_errno());
    }
  
?> 
