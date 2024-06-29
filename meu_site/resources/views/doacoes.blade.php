<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Doações - Lar da Menina</title>
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

    <div class="donation-qr-code">
        <h2>Realize sua doação via PIX</h2>
        <p>Aponte a câmera do seu aplicativo de banco ou utilize o QR Code abaixo para realizar a doação.</p>
        <img src="/img/frame_qrcode.png" alt="QR Code de doação via PIX">
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

    if (strpos($currentRoute, $routeName) !== false) {
        return 'active';
    } else {
        return '';
    }
}
?>