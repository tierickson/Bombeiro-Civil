var blocoNotas = document.querySelector('#blocoNotas');
var contador = document.querySelector('#contador');

blocoNotas.addEventListener('keyup', function() {
    contador.innerHTML = blocoNotas.value.length;
    
    axios.get("http://localhost:8080/api.trabalhos.php").then(response => {
        console.log(response.data);
    });
});