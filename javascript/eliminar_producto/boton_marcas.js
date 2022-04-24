
class Boton_marcas_eliminacion{
  constructor( categorias){
    this.categorias = document.querySelector(categorias);
    this.Eventos();

  }


  Eventos(){
    this.categorias.addEventListener("click" , function(){

      let flecha = document.querySelector(".buscador_marcas .eleccion img");
      console.log(flecha);
      let categorias_ul = document.querySelector(".buscador_marcas_ul");
      if(flecha.classList.contains("active")){
        flecha.classList.remove("active")    ;
        flecha.classList.add("desactive");
        categorias_ul.classList.remove("active")    ;
        categorias_ul.classList.add("desactive");
      } else if(flecha.classList.contains("desactive")){
        flecha.classList.add("active");
        flecha.classList.remove("desactive");
        categorias_ul.classList.add("active");

        categorias_ul.classList.remove("desactive")    ;

      } else {
        flecha.classList.add("active");
        categorias_ul.classList.add("active");



      }


    });


  }


}



let objeto_marcas_eliminacion = new Boton_marcas_eliminacion(".buscador_marcas");
