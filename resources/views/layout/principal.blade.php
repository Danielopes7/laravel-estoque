<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="/css/custom.css" rel="stylesheet">
    <title>Controle de estoque</title>
    <body>
<div class="container">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="/produtos">
                Estoque Laravel
                </a>
            </div>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="/produtos">Listagem</a></li>
        </ul>
        </div>
    </nav>
        @yield('conteudo')
<footer class="footer">
    <p>© Livro de Laravel da Casa do Código.</p>
</footer>
</div>
</body>

