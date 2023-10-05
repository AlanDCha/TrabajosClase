<!DOCTYPE html>
<html lang="es" data-bs-theme="dark">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
  </head>
  <body class="">
    <?php include "navbar.php" ?>
    <div class="container border border-primary rounded my-4 p-4">
      <h1 class="center">Formulario de prueba</h1>
      <hr />
      <form action="backend.php" method="post">
        <div class="mb-3">
          <label for="" class="form-label">Usuario</label>
          <input name="user" type="text" class="form-control"  />
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Correo</label>
          <input type="email" class="form-control" name="email" />
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Contraseña</label>
          <input type="password" class="form-control" name="password" />
        </div>
        <input type="submit" value="Enviar" class="btn btn-primary" />
      </form>
    </div>
    <?php include "footer.php" ?>
  </body>
</html>
