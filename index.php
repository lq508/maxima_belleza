<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/main.css">

    <meta name="viewport" content="width=device-width"/>

    <title></title>
  </head>
  <body>
    <header>

      <nav>
        <div class="logo_header">

          <img src="./images/logo_maxima_2.png" alt="logo de maxima belleza">

        </div>

        <div class="menu_header">

          <div class="menu_header__responsive">

            <p> Menú </p>

            <img class="flecha_responsive" src="./images/flecha.svg" alt="flecha responsive ">

          </div>

          <ul class="menu_header__opciones">


            <li class ="menu_header__opciones_li"> Inicio </li>


            <li class ="menu_header__opciones_li"> Nosotros  </li>
            <li class ="menu_header__opciones_li"> Contacto  </li>

            <li class ="menu_header__opciones_li"> <a href="./paginas/productos.php"> Productos  </a>  </li>




          </ul>

        </div>
        <ul class="menu_header__opciones_2">


          <li class ="menu_header__opciones_li"> Inicio </li>


          <li class ="menu_header__opciones_li"> Nosotros  </li>
          <li class ="menu_header__opciones_li"> Contacto  </li>

          <li class ="menu_header__opciones_li"> Productos  </li>




        </ul>



      </nav>

      <div class="content_breadgrump">

        <div class="breadgrump">

          <img src="./images/breadgrump.jpg" alt="">
          <img src="./images/makeup_2.jpg" alt="">
          <img src="./images/makeup_3.jpg" alt="">

          <h1> ¡¡Tenemos los mejores productos de belleza!!</h1>

          <h2 class="titulo_2"> Ofrecemos un servicio de calidad  </h2>

          <h2 class="titulo_3"> ¡¡No esperes más!! accede y observa todo nuestro inventario </h2>

        </div>


      </div>


    </header>


    <section class="content_informacion_3">


<div class="informacion_3">

      <div class="imagen_parrafo_3">


      </div>

      <div class="informacion_parrafo">


        <p> ¡¡ Accede a la una gran cantidad de productos en nuestras tiendas !!</p>

      </div>


      </div>


</section>



    <section class="informacion_1">

    <div class="informacion_content_1">

    <p class="titulo_informacion"> Maxima Belleza</p>

<img class="imagen_inicial" src="./images/imagen_inicial.jpg" alt="">

<p class="parrafo_informacion"> Todo lo mejor para ti</p>


    </div>



</section>

<section class="seccion_informacion">

 




  <div class="informacion">

    <h2 class="titulo_informacion">Tenemos las mejores marcas</h2>

    <p class="parrafo_informacion"> Tenemos marcas como , marca1 , marca2 , marca3, asi que ¡¡Animate y observa nuestra sesion de productos!! </p>

  </div>


  <div class="informacion">

<h2 class="titulo_informacion"> Visítanos para que experimentes un servicio especialmente ajustado a ti
 </h2>

<p class="parrafo_informacion">  Nuestros empleados son muy atentos y cordiales, por eso te aseguramos una experiencia plena y gratificante </p>

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


    <script src="./javascript/responsive.js">

    </script>


    <script type="text/javascript">

    let breadgrump = document.querySelector(".breadgrump");
    let movimiento = 0;

    setInterval(function(){


      if(movimiento == 0){
        breadgrump.style.left="-" +  movimiento * 100 + "%";
        movimiento++;

      } else if(movimiento ==1) {
        breadgrump.style.left="-" +  movimiento * 100 + "%";
        movimiento++;

      } else if(movimiento==2){
        breadgrump.style.left="-" + movimiento * 100 + "%";
        movimiento++;

      } else {
        movimiento = 0;
      }



    } , 2000);





    </script>




  </body>
</html>
