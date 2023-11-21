<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    

    <div class="container fondo">

        <h1 class="text-center">CRUD CON AJAX</h1>

        <div class="row">
            <div class="col-2 offset-10 ">
                <div class="text-center">
                    <!-- Button trigger modal -->
                    <button type="button"
                            class="btn btn-primary w-100" 
                            data-bs-toggle="modal" 
                            data-bs-target="#modalUsuario"
                            id='botonCrear'
                    >
                        <i class='bi bi-plus-circle-fill' ></i> Crear
                    </button>
                </div>
            </div>
        </div>

        <br>
        <br>
        <div class='table-responsive' >
            <table id="datos_usuario" class='table table-bordered table-striped' >
                <thead>
                    <tr>
                        <th>
                            ID
                        </th>
                        <th>
                            NOMBRE
                        </th>
                        <th>
                            APELLIDOS
                        </th>
                        <th>
                            TELEFONO
                        </th>
                        <th>
                            EMAIL
                        </th>
                        <th>
                            IMAGEN
                        </th>
                        <th>
                            FECHA DE CREACION
                        </th>
                        <th>
                            EDITAR
                        </th>
                        <th>
                            BORRAR
                        </th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

    <!-- Modal -->
    
    <div class="modal fade" id="modalUsuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Crear Usuario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                    <form method='POST' id='formulario' enctype = 'multypart/form-data' >
                        <div class="modal-content">
                            <div class="modal-body">
                                <label for="nombre">Ingrese el nombre</label>
                                <input type="text" class="form-control" id="nombre" name='nombre'>
                                <br>

                                <label for="apellidos">Ingrese los apellidos</label>
                                <input type="text" class="form-control" id="apellidos" name='apellido'>
                                <br>

                                <label for="telefono">Ingrese el telefono</label>
                                <input type="text" class="form-control" id="telefono" name='telefono'>
                                <br>

                                <label for="email">Ingrese el email</label>
                                <input type="email" class="form-control" id="email" name='email'>
                                <br>

                                <label for="imagen_usuario">Ingrese la imagen</label>
                                <input type="file" class="form-control" id="imagen_usuario" name='imagen_usuario'>
                                <span id="imagen-subida"></span>
                                <br>
                            </div>

                            <div class="modal-footer">
                                <input type="hidden" name='id_usuario' id='id_usuario' >
                                <input type="hidden" name='operacion' id='operacion' >
                                <input type="submit" name= 'action' id='action' class='btn btn-success' value='Crear'  >
                            </div> 

                        </div>
                    </form>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="./js/index.js"></script>

</body>
</html>