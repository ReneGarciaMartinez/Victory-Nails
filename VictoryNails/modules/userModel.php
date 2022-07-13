<?php
//Funcion para registro de usuario nuevo
function addUsuario($correo,$nombre,$apellido,$hash){
    //conexion a la BD
    $conect= mysqli_connect("localhost","root","","victory nails");
    $conect->set_charset("utf8");
    $sql= "SELECT correo FROM `usuarios`";
$getUs= mysqli_query($conect,$sql);
$c=0;
//checamos si existe el correo para no tener correos repetidos
if($getUs->num_rows>0){
        while($row = mysqli_fetch_array($getUs)){
     if ($row["correo"]==$correo) {
        echo "<script type=\"text/javascript\">alert(\"correo existente, intente con otro correo.\");</script>";
        echo"<script type='text/javascript'>
        window.location='../../vistas/singup.php';
        </script>";
        $c=1;
     }
   
        }
    }
    //si no hay correos repetidos agregamos el nuevo correo a la BD
if ($c==0) {
    $sql= "INSERT INTO `usuarios` (`correo`, `nombre`, `apellidos`, `password`,`id_perfil`) VALUES ('$correo','$nombre', '$apellido','$hash', '1')";
    $agregarUser= mysqli_query($conect,$sql);
    if($agregarUser){
        echo "<script type=\"text/javascript\">alert(\"Usuario Agregado\");</script>";
        echo"<script type='text/javascript'>
        window.location='../../vistas/account.php';
        </script>";
    }else{
        echo"fallo";
    }
}else{
    echo "<script type=\"text/javascript\">alert(\"Fallo al agregar el usuario\");</script>";
    echo"<script type='text/javascript'>
    window.location='../../vistas/singup.php';
    </script>";
}
    
}
?>