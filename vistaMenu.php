<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="/css/style.css">
    
    <title>Pagina principal</title>
</head>

<body>
<div class="welcome">
    <h1>Bienvenidos al proyecto</h1>
</div>
<div class="row">
    <div class="col-lg-6 col-md-8 xs-12">
        <h3 align="center"> Registro</h3>
        <div id="panel_registro" style="padding: 5%; box-shadow: 1px 2px 2px #A4A4A4; border: 1px solid #A4A4A4; " align="center">
            <!-- panel de datos -->
            <table class="table table-condensed" style="width: 85%; border: 1px solid black; ">
                <tr>
                    <td><label >Titulo</label></td>
                    <td><input type="text" id="titulo" class="form-control" placeholder="* Titulo"></td>
                </tr>
                <tr>
                    <td><label >Contenido</label></td>
                    <td><input type="text" id="contenido" class="form-control" placeholder="* Contenido"></td>
                </tr>
                <tr>
                    <td><label >Imagen</label></td>
                    <td><input type="file" id="imagen" class="form-control"></td>
                </tr>
                <tr>
                    <td><label >Dirección correo</label></td>
                    <td><input type="text" id="direccion" class="form-control" placeholder="* Dirección correo"></td>
                    
                </tr>
                <tr>
                    <td colspan="2">
                        <hr>
                        <div id="Panel_respuesta"></div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <button class="btn btn-success btn-md" onclick="btn_guardar_datos();"> Registrar</button>
                    </td>
                </tr>
            </table>    
        </div>
    </div>
    <div class="col-lg-6 col-md-8 xs-12">
        <h3 align="center"> Listado</h3>
        <div id="panel_listado">
            <!-- panel de datos -->
        </div>
    </div>
</div>

<script type="text/javascript" src="/controlador/controladorUsuario.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>

</html>