function seleccionar_clase(value){
    document.getElementById("clase_personaje").value= value;
    setTimeout(() => {  document.getElementById("submit_clase").disabled= false; }, 201);
}

const form_botones = document.getElementById('form_botones');

form_botones.addEventListener('focusout', (event) => {
    setTimeout(() => {  document.getElementById("submit_clase").disabled= true; }, 200);  
});


