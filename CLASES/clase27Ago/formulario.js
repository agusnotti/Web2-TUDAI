document.addEventListener("DOMContentLoaded", function () {

    let formulario = document.getElementById("formulario");

    formulario.addEventListener("submit", function (e) {
      e.preventDefault();

      const data = new URLSearchParams(new FormData(this));
      let parrafo = document.querySelector("#container");

      fetch("form.php", {
        "method": "post",
        "body": data,
      })
        .then(function(response){
            if(response.ok){
                return response.text()
            } else {
               parrafo.innerHTML = "ERROR";
            }
        }) // el servidor nos devuelve HTML

        .then(function (html) {
            console.log(html);

            parrafo.innerHTML = html;
        })

        .catch((error) => console.log(error));
    });
});
