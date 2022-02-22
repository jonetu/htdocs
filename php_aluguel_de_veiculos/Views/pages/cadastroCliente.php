<!DOCTYPE html>
<html>

<body>
  <h3 class="container d-flex justify-content-center">
    Cadastro de Clientes
  </h3>


  <div class="container">
    <form method="post">
      <div class="form-group">
        <label for="nome">Nome completo</label>
        <input type="text" class="form-control" name="nome" required placeholder="Ex: Maria Antonia" maxlength="100">
      </div>
      <div class="form-group">
        <label for="cpf">cpf</label>
        <input type="text" class="form-control" name="cpf" required placeholder="Formato: 12312312312" maxlength="11" >
      </div>
      <div class="form-group">
        <label for="email">email</label>
        <input type="text" class="form-control" name="email" required placeholder="exemplo@exemplo.com">
      </div>
      <div class="form-group">
        <label for="telefone">Telefone de contato</label>
        <input type="text" class="form-control" name="telefone" required placeholder="Formato: 86912341234" maxlength="11">
      </div>
      <button type="submit" name="action" class="btn btn-success">Cadastrar Cliente</button>
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