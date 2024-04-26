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
})


/*
function explodir(event){
var expl = document.createElement("img");
expl.setAttribute("src", "../img/explosion.gif");
document.getElementsByClassName("cont_menor") [1].appendChild(expl);
event.preventDefault();
}
*/
