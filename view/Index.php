<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
</head>

<body>
    <section>
        <div class="login-box">
            <form action="../controller/Login.php" method="post">
                <h2>Login</h2>
                <!--Input del usuario--> <!---->
                <div class="input-box">
                    <span class="icon"><i class="fa-regular fa-user"></i></span>
                    <input type="text" name="user" required>
                    <label for="">Usuario</label>
                </div>
                <!--Input de la password-->
                <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-key"></i></span>
                    <input type="password" name="password" required>
                    <label for="">Password</label>
                </div>
                <!--recuerdame y olvido-->
                <div class="remember-forgot">
                    <label for=""><input type="checkbox">Recuerdame</label>
                    <a href="">Olvido la contraseña?</a>
                </div>
                <!---->
                <button type="submit">Iniciar sesion</button>
                <div class="register-link">
                    <p>No tienes una cuenta? <a href="#">Registrate</a></p>
                </div>
            </form>
        </div>
    </section>
</body>

</html>