<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <form action="php-prueba-img.php" method="POST" enctype="multipart/form-data">
            <table width="350" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#000000">
                <tr>
                    <td height="85" align="center" valign="middle" bgcolor="#FFFFFF">
                        <div align="center">
                            <input name="imagen" type="file" maxlength="150">
                            <br><br>
                            <input id="lname" name="precio" type="number" max="100" min="10" placeholder="Precio" autocomplete="off" class="input-panealta" required> 
                            <input type="submit" value="Agregar" name="enviar" style="cursor: pointer">
                        </div>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>