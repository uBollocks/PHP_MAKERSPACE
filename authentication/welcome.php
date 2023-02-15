<?php 
   session_start();
   
   if(isset($_SESSION['log']))
   {

      
   }
   
   
   
   else
   {
      header('Location: index.php');
      exit();
   }
   
?>