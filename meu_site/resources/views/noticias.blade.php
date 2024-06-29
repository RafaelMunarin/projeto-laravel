<!-- home.blade.php -->
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/noticias.css') }}">
    <title>Noticias</title>
</head>

<body>
    <body>
        <nav>
            <ul>
                <li class="text-lar-meninas">Lar das Meninas</li>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('projetos') }}">Projetos</a></li>
                <li><a href="{{ route('noticias') }}">Notícias</a></li>
                <li><a href="{{ route('voluntarios') }}">Seja um Voluntário</a></li>
                <li><a href="{{ route('doacoes') }}">Doações</a></li>
                <li><a href="{{ route('contatos') }}">Contatos</a></li>
            </ul>
        </nav>
        <div class="news-section">
            <h2>Confira as últimas notícias</h2>
            <p>Notícias recentes sobre nossos projetos e atividades</p>

            <div class="news-item">
                <img src="https://www.lardamenina.org.br/wp-content/uploads/2022/01/post-01.jpg" alt="Notícia">
                <h3>Gratidão</h3>
                <p>O Lar da Menina agradece a todos aqueles que colaboraram conosco, com parcerias, donativos, bens alimentares ou de outra espécie, ou ainda com o valor do seu voluntariado.</p>
                <a href="#">Leia mais</a>
            </div>
        </div>
        <footer>
            © 2023 Lar das Meninas
        </footer>
    </body>

</html>