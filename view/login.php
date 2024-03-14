<?php
include '../controller/logincontrol.php';
?>

<!DOCTYPE html>
<html>
    <head>
      <h1> Login </h1>
    </head>

        <body>

          <form action="" method="POST">
          <fieldset>
              <table>
                <tr>
                    <td><label> Email Address: </label></td>
                    <td><input type="text" name="email"></td>
                </tr>

                <tr>
                    <td><label> Password: </label></td>
                    <td><input type="password" name="pass"></td>
                </tr>

                <tr>
                    <td><td><input type="submit" name="login" value="Login"></td></td>
                </tr>
              </table>
          </fieldset>
        </body>
</html>