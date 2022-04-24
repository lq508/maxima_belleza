

<?php
include("conexion.php");


$usuario = $_POST["email_usuario"];
$password = $_POST["password"];
$password_confirmacion =  $_POST["password_confirmacion"];
$password_unica = $_POST["password_unica"];



class Crear_Usuario{
  private $SALT = "MiSalt";
  private $conexion = null;
  private $usuario = null;
  private $password = null;
  private $password_confirmacion = null;
  private $password_unica = null;
  function __construct($conexion , $usuario , $password  , $password_confirmacion , $password_unica){

    $this->conexion = $conexion;
    $this->usuario = $usuario;
    $this->password= $password;
    $this->password_confirmacion=$password_confirmacion;
    $this->password_unica = $password_unica;
    $validacion =   $this->validando_email();

    if($validacion){
        echo "el email ya esta registrado por favor coloque otro <a href='../crear_cuenta.php'> Crear cuenta </a>";
    } else {
      $this->Creando();

    }



  }


  function Creando(){

    $consulta_password = "SELECT * FROM password_unica where id=2";
    $encriptado = hash('sha512', $this->SALT . $this->password_unica);
    $resultado = $this->conexion->query($consulta_password)->fetch_assoc();
    if($encriptado == $resultado["unica_password"]){

      if($this->password == $this->password_confirmacion){

        $email_encriptado =  hash("sha512" , $this->SALT . $this->usuario);
        $contraseña_encriptada =  hash("sha512" , $this->SALT . $this->password);


        $consulta_creacion = "insert into usuario(email, password_usuario) values(?,?)";
        $ejecucion = $this->conexion->prepare($consulta_creacion);
        $ejecucion->bind_param("ss" , $email_encriptado , $contraseña_encriptada);
        $confirmacion =  $ejecucion->execute();
        $ejecucion->close();


        echo $confirmacion;
        if($confirmacion){

          echo "La insercion fue exitosa !!! <a href='../login.php'>  Iniciar session    <a>";

        } else {
          echo "Lo siento tengo un error  intentalo mas tarde  <a href='../login.php'>  Iniciar session    <a> ";

        }


      } else {
        echo "la contraseña y la contraseña de confirmacion no son iguales  <a href='../crear_cuenta.php'>  Crear cuenta    <a>";

      }

    } else {
      echo "la contraseña unica es incorrecta   <a href='../crear_cuenta.php'>   Crear cuenta     <a>";

    }




  }


  function validando_email(){
    $consulta = "SELECT * from usuario";
    $resultado = $this->conexion->query($consulta);
    $email_encriptado =  hash("sha512" , $this->SALT . $this->usuario);


    while( $rows= mysqli_fetch_assoc($resultado)){

      if($email_encriptado == $rows["email"]){
          return true;

      } else {
        return false;
      }



    }




  }




}




$objeto = new Crear_Usuario($conexion, $usuario , $password , $password_confirmacion , $password_unica);





 ?>
