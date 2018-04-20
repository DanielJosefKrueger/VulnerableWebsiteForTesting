


<?php
  if($_COOKIE["BestCookieEuWest"]!=NULL){
    $conn = mysqli_connect('db', 'user', 'test', "myDb");

    #$sql = "INSERT into zitate (text) VALUES ('Quidquiad agis, prudeneter agas et respice finem') ";
    #$result = mysqli_query($conn, $sql);

    $query = 'SELECT * From zitate';
    $result = mysqli_query($conn, $query);
    echo '<table class="table table-striped">';
    echo '<thead><tr><th></th><th>Zitat</th></tr></thead>';
    while($value = $result->fetch_array(MYSQLI_ASSOC)){
        echo '<tr>';
        echo '<td><a href="#"><span class="glyphicon glyphicon-search"></span></a></td>';
        foreach($value as $element){
            echo '<td>' . $element . '</td>';
        }

        echo '</tr>';
    }
    echo '</table>';


  }
?>


<form action = "" method = "post">
  <input type = "submit" name ="add" value="Weitere Zitate hinzufügen"/>
</form>


<form action = "" method = "post">
  <input type = "submit" name ="remove" value="Zitate entfernen"/>
</form>



<?php

function deleteZitate(){
  $conn = mysqli_connect('db', 'user', 'test', "myDb");
  $sql = "Delete from zitate";
  $result = mysqli_query($conn, $sql);


  echo('<script type="text/javascript">  window.location= "showzitate.php";</script>');
}

if(isset($_POST["remove"])){
  deleteZitate();
}

if(isset($_POST["add"])){
  echo('<script type="text/javascript">  window.location= "formzitate.php";</script>');
}

?>
