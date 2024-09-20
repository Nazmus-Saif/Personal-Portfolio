<?php
  $conn = new mysqli("localhost", "root", "", "Saif");
  if($conn -> connect_error) {
      die("Connection Failed: " . $conn -> connect_error);
   }
?>