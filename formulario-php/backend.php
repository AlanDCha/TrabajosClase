<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
</head>
<body>
    <?php include "navbar.php" ?>
    <div class="container mt-4 p-4 border border-info rounded">
        <?php
            $user = $_POST["user"];
            $email = $_POST["email"];
            $pwd = $_POST["password"];
            
            echo "<h1>Bienvenido ", "$user</h1>";
            echo "<h2>Su email es ", "$email</h2>";
            echo "<h2>Su password es: ", "$pwd</h2>";
        ?>
    </div>
    <?php include "footer.php" ?>
</body>
</html>