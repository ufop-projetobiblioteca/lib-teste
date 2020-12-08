<!doctype html>
<html lang="pt-br" class="h-100">

<header>
    <!-- Navbar fixa -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="admin.php?link=1">Biblioteca</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gerência</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="admin.php?link=2">Usuários</a>
                    <a class="dropdown-item" href="admin.php?link=3">Livros</a>
                </div>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="admin.php?link=4">Empréstimos <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="admin.php?link=5">Reservas <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Sair <span class="sr-only">(current)</span></a>
            </li> 
        </ul>
    </div>
    </nav>
</header>

</html>