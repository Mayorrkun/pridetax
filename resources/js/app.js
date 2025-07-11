import './bootstrap';
import './navbar.js';
import $ from 'jquery';
import initParallax from './parallax.js';

document.addEventListener('DOMContentLoaded', function (){
    var parallax = new  Rellax('.parallax');
});

//idk tbh
$(document).ready(function () {
    $('.parallax-container').each(function () {
        const $this = $(this);
        const imageSrc = $this.data('image-src');

        if (imageSrc) {
            $this.css({
                'background-image': `url(${imageSrc})`,
                'background-size': 'cover',
                'background-position': 'center',
                'background-attachment': 'fixed',
            });
        }
    });

    initParallax();
});

window.addEventListener('scroll', function () {
    const text = document.querySelector('.fadeText');
    const maxScroll = 400; // how far before fully faded
    let opacity = 1 - window.scrollY / maxScroll;

    // Clamp the opacity between 0 and 1
    opacity = Math.max(0, Math.min(1, opacity));

    text.style.opacity = opacity;

});
