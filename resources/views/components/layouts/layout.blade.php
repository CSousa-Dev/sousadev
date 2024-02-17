<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])

    <link rel="apple-touch-icon" sizes="180x180" href="https://res.cloudinary.com/devy77u3i/image/upload/v1726021763/apple-touch-icon_ffvpk5.png">
    <link rel="android-chrome" sizes="192x192" href="https://res.cloudinary.com/devy77u3i/image/upload/v1726021764/android-chrome-192x192_wlkwhc.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://res.cloudinary.com/devy77u3i/image/upload/v1726021763/favicon-32x32_qm6v9k.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://res.cloudinary.com/devy77u3i/image/upload/v1726021763/favicon-16x16_xdbyte.png">
    <link rel="manifest" href="https://res.cloudinary.com/devy77u3i/raw/upload/v1726021764/site_pim5yk.webmanifest">
    <link rel="shortcut icon" href="https://res.cloudinary.com/devy77u3i/image/upload/v1726021763/favicon_zhdixu.ico">

    <meta property="og:title" content="Título da Página">
    <meta property="og:description" content="Descrição da Página">
    <meta property="og:image" content="https://www.exemplo.com/imagem.jpg">
    <meta property="og:url" content="https://www.exemplo.com/pagina">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Nome do Site">

    <meta property="og:image" content="https://res.cloudinary.com/devy77u3i/image/upload/v1725950931/Frame_46_n7dpca.svg" />
    <meta property="og:image:alt" content="Imagem representativa do SousaDev" />
    <meta name="description" content="{{$description}}">
    <meta name="author" content="SousaDev - Desenvolvimento de Software">
    <meta name="keywords" content="Desenvolvimento de Software, Desenvolvimento Web, Desenvolvimento Mobile, Desenvolvimento de Aplicativos, Desenvolvimento de Sites, Desenvolvimento de Sistemas, Desenvolvimento de Aplicativos Móveis, Desenvolvimento de Aplicativos Web, Desenvolvimento de Aplicativos Híbridos, Desenvolvimento de Aplicativos Nativos, Desenvolvimento de Aplicativos Multiplataforma, Desenvolvimento de Aplicativos Android, Desenvolvimento de Aplicativos iOS, Desenvolvimento de Aplicativos Flutter, Desenvolvimento de Aplicativos React Native, Desenvolvimento de Aplicativos Xamarin, Desenvolvimento de Aplicativos Ionic, Desenvolvimento de Aplicativos PWA, Desenvolvimento de Aplicativos SPA, Desenvolvimento de Aplicativos MPA, Desenvolvimento de Aplicativos SSR, Desenvolvimento de Aplicativos CSR, Desenvolvimento de Aplicativos JAMstack, Desenvolvimento de Aplicativos Serverless, Desenvolvimento de Aplicativos Microservices, Desenvolvimento de Aplicativos Monolíticos, Desenvolvimento de Aplicativos SOA, Desenvolvimento de Aplicativos API, Desenvolvimento de Aplicativos REST, Desenvolvimento de Aplicativos GraphQL, Desenvolvimento de Aplicativos SOAP, Desenvolvimento de Aplicativos Websockets, Desenvolvimento de Aplicativos WebRTC, Desenvolvimento de Aplicativos Realtime, Desenvolvimento de Aplicativos Offline, Desenvolvimento de Aplicativos Progressive Web Apps, Desenvolvimento de Aplicativos Single Page Applications, Desenvolvimento de Aplicativos Multi Page Applications, Desenvolvimento de Aplicativos Server Side Rendering, Desenvolvimento de Aplicativos Client Side Rendering, Desenvolvimento de Aplicativos Jamstack, Desenvolvimento de Aplicativos Serverless, Desenvolvimento de Aplicativos Microservices, Desenvolvimento de Aplicativos Monolíticos, Desenvolvimento de Aplicativos Service Oriented Architecture, Desenvolvimento de Aplicativos Application Programming Interface, Desenvolvimento de Aplicativos Representational State Transfer, Desenvolvimento de Aplicativos Graph Query Language, Desenvolvimento de Aplicativos Simple Object Access Protocol, Desenvolvimento de Aplicativos Websockets, Desenvolvimento de Aplicativos Web Real">
    <meta name="robots" content="index,follow">
    
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Organization",
          "name": "SousaDev - Desenvolvimento de Software",
          "url": "https://www.sousadev.me",
          "logo": "https://res.cloudinary.com/devy77u3i/image/upload/v1725950931/Frame_46_n7dpca.svg"
        }
    </script>

    <title>{{$title}}</title>
</head>
<body>
    <x-layouts.header/>
    {{$slot}}
    <x-layouts.footer/>
</body>
</html>