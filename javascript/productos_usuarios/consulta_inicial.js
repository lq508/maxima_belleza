
const url_consulta_inicial = "../clases_php/consulta_productos.php";

class Consulta_inicial{

  constructor(url , seccion_productos){
    this.seccion_productos = document.querySelector(seccion_productos);
    this.url = url;
    this.Consulta();

  }

async  Consulta(){
  let numero_de_productos= 0;
  let tamaño_pantalla = screen.width;
  let consulta = await fetch(this.url);
  let valor_consulta = await consulta.json();
  let numero_resultado = (Object.keys(valor_consulta).length);
  for(let i = 0 ; i < numero_resultado; i ++){
    numero_de_productos++;
    let elemento = document.createElement("div");
    let elemento_contenedor = document.createElement("div");
    let imagen_producto = document.createElement("img");
    console.log(valor_consulta);
    imagen_producto.setAttribute("src" ,"../clases_php/" +  valor_consulta[i].imagen_producto);
    imagen_producto.classList.add("imagen_producto");
    elemento_contenedor.classList.add("producto_contenedor");

    console.log(tamaño_pantalla);

    if(numero_de_productos > 1 && tamaño_pantalla < 769){

      elemento_contenedor.setAttribute("style" , "margin-top:600px");

    }



    elemento_contenedor.appendChild(imagen_producto);

    elemento.classList.add("producto");
    //creando nombre
    let informacion_nombre = document.createElement("p");
    informacion_nombre.classList.add("informacion_nombre_producto");
    informacion_nombre.classList.add("informacion_productos");
    informacion_nombre.innerHTML=" Nombre producto " + valor_consulta[i].nombre;

    elemento.appendChild(informacion_nombre);

    //creando precio
    let informacion_precio = document.createElement("p");
    informacion_precio.classList.add("informacion_precio_producto");
    informacion_precio.innerHTML=" Precio producto " + valor_consulta[i].precio + " $";
    informacion_precio.classList.add("informacion_productos");

    elemento.appendChild(informacion_precio);

    //creando marca
    let informacion_marca = document.createElement("p");
    informacion_marca.classList.add("informacion_marca_producto");
    informacion_marca.innerHTML="Marca producto " + valor_consulta[i].nombre_marca;
    informacion_marca.classList.add("informacion_productos");

    elemento.appendChild(informacion_marca);


    //creando categoria

    let informacion_categoria = document.createElement("p");
    informacion_categoria .classList.add("informacion_categoria_producto");
    informacion_categoria.innerHTML="Categoria producto " + valor_consulta[i].nombre_categoria;
    informacion_categoria.classList.add("informacion_productos");

    elemento.appendChild(informacion_categoria);
    //creando boton de compra

    let formulario_mas = document.createElement("form");
    formulario_mas.setAttribute("method" , "post");
    formulario_mas.setAttribute("action" , "/maxima_belleza/clases_php/ver_mas_productos.php?id_producto=" + valor_consulta[i].id );

    let boton_mas = document.createElement("input");
    formulario_mas.appendChild(boton_mas);

    boton_mas.classList.add("boton_mas");
    boton_mas.setAttribute("type" , "submit");
    boton_mas.setAttribute("value" , "Ver mas");


    elemento.appendChild(formulario_mas);

    elemento_contenedor.appendChild(elemento);
    this.seccion_productos.appendChild(elemento_contenedor);



  }

  this.Ver_mas();




  }


  Ver_mas(){

    let botones_mas = document.querySelectorAll(".boton_mas");
    botones_mas.forEach(function(valor){

      valor.addEventListener("click" , function(){
        console.log("click");
        fetch("../clases_php/ver_mas_productos.php");

      });


    });

  }


}

let objeto_inicial_consulta = new Consulta_inicial(url_consulta_inicial, ".productos");
