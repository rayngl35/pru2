<html>
    <head>
        <TITLE>registro</TITLE>
    <link rel="stylesheet" type="text/css" href="stilo.css" media="screen" title="Normal">
    </head>
    <body>
    <div id="encabezado">
        <h1 class="sitio_nombre">Registro</h1>
        <h3 class="slogan"></h3>
    </div>
    <div id="publicacion">
        <center>
            <h2 class="titulo">registro:</h2>
        </center>
    </div>
    
        <center>
            <form name="alumnos" action="registrar.php" method="post">
                <table>
                    <tbody>
                        <tr>
                            <td>nombre:</td>
                            <td><input type="text" name="nombre"></td>
                        </tr>
                        <tr>
                            <td>apellido paterno:</td>
                            <td><input type="text" name="apellido_paterno"></td>
                        </tr>
                        <tr>
                            <td>apellido materno:</td>
                            <td><input type="text" name="apellido_materno"></td>
                        </tr>
                        <tr>
                            <td>correo:</td>
                            <td><input type="text" name="correo"></td>
                        </tr>
                        <tr>
                            <td><input type="submit" value="enviar" name="enviar"></td>
                            <td><input type="reset" value="borrar"></td>
                        </tr>
                    </tbody>
                </table>
            </form>
            <a href="index.html">volver</a>
        </center>
    </body>
</html>