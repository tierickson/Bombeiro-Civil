var inputEmail = document.querySelector('#inputEmail');
var errorMsg = document.createElement("span");
errorMsg.style.color = "tomato";

inputEmail.addEventListener('change', function() {

    if(inputEmail.checkValidity()) {        
        axios.get("http://localhost:8080/api.email.php?email="+inputEmail.value)
        .then(response => {
            if(response.data) {
                errorMsg.innerHTML = "Endereço inválido.";
                inputEmail.parentElement.appendChild(errorMsg);
                inputEmail.classList.remove("is-valid");
                inputEmail.classList.add("is-invalid");
            } else {
                errorMsg.innerHTML = '';
                inputEmail.classList.remove("is-invalid");
                inputEmail.classList.add("is-valid");
            }
        });
    }
});