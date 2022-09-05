class Captair_controller{
    constructor() {
        // ici le dom n'est pas encore pret
        // pour le moment rien a faire
    }

    run(){
        console.log('coucou');
    }
}
window.captair = new Captair_controller();
window.document.addEventListener('load',()=> window.captair.run());