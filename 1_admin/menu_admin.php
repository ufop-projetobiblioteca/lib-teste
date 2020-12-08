<!doctype html>
<html lang="pt-br" class="h-100">

<body class="d-flex flex-column h-100">

    <header>
        <!-- Navbar fixa -->
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="admin.php?link=1">Biblioteca</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gerência</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                            <a class="dropdown-item" href="admin.php?link=2">Usuários</a>
                            <a class="dropdown-item" href="admin.php?link=3">Livros</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin.php?link=4">Empréstimos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin.php?link=5">Reservas</a>
                    </li>
                </ul>
                <form class="form-inline mt-2 mt-md-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Pesquisa" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
                </form>
            </div>
        </nav>
    </header>

    <!-- Começa o conteúdo da página 
    <main role="main" class="flex-shrink-0">
        <div class="container">
            <h1 class="mt-5">Sticky footer com navbar fixa</h1>
            <p class="lead">Fixe um footer na parte inferior da viewport, em navegadores desktop, com estes HTML e CSS customizados. Além do mais, um navbar fixo foi adicionado com <code>padding-top: 60px;</code> e <code>body &gt; .container</code>.</p>
            <p>Volte para o <a href="../sticky-footer">sticky footer padrão</a> sem a navbar.</p>
        </div>
    </main> -->

    <footer class="footer bg-dark mt-auto py-3">
        <div class="container">
            <span class="text-muted">Coloque o conteúdo do sticky footer aqui.</span>
        </div>
    </footer>
</body>

</html>