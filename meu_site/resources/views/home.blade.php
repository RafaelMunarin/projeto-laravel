<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lar da Menina - Rio do Sul - SC</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>
    <div class="logo-container">
        <img src="https://www.lardamenina.org.br/wp-content/uploads/2024/04/nova-logo-lar-da-menina.png" class="logo-img">
    </div>
    <nav>
        <ul>
            <li class="<?php echo isActivePage('home'); ?>"><a href="{{ route('home') }}">Home</a></li>
            <li class="<?php echo isActivePage('projetos'); ?>"><a href="{{ route('projetos') }}">Projetos</a></li>
            <li class="<?php echo isActivePage('noticias'); ?>"><a href="{{ route('noticias') }}">Notícias</a></li>
            <li class="<?php echo isActivePage('voluntarios'); ?>"><a href="{{ route('voluntarios') }}">Seja um Voluntário</a></li>
            <li class="<?php echo isActivePage('doacoes'); ?>"><a href="{{ route('doacoes') }}">Doações</a></li>
            <li class="<?php echo isActivePage('contatos'); ?>"><a href="{{ route('contatos') }}">Contatos</a></li>
        </ul>
    </nav>

    <div class="image-section">
        <img src="https://www.lardamenina.org.br/wp-content/uploads/2022/02/home_ldm_slider1.jpg" alt="Instituto Lar da Menina" class="main-image">
        <!-- <img src="https://www.lardamenina.org.br/wp-content/uploads/2022/02/home_ldm_slider2.jpg" class="main-image"> -->
        <!-- <img src="https://www.lardamenina.org.br/wp-content/uploads/2022/02/home_ldm_slider3.jpg" class="main-image"> -->
        <p class="intro-text">
            Desde 1954 prestando serviço de acolhimento institucional para crianças e adolescentes.
        </p>
    </div>

    <footer>
        © 2023 Lar das Meninas
    </footer>
</body>

</html>

<?php
function isActivePage($routeName)
{
    $currentRoute = $_SERVER['REQUEST_URI'];

    if ($routeName === 'home' && $currentRoute === '/') {
        return 'active';
    }

    if (strpos($currentRoute, $routeName) !== false) {
        return 'active';
    } else {
        return '';
    }
}
?>