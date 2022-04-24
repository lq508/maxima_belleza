<?php
session_start();

 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width"/>

    <link rel="stylesheet" href="../css/informacion_producto.css">
  </head>
  <body>

    <header>

      <nav>
        <div class="logo_header">

          <img src="../images/logo_maxima_2.png" alt="logo de maxima belleza">

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

        <h1>  Producto: <?php echo $_SESSION["producto_seleccionado"]["nombre_producto"]  ?> </h1>

      </div>


    </header>



    <section class="session_1">

      <div class="imagen">

      <?php
        $ruta_imagen = "http://localhost/maxima_belleza/clases_php/" . $_SESSION["producto_seleccionado"]["imagen_producto"];
      ?>

        <img class="imagen_producto" src=<?php echo $ruta_imagen?>  alt="esto es una imagen ">

      </div>

      <div class="informacion">

        <p class="informacion_descripcion"> <?php echo $_SESSION["producto_seleccionado"]["descripcion"]  ?> </p>

      </div>





    </section>

    <div class="boton_formulario">

      <?php
      $valor_formulario = "../clases_php/compra.php?id_producto=" . $_SESSION["producto_seleccionado"]["id"];
       ?>

      <form class="" action=<?php echo $valor_formulario ?>  method="post">

        <input class="boton_compra" type="submit" name="" value="Comprar">

      </form>

    </div>









        <footer>
          <div class="logo_footer">

            <img src="../images/logo_maxima_2.png" alt="logo de maxima belleza">


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


        <script src="../javascript/responsive.js">

        </script>


        <script type="text/javascript">



        </script>







  </body>
</html>
