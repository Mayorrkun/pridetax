window.addEventListener('scroll', function (){
    const navbar = document.getElementById('navbar');
    if(window.scrollY > 0 ){
        navbar.classList.add('scrolled');
    }
    else{
        navbar.classList.remove('scrolled');
    }
})
window.dispatchEvent(new Event('scroll'));

document.addEventListener('DOMContentLoaded', function (){
    const path = window.location.pathname
});

