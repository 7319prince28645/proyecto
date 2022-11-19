<?php
include("db.php");
    $username=$_POST["username"];
    $contraseña=$_POST["contraseña"];
    $sql=$conexion->query("SELECT * FROM user where username='$username' and contraseña='$contraseña' ");
    if ($datos=$sql->fetch_object()){

        header("location:../home.php");
    } else{
        echo '<script language="javascript">alert("Error de autentificacion");window.location.href="../index.php"</script>';
    }

?>