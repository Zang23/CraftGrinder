const header = document.querySelector(".cabecalho_container");
const toggleClass = "sticky";



window.addEventListener("scroll", () => {
    const currentScroll = window.scrollY;
    if (currentScroll > 150){
        header.classList.add(toggleClass);
    }
    else{
        header.classList.remove(toggleClass);
    }
});


/*
function explodir(event){
var expl = document.createElement("img");
expl.setAttribute("src", "../img/explosion.gif");
document.getElementsByClassName("cont_menor") [1].appendChild(expl);
event.preventDefault();
}
*/

const nextbtn = document.querySelector(".next");
const prevbtn = document.querySelector(".prev");
const viewport = document.querySelector(".viewport");

const num_slides = 3;
let slide_atual = 0;

//arrastar o slide
function slide_passagem(){
    viewport.style.transform = `translateX(${-slide_atual * 100}%)`;
}

//ir para o proximo slide e voltar para o primeiro
nextbtn.addEventListener("click", () => {
    slide_atual = (slide_atual + 1) % num_slides;
    slide_passagem();
});
//ir para o slide anterior e voltar para o primeiro
prevbtn.addEventListener("click", () => {
    slide_atual = (slide_atual - 1 + num_slides) % num_slides;
    slide_passagem();
});