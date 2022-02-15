<!DOCTYPE html>
<html>
<body>
    <h3 class="container d-flex justify-content-center">
        Cadastro de veículos
    </h3>


    <div class ="container">
    <form method="post">
  <div class="form-group">
    <label for="exampleFormControlInput1" >Placa do carro (Max: 7 letras)</label>
    <input type="text" class="form-control" name="placa" required placeholder="Ex : ABC1D23" maxlength="7">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Marca</label>
    <input type="text" class="form-control" name="marca" placeholder="Ex: GOL">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Modelo</label>
    <input type="text" class="form-control" name="modelo" placeholder="Ex: VOLKSWAGEN">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Preço por dia (R$)</label>
    <input type="number" class="form-control" name="precoDia" placeholder="">
  </div>
  <button type="submit" name="action" class="btn btn-success">Cadastrar</button>
</form>
    </div>
</body>
<!-- Script para evitar reenvio do form -->
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</html>