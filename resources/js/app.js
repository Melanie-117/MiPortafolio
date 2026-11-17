import './bootstrap';

/*
este codigo se obtuvo de la pagina https://prismic.io/blog/css-background-effects
y se cambio a lo que se necesitaba
*/
document.addEventListener('DOMContentLoaded', () => {
    const feature = document.querySelector('.feature');
    if (!feature) return;

    const maxZoom = 1.2;     // Aumento máximo (20% más grande)
    const maxBlur = 5;       // Desenfoque máximo en píxeles
    const scrollDistance = 800; // Distancia en px de scroll donde se completa el efecto

    window.addEventListener('scroll', () => {
        const fromTop = window.scrollY || window.pageYOffset;
        
        // Progreso del scroll entre 0 y 1
        const progress = Math.min(fromTop / scrollDistance, 1);

        // Cálculo de transformaciones sutiles
        const scale = 1 + (progress * (maxZoom - 1));
        const opacity = 1 - (progress * 0.8); // Se reduce gradualmente la opacidad
        const blur = progress * maxBlur;

        feature.style.transform = `scale(${scale})`;
        feature.style.opacity = Math.max(0, opacity);
        feature.style.filter = `blur(${blur}px)`;
        feature.style.webkitFilter = `blur(${blur}px)`;
    });
});