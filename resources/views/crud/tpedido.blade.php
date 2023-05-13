<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabla pedido</title>

    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>
    
    <div class="container">

        <h1 class="text-center bg-dark text-white pt-2 pb-3">Formulario</h1>

        <div class="row justify-content-center">

            <div class="col-lg-8 col-md-8 col-sm-12">

                <form action="ajax.php" method="POST" id="formularioAjax">

                    <h1 class="text-center bg-primary text-white">Informacion</h1>

                    <div class="row">
                        <div class="col-6">
                            Nombres
                            <input type="text" class="form-control" name="txtNombres">
                        </div>
                        <div class="col-6">
                            Apellidos
                            <input type="text" class="form-control" name="txtApellidos">
                        </div>
                        <div class="col-6">
                            DUI
                            <input type="text" class="form-control" name="txtDUI">
                        </div>
                        <div class="col-6">
                            Direccion
                            <textarea type="text" class="form-control" name="txtDireccion"></textarea>
                        </div>
                    </div><br>

                    Carreras
                    <select class="form-control" name="Carrera">
                        <option></option>
                        <option value="Mecanica">Ing. Mecanica</option>
                        <option value="Electrica">Ing. Electrica</option>
                        <option value="Medicina">Medicina</option>
                        <option value="Adminitracion">Lic. Adminitracion</option>
                        <option value="Psicologia">Psicología</option>
                    </select><br>

                    <div class="row">
                        <div class="col-4">
                            Paises <br>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="pais" value="El Salvador">El Salvador
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="pais" value="Costa Rica">Costa Rica
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="pais" value="Guatemala">Guatemala
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="pais" value="Honduras">Honduras
                            </div>
                        </div>

                        <div class="col-4">
                            Deportes <br>
                            <div class="form-check">
                                <input type="checkbox" name="deporte[]" class="form-check-input" value="Futbol">Futbol
                            </div>
                            <div class="form-check">
                                <input type="checkbox" name="deporte[]" class="form-check-input" value="Basketball">Backetball
                            </div>
                            <div class="form-check">
                                <input type="checkbox" name="deporte[]" class="form-check-input" value="Softball">Softball
                            </div>
                        </div>

                        <div class="col-4">
                            Colores <br>
                            <div class="form-check">
                                <input type="checkbox" name="color[]" class="form-check-input" value="Blanco">Blanco
                            </div>
                            <div class="form-check">
                                <input type="checkbox" name="color[]" class="form-check-input" value="Negro">Negro
                            </div>
                            <div class="form-check">
                                <input type="checkbox" name="color[]" class="form-check-input" value="Azul">Azul
                            </div>
                        </div>
                            
                    </div>
                    <!-- Notar que es type = "button" para evitar que envie el formulario -->
                    <button type="button" id="boton" class="btn btn-block btn-danger mt-4">ENVIAR</button><br>
                </form>
            </div>
        </div>
        <!-- Creamos el div que va a recibir la info -->
        <div class="row justify-content-center pt-2">
                <div class="col-8" id="resultado">
    
            </div>
        </div>
<!-- Importamos los scripts de sweerAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
<!-- Importamos los scripts de bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
<!-- Buscamos la pagina de jQuery y importamos el escript -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    
<!-- Importamos nuestros scripts-->
<script src="./ajax.js"></script>

</body>
</html>