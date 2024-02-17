let lateralMenu = document.querySelector('.header-navbar');

document.querySelector('.menu.open').addEventListener('click', function() {
    
    document.querySelector('.header-navbar').classList.add('active-lateral');
    document.querySelector('.menu.open').classList.add('active-lateral');
    document.querySelector('.menu.close').classList.add('active-lateral');
});

document.querySelector('.menu.close').addEventListener('click', function() {
    document.querySelector('.header-navbar').classList.remove('active-lateral');
    document.querySelector('.menu.open').classList.remove('active-lateral');
    document.querySelector('.menu.close').classList.remove('active-lateral');
});