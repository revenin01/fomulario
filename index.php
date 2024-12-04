<!doctype html>
<html lang="es">
<head>
    <title>Formulario</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="decoracion.css">

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous"
    />
</head>
<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main class="container">
        <h1 class="my-4">Registro de estudiantes</h1>
        <form action="procesar.php" method="post">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre" required />
            </div>
            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido:</label>
                <input type="text" id="apellido" name="apellido" class="form-control" placeholder="Apellido" required />
            </div>

            <div class="mb-3">
                <label for="edad" class="form-label">Edad:</label>
                <input type="number" id="edad" name="edad" class="form-control" placeholder="Edad" required />
            </div>

            <div class="mb-3">
                <label for="correo" class="form-label">Correo:</label>
                <input type="email" id="correo" name="correo" class="form-control" placeholder="Correo" required />
            </div>
            <div class="mb-3">
                <label for="curso">Curso:</label>
                <select name="cursos" id="curso" class="form-control" placeholder="Selecciona tu curso" required>
                    <option value="Cinematografia">Cinematografia</option>
                    <option value="programación de videojuegos">programación de videojuegos</option>
                    <option value="Edición de video">Edición de video</option>
                </select><br>
            <div class="mb-3">
                <form>
                    <h5>Selecciona tu genero</h5>
                    <input type="radio" id="hombre" name="generos" value="masculino">
                    <label for="hombre">Masculino</label><br>
                    <input type="radio" id="mujer" name="generos" value="femenino">
                    <label for="mujer">Femenino</label><br>
                    <input type="radio" id="indefinido" name="generos" value="otro">
                    <label for="indefinido">Otro</label>
                </form><br><br>
                <div class="mb-3">
                    <h5>Áreas de interés</h5>
                    <input type="checkbox" id="Cine" name="areas[]" value="Cine">
                    <label for="Cine">Cine</label><br>
                    <input type="checkbox" id="videojuegos" name="areas[]" value="videojuegos">
                    <label for="videojuegos">videojuegos</label><br>
                    <input type="checkbox" id="Edición" name="areas[]" value="Edición">
                    <label for="Edición">Edición</label><br>
                </div>

            <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
    </main>
    <footer>
    </footer>
    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"
    ></script>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zq