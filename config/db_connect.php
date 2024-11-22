<?php

   $conn = mysqli_connect('localhost','hamid','test123','coffee');

   if(!$conn){
      echo 'connection error'.mysqli_connect_error();
   }

?>