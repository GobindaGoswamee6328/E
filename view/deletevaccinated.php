<?php

include '../controller/deletevaccinated.php';

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Delete Vaccinated List</title>
    </head>

    <body>
        <form method="POST" action="">
            <fieldset>
                <legend><h1>Delete Vaccinated List</h1></legend>
                <table>
                    <tr>
                        <td>Enter Registration Number for Delete Data : </td>
                        <td><input type="text" name="deleteDataBox"></td>
                        <td><input type="submit" name="delete" value="Delete"></td>
                    </tr>
                    <tr>
                        <td><?php echo($message); ?></td>
                    </tr>
                </table>
                
            </fieldset>
        </form>
    </body>
</html>