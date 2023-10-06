const blocos = document.querySelector('.blocos');
const barras = document.querySelector('.barras');
const p1 = document.querySelector('#p1');
const p2 = document.querySelector('#p2');
const p3 = document.querySelector('#p3');

barras.addEventListener('click', () => {
    blocos.classList.toggle('blocos-active');
    p1.classList.toggle('p1-active');
    p2.classList.toggle('p2-active');
    p3.classList.toggle('p3-active');
    console.log("Funfo");
})

$("#formPesquisar").submit(function (e) {
    console.log("teste");
    e.preventDefault();
    texto = document.querySelector('#txtPesquisar').value;
    $.ajax({
        type: "post",
        url: "pesquisar.act.php",
        data: {texto: texto},
        success: function (response) {
            $("#resultadosPesquisa").html(response);
        }
    });

});

function limparPesquisa(){
    $("resultadosPesquisa").html("");
    document.querySelector("#txtPesquisar").value = "";
    document.querySelector("#txtPesquisar").focus();
}