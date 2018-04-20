<?php
  $name = $_POST['name'];
  $kw = $_POST['kw'];
  // Connexion et sélection de la base
  $conn = mysqli_connect('db', 'user', 'test', "myDb");
  $query = "SELECT * From User WHERE name='$name' AND pw='$kw'";

  if($result = mysqli_query($conn, $query)){

    if($result->num_rows>0){
	setcookie(BestCookieEuWest, bestValueEuWest);
      echo "login erolgreich";

    }else{
      header("Location: index.html");
      die();
    }
  }else{
	header("Location: index.html");
     	die();
	}
  mysqli_close($conn);
?>
