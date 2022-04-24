
const url = "http://localhost/maxima_belleza/clases_php/consulta_categoria_eliminacion.php";



class Peticion{


  constructor(url){

    this.url = url;
    this.peticion();

  }

  async peticion(){

  let   resultado = await fetch(url);
  let resultado_json = await resultado.json();
  let contenido_marcas = document.querySelector(".content_marcas");
  let numero_resultado = (Object.keys(resultado_json).length);

  for(let i = 0 ; i < numero_resultado; i ++){
    let elemento = document.createElement("div");
    elemento.innerHTML = " <div class='formulario_eliminacion'><form  action='../../clases_php/eliminando_categorias.php' method='POST'><h3> Nombre de la  marca:" + resultado_json[i].nombre + " </h3> <br> <input class='campo_eliminacion' type='text' name='nombre' value="+ resultado_json[i].nombre    +"> <input class='boton_eliminacion'type='submit' value='Eliminar'>       </form> </div >";
    contenido_marcas.appendChild(elemento);
  }

  this.Cambiando_tamaño(numero_resultado , contenido_marcas);

  }

  Cambiando_tamaño(valor , contenido){
    let contenido_marcas = contenido;
    let valor_marcas = valor;
    let tamaño_final = 120 * valor_marcas;
    console.log( contenido_marcas);

    contenido_marcas.style.height= tamaño_final + "px";



  }


}


let objeto_2 = new Peticion(url);
