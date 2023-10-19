<!DOCTYPE html>
<html lang="es" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
        crossorigin="anonymous"
    >
</head>
<body>
    <?php include "partials/navbar.php" ?>
    <div class="container">
        <h1>Hola <?php session_start(); echo $_SESSION['username']; ?> desde una pagina, si entraste </h1>
        <hr>
        <h3>
            <a href="./login.php" class="link-danger">Salir</a>
        </h3>
    </div>
</body>
</html>