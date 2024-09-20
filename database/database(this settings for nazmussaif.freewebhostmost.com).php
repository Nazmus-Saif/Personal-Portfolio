<?php
  $conn = new mysqli("localhost","pgvpwfqh_Saif","MD26842662NZ362968S7724A3162I4412F","pgvpwfqh_Autobiography");
  if($conn -> connect_error) {
      die("Connection Failed: " . $conn -> connect_error);
   }
?>