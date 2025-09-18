const validacion=/^[0-9]+[+-*/]{1}[0-9]+$/;
let btn1=document.getElementById("btn_generar");/* obtiene todo lo que tenga el boton todas las propiedades */
let arbol=document.getElementById("contenido_arbol");

btn1.addEventListener("click",function(){
    let expresion=document.getElementById("expresion").value;

    if(validacion.test(expresion)){
        let hojas=expresion.split(/[+-*/]/);/* dividir la cadena apartir de un caracter */
        let operador=expresion.split(/[0-9]/)[1];
        arbol.innerHTML= "<div class='col'>"+hojas[0]+"</div>"+
        "<div class='col'>"+operador+"</div>"+
        "<div class='col'>"+hojas[1]+"</div>";
        
    }else{
        alert("no cumple");
    }
});