



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: -webkit-linear-gradient(90deg, #1de87c,#00d6d3,#52b8df);
            background: linear-gradient(90deg, #1de87c,#00d6d3,#52b8df);
        }

        .card {                

            height: 620px;/*caja*/
            width: 800px;
            border-radius: 8px;
        }

        .card-title {
            font-weight: bold;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

    </style>
    
</head>
<body class="bg-light">
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="card-title text-center mb-4">Registro Alumnos</h5>
                        <form>
                            <!-- Campo para Nombre -->
                            <div class="mb-3">
                                <label for="firstName" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="firstName" placeholder="Nombre" required>
                            </div>
                            
                            <!-- Campo para Apellido -->
                            <div class="mb-3">
                                <label for="apellido" class="form-label">Apellido</label>
                                <input type="text" class="form-control" id="apellido" placeholder="Apellido" required>
                            </div>
                            
                            <!-- Campo para año de ingreso -->
                            <div class="mb-3">
                                <label for="ano_de_ingreso" class="form-label">Año de ingreso</label>
                                <input type="number" class="form-control" id="ano_de_ingreso" placeholder="Ingrese el año de ingreso" required min="1900" max="2100">
                            </div>

                           <!-- Campo para carrera -->
                            <div class="mb-3">
                                <label for="carrera" class="form-label">Carrera</label>
                                <input type="text" class="form-control" id="carrera" placeholder="Ingrese su carrera" required>
                            </div>

                            <!-- Campo para fecha de nacimiento -->
                            <div class="mb-3">
                                <label for="fechaNacimiento" class="form-label">Fecha de nacimiento</label>
                                <input type="date" class="form-control" id="fechaNacimiento" required>
                            </div>

                            <!-- Recuadro que mostrará el número generado -->
                            <div id="resultado" class="recuadro-id">
                                Este es tu número de ID: --
                            </div>

                            
                            <button type="submit" class="btn btn-primary w-100" style="margin-top: 10px;">Regístrate</button>
                            <p class="mt-3 text-center">¿Ya tienes una cuenta? <a href="./index.php">Iniciar sesión</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./public/app.js"></script>
</body>
</html>
