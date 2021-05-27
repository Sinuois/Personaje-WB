function seleccionar_color(value){
    document.getElementById("color_personaje").value= value;
    setTimeout(() => {  document.getElementById("submit_color").disabled= false; }, 201);
}

const form_botones = document.getElementById('form_botones');

form_botones.addEventListener('focusout', (event) => {
    setTimeout(() => {  document.getElementById("submit_color").disabled= true; }, 200);
});


