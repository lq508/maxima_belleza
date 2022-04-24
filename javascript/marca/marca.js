class Botones_admin_faltantes{
  constructor(boton_1 , boton_2){
    this.boton_1 = document.querySelector(boton_1);
    this.boton_2 = document.querySelector(boton_2);
    this.Evento();

  }


  Evento(){

    this.boton_1.addEventListener("mouseover" , function(){

      let link_1 = document.querySelector(".eleccion_interna_1:hover a");

      link_1.classList.add("active");
      if(link_1.classList.contains("desactive")){
        link_1.classList.remove("desactive");

      }


    });
    this.boton_1.addEventListener("mouseout" , function(){

      let link_2 = document.querySelector(".eleccion_interna_1 a");

      link_2.classList.add("desactive");
      if(link_2.classList.contains("active")){
        link_2.classList.remove("active");


      }


    });

    this.boton_2.addEventListener("mouseover" , function(){

      let link_3 = document.querySelector(".eleccion_interna_2:hover a");

      link_3.classList.add("active");
      if(link_3.classList.contains("desactive")){
        link_3.classList.remove("desactive");

      }


    });
    this.boton_2.addEventListener("mouseout" , function(){

      let link_4 = document.querySelector(".eleccion_interna_2 a");

      link_4.classList.add("desactive");
      if(link_4.classList.contains("active")){
        link_4.classList.remove("active");


      }


    });

  }






}



let objeto_botones_faltantes = new Botones_admin_faltantes(".eleccion_interna_1" , ".eleccion_interna_2");
