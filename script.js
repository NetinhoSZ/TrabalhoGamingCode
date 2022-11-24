//Scroll reveal animations

ScrollReveal({
    //reset: true,
    distance: '60px',
    duration: 2500,
    delay: 100
});

ScrollReveal().reveal('.home .info h2, .section-title-01, .section-title-02, .scroll-down', { delay: 300, origin: 'left' });
ScrollReveal().reveal('.home .info h3, .home .info p, .info, .second-info, .about-info .btn', { delay: 300, origin: 'right' });
ScrollReveal().reveal('.home .info .btn', { delay: 300, origin: 'bottom' });
ScrollReveal().reveal('.media-icons i, .contact-left li', { delay: 300, origin: 'left', interval: 200 });
ScrollReveal().reveal('.home-img, .about-img', { delay: 500, origin: 'bottom' });
ScrollReveal().reveal('.about .description, .contact-right', { delay: 600, origin: 'right' });
ScrollReveal().reveal('.about .professional-list li', { delay: 500, origin: 'right', interval: 200 });
ScrollReveal().reveal('.skills-description, .services-description, .contact-card, .client-swiper, .contact-left h2', { delay: 700, origin: 'left' });
ScrollReveal().reveal('.experience-card, .service-card, .education, .modulo-list .img-card', { delay: 800, origin: 'bottom', interval: 200 });
ScrollReveal().reveal('footer .group', { delay: 500, origin: 'top', interval: 200 });