@php 
    $routes = [
        'home' => '/',
        'projects' => '/projetos',
        'certifications' => '/certificacoes',
        'contact' => '/contato',
        'about' => '/sobre',
        'blod' => '/blog',
    ];

    $currentUri = '/';
    $route = request()->route();
    if(isset($route))
        $currentUri = $route->uri();
@endphp

<header class='header'>
    <img class="menu open" src="https://res.cloudinary.com/devy77u3i/image/upload/v1725731352/menu_b7tnvn.svg" alt="Icone contendo barras horizontais representando menu ">
    <img class="menu close" src="https://res.cloudinary.com/devy77u3i/image/upload/v1725731350/close_mexpor.svg" alt="Icone contendo um X para fechar o menu lateral">

    <nav class='header-navbar'>
        <ul class='header-navbar-menu animate from-left'>
            <li 
                class="header-navbar-menu-item  light {{ $currentUri == '/' ? 'active' : ''}}"
            >
                <a href="/" >Home</a>
            </li>
            <li 
                class="header-navbar-menu-item light {{ $currentUri == 'projetos' ? 'active' : ''}}"
            >
                <a href="/projetos" >Projetos</a>
            </li>
            <li 
                class="header-navbar-menu-item light {{ $currentUri == 'certificacoes' ? 'active' : ''}}"
            >
                <a href="/certificacoes" >Certificações</a>
            </li>
            <li 
                class="header-navbar-menu-item light {{ $currentUri == 'sobre' ? 'active' : ''}}"
            >
                <a href="/sobre" >Sobre</a>
            </li>
            <li 
                class="header-navbar-menu-item light {{ $currentUri == 'contato' ? 'active' : ''}}"
            >
                <a href="/contato" >Contato</a>
            </li>
            <li 
                class="header-navbar-menu-item light {{ $currentUri == 'blog' ? 'active' : ''}}"
            >
                <a href="/blog" >Blog</a>
            </li>

            <div class="icons">
                <a href="https://wa.me/5511997470204" target="_blank">
                    <img class="icon" src="https://res.cloudinary.com/devy77u3i/image/upload/v1725731357/whatsapp_gyiabx.svg" alt="icone para whatsapp"/>
                </a>
                <a href="https://www.linkedin.com/in/renato-sousa2602" target="_blank">
                    <img class="icon" src="https://res.cloudinary.com/devy77u3i/image/upload/v1725731350/linkedin_dqscks.svg" alt="icone para linkedin"/>
                </a>
                <a href="mailto:renatosousa@sousadev.me">
                    <img class="icon" src="https://res.cloudinary.com/devy77u3i/image/upload/v1725731352/email_vixk7b.svg" alt="icone para email"/>
                </a>
            </div>
        </ul>
    </nav>
</header>