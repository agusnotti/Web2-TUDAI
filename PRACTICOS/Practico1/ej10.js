document.addEventListener('DOMContentLoaded', function(){

    let formulario = document.getElementById('formulario');
    formulario.addEventListener('submit', function(e){
        e.preventDefault();

        const data = new URLSearchParams(new FormData(this));
        let parrafo = document.getElementById('container');

        fetch('ej10.php',{
            "method": "post",
            "body": data
        })
        .then(function (response) {
            if(response.ok){
                return response.text();
            } else {
                parrafo.innerHTML = "ERROR";
            }
        }
        )
        .then(function (html) {
            parrafo.innerHTML = html;
        })
        .catch(function(error){
            console.log(error);
        })
    })
})