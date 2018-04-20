


<?php
  if($_COOKIE["BestCookieEuWest"]!=NULL){
    $zitat = $_POST['text'];
    $conn = mysqli_connect('db', 'user', 'test', "myDb");
    $sql = "INSERT into zitate (text) VALUES ('$zitat') ";
    $result = mysqli_query($conn, $sql);
    echo ("Zitat hinzugefügt");
    echo('<script type="text/javascript">  window.location= "showzitate.php";</script>');
  }
?>
