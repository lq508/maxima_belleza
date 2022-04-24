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

    <link rel="stylesheet" href="../../css/eliminar_producto.css">
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

            <img class="flecha_responsive" src="../images/flecha.svg" alt="flecha responsive ">

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

        <h1> Eliminar producto </h1>

      </div>


    </header>


    <section>

      <div class="content_eliminacion">

        <div class="productos">

        </div>
        <div class="buscador">

          <div class="buscador_categorias">

            <div class="eleccion">
              <p> Buscar por marcas </p>

              <img class="flecha_responsive" src="../../images/flecha.svg" alt="flecha responsive ">



            </div>
            <ul class="buscador_catergorias_ul">


            </ul>

          </div>


          <div class="buscador_marcas">
            <div class="eleccion">
              <p> Buscar por marcas </p>

              <img class="flecha_responsive" src="../../images/flecha.svg" alt="flecha responsive ">



            </div>

            <ul class="buscador_marcas_ul">

            </ul>


          </div>


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

          <a href="./admin/admin.php"> acceso </a>




        </footer>


        <script src="../../javascript/responsive.js">

        </script>



        <script src="../../javascript/eliminar_producto/boton_categorias.js">

        </script>

        <script src="../../javascript/eliminar_producto/llenado_boton_categorias.js">

        </script>

                <script src="../../javascript/eliminar_producto/consulta_inicial.js">

                </script>

                <script src="../../javascript/eliminar_producto/consulta_boton_categorias.js">

                  </script>

                  <script src="../../javascript/eliminar_producto/boton_marcas.js">

                  </script>
                  <script src="../../javascript/eliminar_producto/llenado_boton_marcas.js">

                  </script>






  </body>
</html>
