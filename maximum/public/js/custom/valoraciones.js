var valoracionInput = document.querySelector("#valoracion");
function calificar(estrella) {
    contador = estrella;
    valoracionInput.value = estrella;
    for (let i = 0; i < 5; i++) {
        if (i < contador) {
            document.getElementById((i+1)).style.color = "#ffc107";
        }
        else document.getElementById((i+1)).style.color = "rgb(209 213 219)";
    }
    console.log(valoracionInput.value);

    return valoracionInput.value;
}
