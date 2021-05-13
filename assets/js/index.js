let espaisForm = document.querySelector("form#espaisform");
let registraform = document.querySelector("form#registraform");

if (espaisForm) {
    espaisForm.addEventListener("submit", function(event) {
        event.preventDefault();
        console.log(event);

        let nomEspai = event.target.querySelector("#nom").value;

        let validate = new RegExp("[a-z]*");

        if (validate.test(nomEspai)) {
            console.log("Correcto");
        }
    });
}

if (registraform) {
    registraform.addEventListener("submit", function(event) {
        event.preventDefault();
        let passwordInput = event.target.querySelector("#password");

        let validate = new RegExp(".{8,}");

        if (!validate.test(passwordInput.value)) {
            alert("Contrasenya molt curta");
        }
    });
}