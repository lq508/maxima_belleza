


class Botones_acomodado{
  constructor(elemento){
    this.botones = document.querySelector(elemento);
    this.boton_a = document.querySelector(elemento + " a");

    this.Eventos();

  }

  Eventos(){
  let  boton_a = this.boton_a;
   this.botones.addEventListener("mouseover" , function(){
       console.log("hola");

       boton_a.classList.add("active");
       if(boton_a.classList.contains("desactive")){
         boton_a.classList.remove("desactive");

       }
     });

     this.botones.addEventListener("mouseout" , function(){
         console.log("adios");

                boton_a.classList.add("desactive");
                if(boton_a.classList.contains("active")){
                  boton_a.classList.remove("active");

                }


       });
  }




}
