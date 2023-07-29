<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){
	if (isset($_POST['char'])) {
	 $step = $_POST['char'];
	}
	$sel = "SELECT id FROM movement ORDER BY id DESC LIMIT 1";
	$result = mysqli_query($conn, $sel);
	$id = NULL;
	if(mysqli_num_rows($result) > 0){
	   $row=mysqli_fetch_assoc($result);
	   $id = (int)$row['id'] + 1;
	}else{
	   $id = 1;
	}

	$insert = "INSERT INTO movement(id, step) VALUES('$id','$step')";
	mysqli_query($conn, $insert);
	header('location:result.php');
};
?>

<!DOCTYPE html>
<html>
<head>
 <title>Centered Buttons</title>
 <style>
  .container {
   
   text-align:center;
    position: absolute;
    left: 40%;
    top: 30%;

  }
  
  button {
   margin: 10px;
   padding: 10px 20px;
   font-size: 16px;
   border: 1px solid black;
   border-radius: 10px;
   cursor: pointer;
  }
  
  button:hover {
   border: 2px solid black;
   border-color: red;
  }
 </style>
</head>
<body>
 <div class="container">
	<form action="" method="post">
	<input type="hidden" name="char" id="char">
	  <button type="submit" onclick="setChar('F')" name="submit">Forward</button><br><br>
	  <button type="submit" onclick="setChar('L')" name="submit">Left</button>
	  <button type="submit" onclick="setChar('S')" name="submit">Stop</button>
	  <button type="submit" onclick="setChar('R')" name="submit">Right</button><br><br>
	  <button type="submit" onclick="setChar('B')" name="submit">Backward</button>
	</form>
	 <script>
  function setChar(char) {
   document.getElementById("char").value = char;
  }
 </script>
 </div>
</body>
</html>