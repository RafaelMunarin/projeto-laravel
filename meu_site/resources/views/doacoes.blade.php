<!-- home.blade.php -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Doações</title>
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
    <h1>Bem-vindo ao nosso site!</h1>
    <p>Esta é a página inicial.</p>
</body>
</html>