<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="../css/logout.css">
</head>

<body>
    <div id="header">
        <h2>Tabla de Registros</h2>
    </div>
    <section class="formulario">
        <table id="tableregistro">
                        <tr>
                            <td colspan="4" center>
                                <b>Terminar Registro de Hoy</b>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Nombre</b>
                            </td>
                            <td>
                                <b>Hora de entrada</b>
                            </td>
                            <td>
                                <b>Hora de salida</b>
                            </td>
                            <td>
                                <b>Fecha</b>
                            </td>
                        </tr>
                           <tr>
                            <td>
                                -
                            </td>
                            <td>
                               -
                            </td>
                            <td>
                                -
                            </td>
                            <td>
                                -
                            </td>
                        </tr>
        </table>
        <form action="login.blade.php" method="post">
        <input class="boton"type="submit" name="" value="Finalizar">
        </form>
    </section>
</body>

</html>