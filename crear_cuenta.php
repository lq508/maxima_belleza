<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="./css/crear_cuenta.css">

  </head>
  <body>
    <header>

      <nav>
        <div class="logo_header">

          <img src="./images/logo_maxima_2.png" alt="logo de maxima belleza">

        </div>





      </nav>
      <div class="breadgrump">

        <h1> Crear cuenta   </h1>

      </div>


    </header>



    <section>
      <div class="content_formulario">


              <div class="formulario_creacion">

                <form class="" action="./clases_php/crear_usuario.php" method="POST">

                  <h2> Correo  </h2>
                  <input class="email_usuario" type="email" name="email_usuario" value="" required>
                  <h3> Contraseña  </h3>
                  <input class="password" type="password" name="password" value="" required>
                  <h3> Confirmacion contraseña  </h3>
                  <input class="password_confirmacion" type="password" name="password_confirmacion" value="" required>

                  <h3> Contraseña unica  </h3>
                  <input class="password_unica" type="password" name="password_unica" value="" required>

                  <br>
                  <input class="boton_creacion_categorias" type="submit" name="" value="Ingresar" required >
                </form>



              </div>

              <a href="login.php"> acceder </a>

      </div>




    </section>






    <footer>
      <div class="logo_footer">

        <img src="./images/logo_maxima_2.png" alt="logo de maxima belleza">


      </div>

      <div class="footer_opciones">

        <ul class="menu_footer__opciones">

          <li > Inicio </li>
          <li> Nosotros  </li>
          <li> Contacto  </li>

          <li> Productos  </li>




        </ul>

      </div>





    </footer>










  </body>
</html>
