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

            height: 400px;/*caja*/
            width: 600px;
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
                        <h5 class="card-title text-center mb-4">Iniciar sesión</h5>
                        <form>                            
                                            
                            
                            <div class="mb-3">
                                <label for="idIngreso" class="form-label">Ingrese su ID</label>
                                <input type="text" class="form-control" id="idIngreso" placeholder="ID" required>
                            </div>

                            <!-- Botón para enviar -->
                            <button type="button" id="btnSubmit" class="btn btn-primary w-100">Iniciar sesión</button>
                            
                            <p class="mt-3 text-center">¿No te has registrado? <a href="registrar.php">Regístrate</a></p>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button id="boton_saludar" type="button" class="btn btn_succes">saludar</button>
</body>


    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="./public/app.js"></script>
</body>
</html>
