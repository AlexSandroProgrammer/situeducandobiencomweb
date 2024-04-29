<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../../resources/css/auth.css">
    <title>SITU || Sistema de Turnos Rutinarios</title>
    <link rel="shortcut icon" href="../../resources/images/logoSenaEmpresa.png" type="image/x-icon">
</head>

<body>
    <div class="wrapper">
        <nav class="nav">
            <div class="nav-logo">
                <p>SITU<span>.</span></p>
            </div>
            <div class="nav-button nav-menu" id="navMenu">
                <ul>
                    <li><a href="#" class="link active">Login</a></li>
                    <li><a href="#" class="link">Usuario Invitado</a></li>
                    <li><a href="https://senaempresalagranja.blogspot.com/" class="link">Regresar al Blog</a></li>
                </ul>
            </div>
            <div class="nav-menu-btn">
                <i class="bx bx-menu" onclick="myMenuFunction()"></i>
            </div>
        </nav>

        <!----------------------------- Form box ----------------------------------->
        <div class="form-box">

            <!------------------- login form -------------------------->

            <div class="login-container" id="login">
                <div class="top">
                    <header>Iniciar Sesion</header>
                    <span>Bienvenida Lider de Talentano Humano, Ingresa por favor tus credenciales para gestionar los
                        turnos de esta semana.</span>

                </div>
                <div class="input-box">
                    <input type="text" autofocus class="input-field" placeholder="Ingresa tu correo electronico">
                    <i class="bx bx-user"></i>
                </div>
                <div class="input-box">
                    <input type="password" class="input-field" placeholder="Ingresa tu contraseña">
                    <i class="bx bx-lock-alt"></i>
                </div>
                <div class="input-box">
                    <input type="submit" class="submit" value="Iniciar Sesion">
                </div>
                <div class="two-col">
                    <div class="two">
                        <label><a href="#">Olvidaste tu contraseña?</a></label>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <script>
        function myMenuFunction() {
            var i = document.getElementById("navMenu");
            if (i.className === "nav-menu") {
                i.className += " responsive";
            } else {
                i.className = "nav-menu";
            }
        }
    </script>


</body>

</html>