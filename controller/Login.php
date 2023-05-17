<?php
// Clase que tendrá el usuario y la contraseña de los inputs
class Login {
    protected $user;
    protected $password;

    public function __construct($user, $password) {
        $this->user = $user;
        $this->password = $password;
    }

    public function getUser() {
        return $this->user;
    }

    public function getPassword() {
        return $this->password;
    }
}

// Clase que tiene el usuario y la contraseña correctos
class Autenticacion {
    private $user = 'fabian';
    private $password = 123;

    public function login(Login $sesion) {
        if ($this->user == $sesion->getUser() && $this->password == $sesion->getPassword()) {
            return true; // Usuario y contraseña correctos
        } else {
            return false; // Usuario o contraseña incorrectos
        }
    }
}

// Crear objeto Login con los valores enviados
$sesion = new Login($_POST['user'],$_POST['password']);
$autenticacion = new Autenticacion();
$login = $autenticacion->login($sesion);


if ($login) {
    echo '<script>window.location.href = "../view/Home.php";</script>';
} else {
    echo '<script>
    alert("Usuario o contraseña incorrectos");
    window.location.href = "../view/";
    </script>';
}
?>
