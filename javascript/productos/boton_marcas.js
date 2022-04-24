



class Boton_marcas{
  constructor(boton){
    this.boton = document.querySelector(boton);
    console.log(this.boton);
    this.Agregando();
  }

  Agregando(){
    let funcion_agregando =  this.Agregando_eleccion;

    this.boton.addEventListener("click" , function(){
      let marcas = document.querySelectorAll(".marcas_ul li");
      let flecha = document.querySelector(".eleccion_marcas img");
      marcas.forEach(function(valor){

        if(valor.classList.contains("active")){

          valor.classList.add("desactive");
          valor.classList.remove("active");
          flecha.classList.add("desactive");
          flecha.classList.remove("active");

        } else if(valor.classList.contains("desactive")) {

          valor.classList.add("active");
          valor.classList.remove("desactive");

                    flecha.classList.add("active");
                    flecha.classList.remove("desactive");



        } else {
          valor.classList.add("active");
          flecha.classList.add("active");


        }


      });

      funcion_agregando(marcas);

    });



  }


  Agregando_eleccion(marcas_1){

    let marcas_2 = marcas_1;


    marcas_2.forEach(function(valor){

      valor.addEventListener("click" , function(){

        let eleccion = document.querySelector(".eleccion_marcas p");
        eleccion.innerHTML = valor.innerHTML;
        let eleccion_escondida = document.querySelector(".marca_escondido");
        console.log(eleccion_escondida);
        eleccion.innerHTML = valor.innerHTML;
        eleccion_escondida.setAttribute("value" , eleccion.innerHTML);
        let flecha_marca = document.querySelector(".eleccion_marcas img");
        let marcas_li_cerrado = document.querySelectorAll(".marcas_ul li");

        marcas_li_cerrado.forEach(function(valor){
          valor.classList.remove("active");
          valor.classList.add("desactive");

        });


        if(flecha_marca.classList.contains("active")){
            flecha_marca.classList.remove("active");
            flecha_marca.classList.add("desactive");
        }


      } );

    });

  }




}


let boton_marcas = new Boton_marcas(".eleccion_marcas");
