<?php
session_start();
if(!isset($_SESSION["usuario"])){
  header("Location: error_session.php");
}


 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <link rel="stylesheet" href="../../css/crear_productos.css">
  </head>
  <body>

    <header>

      <nav>
        <div class="logo_header">

          <img src="../../images/logo_maxima_2.png" alt="logo de maxima belleza">

        </div>

        <div class="menu_header">

          <div class="menu_header__responsive">

            <p> Menú </p>

            <img class="flecha_responsive" src="../../images/flecha.svg" alt="flecha responsive ">

          </div>

          <ul class="menu_header__opciones">


            <li class ="menu_header__opciones_li"> <a href="http://localhost/maxima_belleza/admin/admin.php"> Inicio </a> </li>


            <li class ="menu_header__opciones_li"> <a href="http://localhost/maxima_belleza/admin/productos/productos.php"> Productos </a>   </li>
            <li class ="menu_header__opciones_li"> <a href="http://localhost/maxima_belleza/admin/marca/marca.php"> Marcas </a>  </li>

            <li class ="menu_header__opciones_li"> <a href="http://localhost/maxima_belleza/admin/categorias/categoria.php"> Categorias </a>  </li>




          </ul>

        </div>



      </nav>
      <div class="breadgrump">

        <h1> Bienvenido administrador !! </h1>

      </div>


    </header>


    <section class="seccion_1">

      <div class="formulario_creacion">

        <h2> Nombre producto</h2>
        <input type="text" name="" value="">


        <h3> Categoria </h3>

        <div class="categoria">

          <div class="eleccion">

            <p> Elige una categoria</p>

            <img class="flecha_responsive" src="../../images/flecha.svg" alt="flecha responsive ">


          </div>

          <ul class="categoria_ul">

            <li> uno </li>
            <li> dos </li>

          </ul>

        </div>

        <h3> Marca</h3>

        <br>

        <div class="categoria">

          <div class="eleccion">

            <p> Elige una marca</p>

            <img class="flecha_responsive" src="../../images/flecha.svg" alt="flecha responsive ">


          </div>

          <ul class="categoria_ul">

            <li> uno </li>
            <li> dos </li>

          </ul>

        </div>


      </div>







    </section>






        <footer>
          <div class="logo_footer">

            <img src="../../images/logo_maxima_2.png" alt="logo de maxima belleza">


          </div>

          <div class="footer_opciones">

            <ul class="menu_footer__opciones">

        <li>     <a href="http://localhost/maxima_belleza/admin/admin.php"> Inicio </a> </li>
      <li>      <a href="http://localhost/maxima_belleza/admin/productos/productos.php"> Productos </a>  </li>
      <li>      <a href="http://localhost/maxima_belleza/admin/marca/marca.php"> Marcas </a> </li>

 <li><a href="http://localhost/maxima_belleza/admin/categorias/categoria.php"> Categorias </a> </li>



            </ul>

          </div>







        </footer>


        <script src="../../javascript/responsive.js">

        </script>

        <script src="../../javascript/productos/boton_categorias.js">

        </script>








  </body>
</html>
