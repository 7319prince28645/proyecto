<?php
include("db.php");
    $username=$_POST["username"];
    $contraseña=$_POST["contraseña"];
    $sql=$conexion->query("SELECT * FROM invoice_user where email='$username' and password='$contraseña' ");
    if ($datos=$sql->fetch_object()){

        header("location:../invoice_list.php");
    } else{
        echo '<script language="javascript">alert("Error de autentificacion");window.location.href="../index.php"</script>';
    }

?>