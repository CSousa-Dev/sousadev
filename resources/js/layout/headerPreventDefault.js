var link = document.getElementsByClassName('header-navbar-menu-item');
Array.from(link).forEach(function(item) {
    item.addEventListener('click', function(event) {
        if (item.querySelector('a').href == window.location.href) {
            event.preventDefault();
        }
    });
});