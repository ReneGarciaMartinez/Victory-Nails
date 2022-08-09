<?php

$conect= mysqli_connect("localhost","root","","victory nails");
$conect->set_charset("utf8");


if($_POST["correo"]  !="" && $_POST["contra"] !="" ){

    $correo= $_POST["correo"];
    $contra= $_POST["contra"];
     $log="SELECT *  FROM `usuarios` WHERE `correo` = '".$correo."' ";
     
$query = mysqli_query($conect,$log);
     if ($query->num_rows > 0){
         
   while($row = mysqli_fetch_array($query)){
       @session_start();
       $_SESSION["correo"]= $row["correo"];
    $_SESSION["pass"]= $row["password"];
       if(password_verify($contra,$_SESSION["pass"])){
       $_SESSION["id_user"]= $row["id_usuario"];
       $_SESSION["nombre"]= $row["nombre"];
       $_SESSION["apellidos"]= $row["apellidos"];
       $_SESSION["perfil"]= $row["id_perfil"];
       $_SESSION["direccion"]= $row["direccion"];
       $_SESSION["telefono"]= $row["telefono"];
       
     
    
       if($_SESSION["perfil"]==1){
        echo"<script type='text/javascript'>
        window.location='../vistas/home.php';
        </script>";
       }else{
        if($_SESSION["perfil"]==2)
        echo"<script type='text/javascript'>
        window.location='../vistas/productos.php';
        </script>";
       }
       
       }else {
         session_destroy();
        echo "<script type=\"text/javascript\">alert(\"Usuario o contraseña incorrectas\");</script>"; 
    
        echo"<script type='text/javascript'>
        window.location='../vistas/account.php';
        </script>";
       }
   }
        

     }else{  
        echo "<script type=\"text/javascript\">alert(\"2 Usuario o contraseña incorrectas\");</script>"; 
    
        echo"<script type='text/javascript'>
        window.location='../vistas/account.php';
        </script>";

           }

}else{ 

    echo "<script type=\"text/javascript\">alert(\"Formulario vacio\");</script>"; 
    
    echo"<script type='text/javascript'>
    window.location='../vistas/login.php';
    </script>";



}

?>