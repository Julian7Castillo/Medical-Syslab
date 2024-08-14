'use strict'

const grande = document.querySelector('.grande') 
const punto = document.querySelectorAll('.punto')

//cuando hago clic en punto 
    //saber la posicion de ese punto 
    //Aplicar un trasform trasladex al grande
    //quitar la clase activo de todos los puntos 
    // anadir la calse activo al punto que se a seleccioando 

//recorer todos los puntos 
punto.forEach((cadaPunto, i)=> {
    //asignamos un click a cada punto 
    punto[i].addEventListener('click', ()=>{

        //guardar la posiscion de ese punto 
        let posicion = i 

        //posicion es 0 trasformX es 0
        //posicion es 1 trasformX es -50% 0 -33
        //operacion = posicion * -33

        //calculando el espacio que debe desplazarese el grande
        let opertacion = posicion * -33.5

        //movemos el grande
        grande.style.transform = `translateX(${opertacion}%)`

        //recorremos todos los puntos
        punto.forEach( ( cadaPunto , i)=>{
            //quitamos la clase activo a todos los puntos
            punto[i].classList.remove('activo')
        })

        //añadir la clase activo en el punto que hemos echo click
        punto[i].classList.add('activo')
    })

})