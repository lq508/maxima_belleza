<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width"/>

    <link rel="stylesheet" href="../css/compra.css">
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

        <h1> Compra:<?php echo $_SESSION["producto_compra"]["nombre_producto"] ?></h1>

      </div>


    </header>


    <div class="eleccion_ciudad">

      <div class="ciudad_1">



      </div>
      <div class="ciudad_2">


      </div>
      <div class="ciudad_3">


      </div>
      <div class="ciudad_4">

      </div>

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

          <a href="./admin/admin.php"> acceso </a>




        </footer>


        <script src="../javascript/responsive.js">

        </script>

        <script src="../javascript/compra/acomodado_botones.js">

        </script>



        <?php $valor= 1; ?>
        <script type="text/javascript">
        let valor_id = "<?php echo $_SESSION['producto_compra']['id'] ?>";
        fetch("http://localhost/maxima_belleza/clases_php/consulta_producto.php?id_producto=" + valor_id).then(
          function(valor){

            valor.json().then(function(valor){

              if(valor.tienda_tigre == "el tigre"){

                let eleccion_ciudad = document.querySelector(".eleccion_ciudad .ciudad_1 ");
                let valor_informacion = document.createElement("a");
                valor_informacion.innerHTML="El Tigre";
                valor_informacion.classList.add("valor_informacion");
                valor_informacion.setAttribute("href", "https://api.whatsapp.com/send?phone=584121172169&text=Hola%20estoy%20interesado%20en%20sus%20productos" );
                let ciudad_el_tigre = document.createElement("div");
                ciudad_el_tigre.classList.add("eleccion_1");
                ciudad_el_tigre.appendChild(valor_informacion );
                eleccion_ciudad.appendChild(ciudad_el_tigre);
                valor_informacion.setAttribute("style" , "left:150px");
                let acomodado = new Botones_acomodado(".eleccion_ciudad .ciudad_1 .eleccion_1");



              }

              if(valor.tienda_san_remo== "San remo"){

                let eleccion_ciudad = document.querySelector(".eleccion_ciudad .ciudad_2 ");
                let valor_informacion = document.createElement("a");
                valor_informacion.innerHTML="San Remo";
                valor_informacion.classList.add("valor_informacion");
                valor_informacion.setAttribute("href", "https://api.whatsapp.com/send?phone=584121172169&text=Hola%20estoy%20interesado%20en%20sus%20productos" );
                let ciudad_san_remo = document.createElement("div");
                ciudad_san_remo.classList.add("eleccion_1");
                ciudad_san_remo.appendChild(valor_informacion );
                eleccion_ciudad.appendChild(ciudad_san_remo);
                valor_informacion.setAttribute("style" , "left:150px");

                let acomodado = new Botones_acomodado(".eleccion_ciudad .ciudad_2 .eleccion_1");


              }

              if(valor.tienda_plaza_bolivar== "Plaza bolivar"){
                let eleccion_ciudad = document.querySelector(".eleccion_ciudad .ciudad_3 ");
                let valor_informacion = document.createElement("a");
                valor_informacion.innerHTML="Plaza Bolivar";
                valor_informacion.classList.add("valor_informacion");
                valor_informacion.setAttribute("href", "https://api.whatsapp.com/send?phone=584121172169&text=Hola%20estoy%20interesado%20en%20sus%20productos" );
                let ciudad_plaza_bolivar = document.createElement("div");
                ciudad_plaza_bolivar.classList.add("eleccion_1");
                ciudad_plaza_bolivar.appendChild(valor_informacion );
                eleccion_ciudad.appendChild(ciudad_plaza_bolivar);
                valor_informacion.setAttribute("style" , "left:120px");

                let acomodado = new Botones_acomodado(".eleccion_ciudad .ciudad_3 .eleccion_1");


              }

              if(valor.tienda_primera_carrera=="Primera carrera"){
                let eleccion_ciudad = document.querySelector(".eleccion_ciudad .ciudad_4 ");
                let valor_informacion = document.createElement("a");
                valor_informacion.innerHTML="Primera carrera";
                valor_informacion.classList.add("valor_informacion");
                valor_informacion.setAttribute("href", "https://api.whatsapp.com/send?phone=584121172169&text=Hola%20estoy%20interesado%20en%20sus%20productos" );
                let ciudad_primera_carrera = document.createElement("div");
                ciudad_primera_carrera.classList.add("eleccion_1");
                ciudad_primera_carrera.appendChild(valor_informacion );
                eleccion_ciudad.appendChild(ciudad_primera_carrera);
                valor_informacion.setAttribute("style" , "left:120px");

                let acomodado = new Botones_acomodado(".eleccion_ciudad .ciudad_4 .eleccion_1");
              }


            });



          }
        );

        </script>











  </body>
</html>
