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