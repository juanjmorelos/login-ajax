<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/jquery-ui.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <title>Registro de productos</title>
</head>
<body>

    <div class="container pt-3">
        <div class="row mt-5">
            <div class="col-12 col-lg-5 mx-auto mt-5">
                <div class="card mt-5">
                    <div class="card-header">
                        <h1 class="h3 text-center">LOGIN CON AJAX</h1>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <form action="" class="col-10 mx-auto" id="form" novalidate>
                                <div class="form-floating mb-3">
                                    <input type="text" name="usuario" id="usuario-id" class="form-control" placeholder="Usuario">
                                    <label for="usuario">Usuario</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" name="password" id="password-id" placeholder="Contraseña">
                                    <label for="password">Contraseña</label>
                                </div>
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary" id="btn-login">Iniciar sesión</button>
                                </div>
                                <div class="alert alert-ligth mb-0 p-0 mt-2 d-none" role="alert" id="alerta">
                                    <p class="text-danger text-center mb-0 pb-0">Usuario o contraseña incorrecta</p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <p class="mt-5 mb-3 text-muted text-center">© JotaTuts - Todos los derechos reservados</p>
            </div>
        </div>
    </div>
    
    <script src="js/login.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>


<!-- clases para botón cargando con bootstrap
<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
<span class="visually-hidden">Loading...</span>
Validando datos
-->
