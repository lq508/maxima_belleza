
let formulario = document.querySelector(".formulario_envio");



class Envio{
  constructor(formulario){

    this.formulario= document.querySelector(formulario);
    this.Agregando_eventos();
  }


  Agregando_eventos(){
    this.formulario.addEventListener("submit", function(evento){

      evento.preventDefault();
      let form = new FormData(this);
      console.log(form.get("eleccion_ciudad_1"));



    });


  }

}


let nuevo_objeto = new Envio(".formulario_envio");
