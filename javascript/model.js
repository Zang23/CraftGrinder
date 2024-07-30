const cabeca = document.getElementById('cabeca');
const corpo = document.getElementById('corpo');

let mouseX = 0;
let mouseY = 0;
let cubeX = 0; // Inicializando o cubo no centro
let cubeY = 0;
let easing = 0.1; // Ajuste o valor de easing conforme desejado

document.addEventListener('mousemove', updateMouse);

function updateMouse(event) {
    const corpoRect = corpo.getBoundingClientRect();
    mouseX = event.clientX - corpoRect.left; // Coordenadas do mouse relativas à div corpo
    mouseY = event.clientY - corpoRect.top;
}

function updateCube() {
    const corpoRect = corpo.getBoundingClientRect(); // Atualizando o retângulo do corpo

    const dx = mouseX - cubeX;
    const dy = mouseY - cubeY;

    cubeX += dx * easing;
    cubeY += dy * easing;

    const corpoY = (cubeX / corpoRect.width - 0.5) * 1.5; // Ajustando para coordenadas relativas à div
    const corpoX = -(cubeY / corpoRect.height - 0.5) * 1.5;
    
    cabeca.style.transform = `rotateX(${corpoX}deg) rotateY(${corpoY}deg)`;
    corpo.style.transform = `rotateY(${corpoY}deg)`;
    
    requestAnimationFrame(updateCube);
}

// Inicia o loop de animação
updateCube();
