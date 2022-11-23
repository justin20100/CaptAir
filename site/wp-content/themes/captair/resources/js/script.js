class Captair_controller{
    constructor() {
        console.log('le js est ok')
    }
    run(){
        console.log('coucou');
    }
}
window.captair = new Captair_controller();
window.document.addEventListener('load',()=> window.captair.run());


/* ----- on scroll animation ----- */
/*
const threshold = .1
const options = {
    root: null,
    rootMargin: '0px',
    threshold
}

const handleIntersect = function (entries, observer) {
    entries.forEach(function (entry) {
        if (entry.intersectionRatio > threshold) {
            entry.target.classList.remove('reveal')
            observer.unobserve(entry.target)
        }
    })
}

document.documentElement.classList.add('reveal-loaded')

window.addEventListener("DOMContentLoaded", function () {
    const observer = new IntersectionObserver(handleIntersect, options)
    const targets = document.querySelectorAll('.reveal')
    targets.forEach(function (target) {
        observer.observe(target)
    })
})*/
