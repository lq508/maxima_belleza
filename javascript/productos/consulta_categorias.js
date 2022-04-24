const url = "http://localhost/maxima_belleza/clases_php/consulta_categoria_eliminacion.php";



class Consulta_categorias{

  constructor(valor, url){

    this.valor = document.querySelector(valor);
    this.url = url;
    this.Consulta();


  }

  async Consulta(){

    let consulta = await fetch(this.url);
    let valor_consulta = await consulta.json();
    let numero_resultado = (Object.keys(valor_consulta).length);

    for(let i = 0 ; i < numero_resultado; i ++){
      let elemento = document.createElement("li");
      elemento.innerHTML = valor_consulta[i].nombre;
      this.valor.appendChild(elemento);
    }


    console.log(valor_consulta);

  }

}

let consulta_categorias= new Consulta_categorias(".categoria_ul", url);
