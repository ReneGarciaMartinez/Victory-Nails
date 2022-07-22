<?php

 include("controllers/confi.php");

 if(isset($_SESSION["usuario"])){
   header();
 }else{ 

    principal();

     }

?>