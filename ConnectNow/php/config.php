<?php
 $conn = mysqli_connect("localhost", "root", "","connectnow");
 if(!$conn){
  echo "Database connected" .mysqli_connect_error();
 }

?>