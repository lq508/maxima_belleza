

const url_consulta = "http://localhost/maxima_belleza/clases_php/consulta_categoria_eliminacion.php";



class Consulta_categorias{

  constructor(elemento , url){

    this.elemento_ul = document.querySelector(elemento);

    this.url = url;
    this.Consulta();


  }

  async Consulta(){

        let consulta = await fetch(this.url);
        let valor_consulta = await consulta.json();
        let numero_resultado = (Object.keys(valor_consulta).length);
        let creando_productos = this.Creando_productos;


        for(let i = 0 ; i < numero_resultado; i ++){
          let elemento = document.createElement("li");
          elemento.innerHTML = valor_consulta[i].nombre;
          elemento.addEventListener("click" , function(evento){

          let  nombre_categoria = evento.target.innerHTML;
          console.log(nombre_categoria);

            fetch("http://localhost/maxima_belleza/clases_php/consulta_productos_por_categoria.php?categoria=" + nombre_categoria)
            .then(function(valor){

              valor.json().then(function(resultado_final){
                creando_productos((Object.keys(resultado_final).length) , resultado_final);


              });


            });

          });


          this.elemento_ul.appendChild(elemento);
        }





  }


  Creando_productos(numero_resultado , valor_consulta){
    let productos = document.querySelector(".productos");
    let seccion_productos = document.querySelector(".productos");

    productos.innerHTML = "";


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
      seccion_productos.appendChild(elemento);

    }



  }







}

let objeto_consulta_categorias = new Consulta_categorias(".buscador_catergorias_ul" , url_consulta);
