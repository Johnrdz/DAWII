<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabla Cliente</title>
    
    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>
    
    <div class="container">

        <h1 class="text-center bg-dark text-white pt-2 pb-3">Formulario</h1>

        <div class="row justify-content-center" class="rounded bg-light">

            <div class="col-lg-8 col-md-8 col-sm-12">

                <form action="cliente.php" method="POST" id="formularioCliente"  class="rounded bg-light">

                    <h1 class="text-center bg-primary text-white">Cliente</h1>

                    <div class="row p-3  pb-2">
                        <div class="col-12">
                            Nombre
                            <input type="text" class="form-control" name="txtNombre">
                        </div>
                        <div class="col-12">
                            Apellido
                            <input type="text" class="form-control" name="txtApellido">
                        </div>
                        
                        <div class="col-12 p-2">
                            Fecha de Nacimiento
                            <textarea type="text" class="form-control" name="txtFechaNac"></textarea>
                        </div>
                    </div>
                    
                    <!-- botones para CRUD -->
                    <div class="row p-2">   
                        <!-- agregar  -->
                        <div class="col-3">
                            <button type="submit" class="btn btn-danger btn-lg btn-block font-weight-bold"><a href="/CRUD/tpedido" style="text-decoration: none"><p style="color: white"> Agregar</p></a></button>
                        </div>
                        <!-- Editar  -->
                        <div class="col-3">
                            <button type="submit" class="btn btn-danger btn-lg btn-block font-weight-bold"><a href="/CRUD/tpedido" style="text-decoration: none"><p style="color: white"> Editar</p></a></button>
                        </div>
                        <!-- Borrar  -->
                        <div class="col-3">
                            <button type="submit" class="btn btn-danger btn-lg btn-block font-weight-bold"><a href="/CRUD/tpedido" style="text-decoration: none"><p style="color: white">Eliminar</p></a></button>
                        </div>
                        <!-- Actualizar  -->
                        <div class="col-3">
                            <button type="submit" class="btn btn-danger btn-lg btn-block font-weight-bold"><a href="/CRUD/tpedido" style="text-decoration: none"><p style="color: white"> Actualizar</p></a></button>
                        </div>
                    </div>

                    <!-- Notar que es type = "button" para evitar que envie el formulario -->
                    <button type="button" id="boton" class="btn btn-block bg-primary font-weight-bold mt-4"><p  style="color: white">ENVIAR</p></button><br>
                </form>
            </div>
        </div>
        <!-- Creamos el div que va a recibir la info -->
        <div class="row justify-content-center pt-2">
                <div class="col-8" id="resultado">
    
            </div>
        </div>
    
<!-- Importamos los scripts de bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
</body>
</html>