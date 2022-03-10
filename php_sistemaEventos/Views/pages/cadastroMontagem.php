<!DOCTYPE html>
<html>

<body>
  <div class="container d-flex justify-content-center">

    <h3 class="display-4">
      Cadastro de Montagem!
    </h3>
  </div>

  <div class="container">
    <form method="post" enctype="multipart/form-data">


      <div class="form-group">
        <label for="nome">Nome da montagem</label>
        <input type="text" class="form-control" name="nome" required placeholder="Nome da montagem" maxlength="25">
      </div>

      <div class="form-group">
        <label for="nome">Tema</label>
        <input type="text" class="form-control" name="tema" required placeholder="Tema" maxlength="25">
      </div>

      <div class="form-group">
        <label for="nome">Descrição</label>
        <textarea class="form-control" name="descricao" required placeholder="Descrição" maxlength="65" rows="2"></textarea>
      </div>

      <div class="form-group">
        <label for="precoDia">Preço base</label>
        <input type="number" class="form-control" name="preco" required placeholder="R$">
      </div>

      <div class="form-group">
        <label for="file" class="form-label">Escolha a foto</label>
        <input class="form-control-plaintext" type="file" name="file" required>
      </div>
      <button class="btn btn-primary" type="submit" name="submit">Cadastrar</button>
    </form>
  </div>


</body>
<!-- Script para evitar reenvio do form -->
<script>
  if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
  }
</script>

</html>