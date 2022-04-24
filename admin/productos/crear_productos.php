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

        <h1> Crear productos </h1>

      </div>


    </header>


    <section class="seccion_1">

      <div class="formulario_creacion">

        <form class="formulario_envio" action="../../clases_php/creacion_productos.php" method="post" enctype="multipart/form-data">



        <h2> Nombre producto</h2>
        <input name="nombre_producto" type="text" name="" value="" required>


        <h3> Categoria </h3>

        <div class="categoria">

          <div class="eleccion">

            <p> Elige una categoria</p>

            <img class="flecha_responsive" src="../../images/flecha.svg" alt="flecha responsive ">


          </div>

          <ul class="categoria_ul">




          </ul>

        </div>


        <input type="text" class="categoria_escondido" name="categoria_escondido" value="escondido">

        <h3> Marca</h3>


        <div class="marcas">

          <div class="eleccion_marcas">

            <p> Elige una marca</p>

            <img class="flecha_responsive" src="../../images/flecha.svg" alt="flecha responsive ">


          </div>

          <ul class="marcas_ul">


          </ul>

        </div>

        <input type="text" class="marca_escondido" name="marca_escondido" value="escondido">


        <h3> Imagen </h3>
        <input type="file" name="imagen" value="" required>


        <h3>Descripción </h3>


        <textarea name="descripcion" rows="8" cols="80"   required></textarea>
        <h3>Precio </h3>
        <input type="text" name="precio" value="">
        <span> $</span>
        <h3>Tiendas con el producto   </h3>
        <label> <input type="checkbox" name="eleccion_ciudad_1" value="el tigre"> El Tigre </label>
        <label> <input type="checkbox" name="eleccion_ciudad_2" value="Pariaguan"> Pariaguan </label>
        <label> <input type="checkbox" name="eleccion_ciudad_3" value="Plaza bolivar"> Plaza Bolivar </label>
        <label> <input type="checkbox" name="eleccion_ciudad_4" value="San remo"> San Remo </label>
        <label> <input type="checkbox" name="eleccion_ciudad_5" value="Primera carrera"> Primera carrera </label>
        <br>
        <input type="submit" name="" value="Crear">


  </form>




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

        <script src="../../javascript/productos/consulta_categorias.js">

        </script>
        <script src="../../javascript/productos/consulta_marcas.js">

        </script>
        <script src="../../javascript/responsive.js">

        </script>


        <script src="../../javascript/productos/boton_categorias.js">

        </script>
        <script src="../../javascript/productos/boton_marcas.js">

        </script>












  </body>
</html>
