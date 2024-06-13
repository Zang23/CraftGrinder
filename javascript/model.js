const cabeca = document.getElementById('cabeca');
const corpo = document.getElementById('corpo');
const corpoRect = cabeca.getBoundingClientRect(); // Obtendo as coordenadas da div estilizada

let mouseX = 0;
let mouseY = 0;
let cubeX = corpoRect.left + corpoRect.width / 2; // Posição X do centro da div estilizada
let cubeY = corpoRect.top + corpoRect.height / 2; // Posição Y do centro da div estilizada
let easing = 0.25;

document.addEventListener('mousemove', updateMouse);

function updateMouse(event) {
    mouseX = event.clientX - corpoRect.left; // Coordenadas do mouse relativas à div estilizada
    mouseY = event.clientY - corpoRect.top;
}

function updateCube() {
    const dx = mouseX - cubeX;
    const dy = mouseY - cubeY;

    cubeX += dx * easing;
    cubeY += dy * easing;

    const corpoY = (cubeX / corpoRect.width - 0.5); // Ajustando para coordenadas relativas à div
    const corpoX = -(cubeY / corpoRect.height - 0.5);
    cabeca.style.transform = `rotateX(${corpoX}deg) rotateY(${corpoY}deg)`;
    corpo.style.transform = `rotateY(${corpoY}deg)`;
    requestAnimationFrame(updateCube);
}

updateCube();
