<?php
include("conexion.php");
session_start();
$email = $_POST["email_usuario"];
$password = $_POST["password"];

echo $password;
echo "<br>";



class Session{
  private $conexion=null;
  private $password = null;
  private $email = null;
  private $SALT = "MiSalt";
  private $usuario_db = null;

  function __construct($conexion , $password ,$email ){
    $this->conexion = $conexion;
    $this->password = $password;
    $this->email = $email;
    $this->encriptando();
    $this->consultando();

  }



  function encriptando(){
    $this->email = hash("sha512" , $this->SALT . $this->email );
    $this->password = hash("sha512" , $this->SALT . $this->password);


  }

  function consultando(){
    $validacion = 0;
    $consulta = "SELECT * FROM usuario";
    $resultado = $this->conexion->query($consulta);

    echo $this->password;


    while($rows = mysqli_fetch_assoc($resultado)){

      if($this->email == $rows["email"]){


        if($this->password == $rows["password_usuario"]){

// telefono 04165968924
          $validacion=1;

        }


      }

     }

     echo $validacion;

     if($validacion){

       $_SESSION["usuario"] = $this->email;

       header("Location: ../admin/admin.php");

     }else{

       echo " el usuario o contraseña son incorrectos, intentelo de nuevo <a href='../login.php'> Inicio de session </a> ";

     }

  }



}

$objeto = new Session($conexion, $password , $email);









 ?>
