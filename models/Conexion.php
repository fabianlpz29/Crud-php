<?php
//clase de conexion
class ConexionPDO{
    private $host; //nombre del host
    private $db; //nombde de la base de datos
    private $user; //nombre del usuario
    private $password; //password
    private $conexion;

    public function __construct($host,$db,$user,$password)
    {
        $this->host = $host;
        $this->db = $db;
        $this->user = $user;
        $this->password = $password;
    }
  
    //funcion para conectar la base de datos
    public function Conectar(){
        try {
            $opcion =  array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            );
            $this->conexion = new PDO('mysql:host='.$this->host.';
            db='.$this->db,
            $this->user,
            $this->password,
            $opcion
            ); //conexion a la base de datos
            //comprobar si conecto o no
            if($this->conexion){
                echo "Conexion exitosa";
            }else{
                echo "Fallo la conexion";
            }
        } catch (PDOException $e) {
            echo "error de conexion".$e->getMessage();
            die();
        }   
    }

    //funcion para cerrar la conexion a la base de datos
    public function Desconectar(){
        $this->conexion = null;
        echo "Base de datos desconectada";
    }

}
$host = "localhost";
$db = "dbclasepoo";
$user = "root";
$password = "";
?>