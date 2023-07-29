<?php
@include 'config.php';

session_start();

$sel = "SELECT * FROM movement ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $sel);
$id = NULL;
if(mysqli_num_rows($result) > 0){
   $row=mysqli_fetch_assoc($result);
   echo $row['step'];

}else{
   echo "Not Found data";
}

mysqli_close($conn);
?>