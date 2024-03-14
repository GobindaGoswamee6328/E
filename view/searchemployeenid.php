<?php  

include '../controller/searchemployeenid.php';

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Search Employee Nid</title>
    </head>

    <body>
        <form method="POST" action="">
            <fieldset>
                <legend><h1>Search Employee Nid : </h1></legend>
                <table>
                    <tr>
                        <td>Search Employee by Nid No : </td>
                        <td><input type="text" name="searchBox"></td>
                        <td><input type="submit" name="search" value="Search"></td>
                    </tr>

                    <tr>
                        <td><?php echo($numOfDataFound); ?></td>
                    </tr>
                </table>
                <?php 
                getShowSearchData($result);
                ?>
            </fieldset>
        </form>
    </body>
</html>