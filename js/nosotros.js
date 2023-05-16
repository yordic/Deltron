const app = document.getElementById('typewriter');

const typewriter = new Typewriter(app, {
    loop: true,
    Delay: 75
});

typewriter
.typeString('Bienvenido a COOBOXNET')
.pauseFor(200)
.start();