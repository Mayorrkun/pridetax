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
