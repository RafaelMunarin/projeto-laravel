<!-- home.blade.php -->
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/projeto.css') }}">
    <title>Projetos</title>
</head>
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
    <div class="projects-section">
        <h2>Conheça alguns projetos que realizamos</h2>
        <p>Projetos importantes para a comunidade</p>

        <div class="project-item">
            <img src="https://www.lardamenina.org.br/wp-content/uploads/2022/01/projeto-01.jpg" alt="Projeto">
            <h3>Doação</h3>
            <p>A sua doação é muito importante para nós mantermos a qualidade dos nossos serviços a todos que acolhemos. Entre em contato e saiba como ajudar.</p>
            <a href="#">Leia mais</a>
        </div>
    </div>
    <footer>
        © 2023 Lar das Meninas
    </footer>
</body>

</html>