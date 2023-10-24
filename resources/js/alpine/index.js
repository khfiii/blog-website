import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

document.addEventListener('alpine:init', ()=> {
   Alpine.directive('uppercase', (el) => {
    console.log(el);
   })
})
