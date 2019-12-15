const navDeslizar = () => {
    const hamburger = document.querySelector('.hamburger');
    const nav = document.querySelector('.link_nave');
    const link_nav = document.querySelector('.link_nave');
    //navegador clicavel
    hamburger.addEventListener('click', () => {
        nav.classList.toggle('nave_acao');
    });
    //animação links
    link_nav.forEach((link,index) => {
        link.style.animation = `link_nav_fade 0.5s ease forwards ${index / 7 + 0.3}s`
    });
}

navDeslizar();