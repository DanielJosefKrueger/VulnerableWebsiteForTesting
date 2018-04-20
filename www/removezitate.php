<?php
$conn = mysqli_connect('db', 'user', 'test', "myDb");
$sql = "Delete from zitate";
$result = mysqli_query($conn, $sql);
echo ("Zitate gelöscht");
 ?>
