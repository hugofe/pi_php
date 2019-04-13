<!DOCTYPE html>

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <title>Login</title>

</head>

<body>
  <div class="container">

    <div class="row justify-content-center">
      <form action="validalogin1.php" method="post" id="formlogin" name="formlogin">

        <div class="form-group">
          <label for="usuario">Usuario: </label>
          <input class="form-control" type="text" name="login" id="login">
        </div>

        <div class="form-group">
          <label for="senha">Senha: </label>
          <input class="form-control" type="password" name="senha" id="senha">
        </div>

        <div class="form-group">
          <button type="submit" class="btn-primary" name="button" value="LOGAR">Logar</button>
        </div>

      </form>

    </div>
  </div>
</body>