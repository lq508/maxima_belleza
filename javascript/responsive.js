class Responsive{

  constructor(boton){

    this.boton= document.querySelector(boton);
    this.bindEvents();
  }

  bindEvents(){
    this.boton.addEventListener("click", function(){

      let opciones = document.querySelectorAll(".menu_header__opciones li");
      let flecha = document.querySelector(".flecha_responsive");

      opciones.forEach(function(elemento){

        if(elemento.classList.contains("active")){
          elemento.classList.add("desactive");
          elemento.classList.remove("active");
          flecha.classList.add("desactive");
          flecha.classList.remove("active");

        } else if(elemento.classList.contains("desactive")) {
          elemento.classList.add("active");
          elemento.classList.remove("desactive");
          flecha.classList.add("active");
          flecha.classList.remove("desactive");
        } else {

          elemento.classList.add("active");
          flecha.classList.add("active");

        }



      });



    });


  }



}


let objeto = new Responsive(".menu_header__responsive");
