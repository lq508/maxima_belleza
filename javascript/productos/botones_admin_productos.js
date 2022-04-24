class Botones_admin_productos{
  constructor(boton){

    this.boton= document.querySelectorAll(boton);
    this.Evento();
  }


  Evento(){

    this.boton.forEach(function(botones){
      botones.addEventListener("mouseover", function(){

        let link = document.querySelector(".eleccion_interna:hover a");
        link.classList.add("active");
        if(link.classList.contains("desactive")){
          link.classList.remove("desactive");

        }
      });

      botones.addEventListener("mouseout", function(){

        let link_2 = document.querySelectorAll(".eleccion_interna a");
        link_2.forEach(function(link_3){
          link_3.classList.add("desactive");
          if(link_3.classList.contains("active")){
            link_3.classList.remove("active");

          }

        });


      });

    });




  }


}


let objeto_admin_productos = new Botones_admin_productos(".eleccion_interna");
