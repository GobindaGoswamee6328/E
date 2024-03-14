<?php  

include '../controller/searchvaccinatedreg.php';

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Search Registration Number</title>
    </head>

    <body>
        <form method="POST" action="">
            <fieldset>
                <legend><h1>Search Reqistration Number : </h1></legend>
                <table>
                    <tr>
                        <td>Search Vaccinated List by Reg No : </td>
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