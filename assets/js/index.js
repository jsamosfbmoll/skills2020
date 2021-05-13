let registraform = document.querySelector("form#registraform");

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