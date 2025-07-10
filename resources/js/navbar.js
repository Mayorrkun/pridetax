window.addEventListener('scroll', function (){
    const navbar = document.getElementById('navbar');
    const mobileNav = document.getElementById('mobile-nav');
    if(window.scrollY > 0 ){
        navbar.classList.add('scrolled');
        mobileNav.classList.add('scrolled')
    }
    else{
        navbar.classList.remove('scrolled');
        mobileNav.classList.remove('scrolled');
    }
})
window.dispatchEvent(new Event('scroll'));

document.addEventListener('DOMContentLoaded', function (){
    const path = window.location.pathname

    function setActive(pathMatch, elementId){
        const element = document.getElementById(elementId);
        if(!element){
            return;
        }
        if(pathMatch === "/" && path === "/" )  {
            element.classList.add('active-a');

        }
        else if(pathMatch !== "/" && path.startsWith(pathMatch)){
            element.classList.add('active-a');
        }
    }

    setActive('/','home');
    setActive('/contact', 'contact');
    setActive('/about', 'about');
    setActive('/services', 'services');
});

document.addEventListener('DOMContentLoaded', function(){
   const menu = document.getElementById('nav-menu-btn');
   const list = document.getElementById('nav-list');

   menu.addEventListener('click', function(){
      list.classList.toggle('active');
      list.style.maxHeight = list.style.maxHeight ? null : list.scrollHeight + 'px';
   });
});
