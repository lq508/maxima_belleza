



class Consulta_boton_categorias{

  constructor(elemento){
    this.elemento = document.querySelectorAll(elemento);
    this.Eventos();
  }

  Eventos(){
    console.log(this.elemento);
    this.elemento.forEach(function(){
      console.log("aqui");

    });



  }

}


let objeto_consulta_boton_categorias = new Consulta_boton_categorias(".buscador_catergorias_ul li");
