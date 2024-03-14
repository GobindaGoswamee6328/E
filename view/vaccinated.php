<?php

include '../controller/vaccinatedcontrol.php';


?>
<!DOCTYPE html>
<html>
  <body>
    <form action="" method="POST">
        <fieldset>
          <legend><h1> Vaccinated People </h1></legend>
            <table>
                <tr>
                    <td><label> Name: </label></td>
                    <td><input type="text" name="name">
                    <?php echo $nameError;?></td>
                </tr>

                <tr>
                    <td><label> Age: </label></td>
                    <td><input type="text" name="age">
                    <?php echo $ageError;?></td>
                </tr>

                <tr>
                    <td><label> Gender: </label></td>
                    <td><input type="radio" name="gender" value="male">Male
                    <input type="radio" name="gender" value="female">Female
                    <input type="radio" name="gender" value="other">Other
                    <?php echo $genderError;?></td>
                </tr>

                <tr>
                    <td><label> Registration NO: </label></td>
                    <td><input type="text" name="nmbr">
                    <?php echo $nmbrError;?></td>
                </tr>

                <tr>
                    <td><label> Registration Date: </label></td>
                    <td><input type="date" name="registration">
                    <?php echo $registrationError;?></td>
                </tr>

                <tr>
                    <td><label> Address: </label></td>
                    <td><textarea rows="3" cols="30" name="address"></textarea>
                    <?php echo $addressError;?></td>
                </tr>

                <tr>
                    <td><label> Hospital Name: </label></td>
                    <td><input type="text" name="hospital">
                    <?php echo $hospitalError;?></td>
                </tr>

                <tr>
                    <td><label> Vaccine Name: </label></td>
                    <td><input type="text" name="vaccine">
                    <?php echo $vaccineError;?></td>
                </tr>

                <tr>
                    <td><label> Vaccinated Date: </label></td>
                    <td><input type="date" name="vaccinated">
                    <?php echo $vaccinatedError;?></td>
                </tr>
                

                <tr>
                    <td><td><input type="submit" name="SUBMIT" value="SUBMIT">
                    <input type="submit" name="RESET" value="RESET"></td></td>
                </tr>
          
            </table>
        </fieldset>
    </form>

    <form>
          <fieldset>
            <table>
            <tr>
                <td> Name: </td>
                <td><?php echo $name;?>
            </tr>

            <tr>
                <td> Age: </td>
                <td><?php echo $age;?>
            </tr>

            <tr>
                <td> Gender: </td>
                <td><?php echo $gender;?>
            </tr>

            <tr>
                <td> Registration NO: </td>
                <td><?php echo $nmbr;?>
            </tr>

            <tr>
                <td> Registration Date: </td>
                <td><?php echo $registration;?>
            </tr>

            <tr>
                <td> Address: </td>
                <td><?php echo $address;?>
            </tr>

            <tr>
                <td> Hospital Name: </td>
                <td><?php echo $hospital;?>
            </tr>

            <tr>
                <td> Vaccine Name: </td>
                <td><?php echo $vaccine;?>
            </tr>

            <tr>
                <td> Vaccinated Date: </td>
                <td><?php echo $vaccinated;?>
            </tr>

            
            </table>

          </fieldset>

        </form>
    </body>
</html>