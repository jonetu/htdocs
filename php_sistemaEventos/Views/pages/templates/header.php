<!DOCTYPE html>
<html>

<head>
  <title>Gilson Festas</title>
  <meta charset="utf-8">
</head>
<header>

  <nav class="navbar navbar-expand-sm border-danger" id="navbar_top" style="background-color: black;">
    <img src="Views/images/logo.jpg" width="65" height="65">
    <a class="navbar-brand" href="home" style="color: rgb(249,131,33);">Gilson Festas</a>
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">

    </button>

    <div class="navbar-collapse collapse" id="navbarsExample03">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="home" style="color: rgb(0,146,151);">Ver decorações</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="verUtensilio" style="color: rgb(0,146,151);">Ver utensílios</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" style="color: rgb(0,146,151);" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cadastros</a>
          <div class="dropdown-menu" aria-labelledby="dropdown03">
            <a class="dropdown-item" href="cadastromontagem">Cadastro de montagem</a>
            <a class="dropdown-item" href="cadastroUtensilio">Cadastro de utensílios</a>
            <a class="dropdown-item" href="home">Cadastro de outra coisa</a>
          </div>
        </li>
      </ul>
      <form method='post' class="form-inline my-2 md-0" enctype='multipart/form-data'>
        <input class="form-control mr-sm-2" type="text" name='search' placeholder="Pesquisar">
        <button class="btn btn-outline-warning" >Pesquisar</button>
      </form>
    </div>
  </nav>
</header>
<!-- Script para fixar navbar_top no topo e sumir com scroll -->
<script>
  document.addEventListener("DOMContentLoaded", function() {
    window.addEventListener('scroll', function() {
      document.getElementById('navbar_top').classList.add('fixed-top');
      navbar_height = document.querySelector('.navbar').offsetHeight;
      document.body.style.paddingTop = navbar_height + 'px';
    });
  });
</script>

<!-- Script para evitar reenvio do form -->
<script>
  if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
  }
</script>
<body>
