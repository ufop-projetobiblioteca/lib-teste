<!doctype html>
<?php
session_start();
?>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Jekyll v4.1.1">
  <title>Área de Login</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/">

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
  <!-- Custom styles for this template -->
  <link href="css/signin.css" rel="stylesheet">
</head>

<body class="text-center">
  <form method="POST" action="valida_login.php" class="form-signin">
    <img class="mb-4" src="img/icone-biblioteca.ico" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Biblioteca</h1>

    <label for="inputEmail" class="sr-only">login</label>
    <input type="email" name="inputEmail" class="form-control" placeholder="Digite seu login" required autofocus><br />

    <label for="inputPassword" class="sr-only">Senha</label>
    <input type="password" name="inputPassword" class="form-control" placeholder="Digite sua senha" required><br />

    <button class="btn btn-lg btn-primary btn-block" type="submit">Acessar</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017-2020</p>
  </form>
  <?php
  if (isset($_SESSION['msg'])) {
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
  }
  ?>
</body>

</html>