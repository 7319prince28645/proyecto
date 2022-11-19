<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/normalize.css">
    <link rel="stylesheet" href="estilos/style.css">
    <script src="https://kit.fontawesome.com/461bd6f27a.js" crossorigin="anonymous"></script>
    <title>LOGIN</title>
</head>
<body>
<header class="navbar">
    <h1 class="letra1">GRUPO 1</h1>
</header>
<main class="fondo-atras">
    <div class="contenedor">
        <div class="foto">
            <img src="imagenes/3d.png">
        </div>
        <div class="registrar">
                <div class="nav__header">
                    <div class="contenedor__input"><h1 id="letra">BIENVENIDO</h1></div>
                    <div class="contenedor__input"><i class="input__registrar fa-solid fa-people-robbery fa-2x"></i></div>
                </div>
                <form class="nav__cuerpo" action="modelo/validar.php" method="POST">
                    <div class="contenedor__input"><input type="text" name="username" class="input__registrar"  placeholder="INGRESAR USUARIO" required></div>
                    <div class="contenedor__input"><input type="password" name="contraseña" class="input__registrar" placeholder="INGRESAR CONTRASEÑA" required></div>
                    <div class="contenedor__input"><input type="submit" name="btn-ingresar" class="button" value="INGRESAR"></div>
                </form>
        </div>
    </div>
</main>  

    
</body>
</html>