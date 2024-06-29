<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>
<body>
    <header>Lar das Meninas</header> 
    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('projetos') }}">Projetos</a></li>
            <li><a href="{{ route('noticias') }}">Notícias</a></li>
            <li><a href="{{ route('voluntarios') }}">Seja um Voluntário</a></li>
            <li><a href="{{ route('doacoes') }}">Doações</a></li>
            <li><a href="{{ route('contatos') }}">Contatos</a></li>
        </ul>
    </nav>
    <div class="image-section">
    <img src="https://www.lardamenina.org.br/wp-content/uploads/2022/02/home_ldm_slider1.jpg" alt="Instituto Lar da Menina" class="main-image">
    <p class="intro-text">
        Desde 1954 prestando serviço de acolhimento institucional para crianças e adolescentes.
    </p>
</div>

    <footer>
        © 2023 Lar das Meninas
    </footer>
</body>
</html>