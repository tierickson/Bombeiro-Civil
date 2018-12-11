var campoNome = document.querySelector("#campoNome");
var campoTema = document.querySelector("#campoTema");
var formCadastro = document.querySelector("#formCadastro");
var campoData = document.querySelector("#campoData");
var erroData = document.querySelector("#erroData");

var temas = [
    'Programação Orientada a Objetos',
    'Programação Web',
    'Teorias do Currículo',
    'Computação Gráfica',
    'Gestão da Tecnologia da Informação'
];

campoNome.addEventListener('change', function() {
    var indiceSorteado = parseInt(Math.random() * (temas.length-1));
    var temaSorteado = temas[indiceSorteado];
    campoTema.value = temaSorteado;
});

formCadastro.addEventListener('submit', function(e) {
    e.preventDefault();

    let dataUsuario = new Date(campoData.value)
    let hoje = new Date();

    if(dataUsuario <= hoje) {
        //erroData.classList.remove('hidden');
        erroData.innerHTML = "Não é possível utilizar uma data retroativa.";
        $("#erroData").show('slow');
        
    } else {
        //erroData.classList.add('hidden');
        $("#erroData").hide('slow');
        formCadastro.submit();
    }
});