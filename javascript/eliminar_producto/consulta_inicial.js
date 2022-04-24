
const url_consulta_inicial = "http://localhost/maxima_belleza/clases_php/consulta_productos.php";

class Consulta_inicial{

  constructor(url , seccion_productos){
    this.seccion_productos = document.querySelector(seccion_productos);
    this.url = url;
    this.Consulta();

  }

async  Consulta(){
  let consulta = await fetch(this.url);
  let valor_consulta = await consulta.json();
  let numero_resultado = (Object.keys(valor_consulta).length);
  for(let i = 0 ; i < numero_resultado; i ++){
    let elemento = document.createElement("div");
    elemento.classList.add("producto");
    //creando nombre
    let informacion_nombre = document.createElement("p");
    informacion_nombre.classList.add("informacion_nombre_producto");
    informacion_nombre.innerHTML=" Nombre producto " + valor_consulta[i].nombre;
    elemento.appendChild(informacion_nombre);

    //creando precio
    let informacion_precio = document.createElement("p");
    informacion_precio.classList.add("informacion_precio_producto");
    informacion_precio.innerHTML=" Precio producto " + valor_consulta[i].precio;
    elemento.appendChild(informacion_precio);

    //creando marca
    let informacion_marca = document.createElement("p");
    informacion_marca.classList.add("informacion_marca_producto");
    informacion_marca.innerHTML="Marca producto " + valor_consulta[i].nombre_marca;
    elemento.appendChild(informacion_marca);


    //creando categoria

    let informacion_categoria = document.createElement("p");
    informacion_categoria .classList.add("informacion_categoria_producto");
    informacion_categoria.innerHTML="Categoria producto " + valor_consulta[i].nombre_categoria;
    elemento.appendChild(informacion_categoria);
    this.seccion_productos.appendChild(elemento);
  }




  }


}

let objeto_inicial_consulta = new Consulta_inicial(url_consulta_inicial, ".productos");
