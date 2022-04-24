



class Boton_categorias{
  constructor(boton){
    this.boton = document.querySelector(boton);
    this.Agregando();
  }

  Agregando(){
    let funcion_agregando =  this.Agregando_eleccion;

    this.boton.addEventListener("click" , function(){
      let categorias = document.querySelectorAll(".categoria_ul li");
      let flecha = document.querySelector(".eleccion img");
      categorias.forEach(function(valor){

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

      funcion_agregando(categorias);

    });



  }


  Agregando_eleccion(categorias_1){

    let categorias_2 = categorias_1;


    categorias_2.forEach(function(valor){

      valor.addEventListener("click" , function(){

        let eleccion = document.querySelector(".eleccion p");
        let eleccion_escondida = document.querySelector(".categoria_escondido");
        eleccion.innerHTML = valor.innerHTML;
        eleccion_escondida.setAttribute("value" , eleccion.innerHTML);

        let flecha = document.querySelector(".eleccion img");
        let categorias_li_cerrado = document.querySelectorAll(".categoria_ul li");

        categorias_li_cerrado.forEach(function(valor){
          valor.classList.remove("active");
          valor.classList.add("desactive");

        });


        if(flecha.classList.contains("active")){
            flecha.classList.remove("active");
            flecha.classList.add("desactive");
        }



      } );

    });

  }




}


let boton_categorias = new Boton_categorias(".eleccion");
