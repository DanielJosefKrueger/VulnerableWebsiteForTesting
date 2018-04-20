


<?php
  echo $_COOKIE["BestCookieEuWest"];
  if($_COOKIE["BestCookieEuWest"]==NULL){
    header("Location: index.html");
    die();
  }
?>


<html>
<body>
  <h1>Please dont insert bad things in my database. Thank you =)</h1>
  <form action="addzitat.php" method="post">
    <input name="text"  value="Zitat eingeben"/>
    <input type="submit" name="my_form_submit_button"
           value="Zitat speichern"/>
    </form>
</body>
</html>
