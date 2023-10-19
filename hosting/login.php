<!DOCTYPE html>
<html lang="es" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
        crossorigin="anonymous"
    >
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
</head>
<body>
    <main class="vh-100 d-flex flex-column align-items-center justify-content-center">
        <div class="container p-4 border border-info rounded shadow-lg mb-5 bg-body-tertiary animate__animated animate__bounceIn">
            <form action="respuesta.php"  method="post">
                <div class="mb-3">
                    <label for="f_email">Email address</label>
                    <input 
                        type="text" 
                        class="form-control" 
                        placeholder="Your username"
                        name="username"
                        required
                    >
                </div>
                <div class="mb-3">
                    <label for="f_pwd">Email address</label>
                    <input 
                        type="password" 
                        class="form-control" 
                        placeholder="Your password"
                        name="pwd"
                        required
                    >
                </div>
                <button
                    type="submit" 
                    class="btn btn-primary w-100" 
                    name="submit"
                >
                    Submit
                </button>
            </form>
        </div>
    </main>
</body>
</html>