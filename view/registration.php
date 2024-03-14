<?php
include '../controller/registrationcontrol.php';
?>

<!DOCTYPE html>
<html>
  <body>
    <form action="" method="POST">
        <fieldset>
        <legend><h1> Employee Registration Form </h1></legend>
            <table>
                <tr>
                    <td><label> Full Name: </label></td>
                    <td><input type="text" name="name">
                    <?php echo $nameError;?></td>
                </tr>

                <tr>
                    <td><label> ID: </label></td>
                    <td><input type="text" name="id">
                    <?php echo $idError; ?></td>
                </tr>

                <tr>
                    <td><label> Nationality: </label></td>
                    <td><input type="text" name="nationality">
                    <?php echo $nationalityError; ?></td>
                </tr>

                <tr>
                    <td><label> Email Address: </label></td>
                    <td><input type="text" name="email">
                    <?php echo $emailError;?></td>
                </tr>

                <tr>
                    <td><label> Password: </label></td>
                    <td><input type="password" name="pass">
                    <?php echo $passError;?></td>
                </tr>

                <tr>
                    <td><label> Date of Birth: </label></td>
                    <td><input type="date" name="birth">
                    <?php echo $birthError;?></td>
                </tr>

                <tr>
                    <td><label> Blood Group: </label></td>
                        
                        <td><select id="blood" name="blood">
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <?php echo $bloodError; ?> </td>
                        </select>
                </tr>

                <tr>
                    <td><label> Contract Number: </label></td>
                    <td><input type="text" name="nmbr">
                    <?php echo $nmbrError;?></td>
                </tr>

                <tr>
                    <td><label> Gender: </label></td>
                    <td><input type="radio" name="gender" value="male">Male
                    <input type="radio" name="gender" value="female">Female
                    <input type="radio" name="gender" value="other">Other
                    <?php echo $genderError;?></td>
                </tr>

                <tr>
                    <td><label> Address: </label></td>
                    <td><textarea rows="3" cols="30" name="address"></textarea>
                    <?php echo $addressError;?></td>
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
                <td> Full Name: </td>
                <td><?php echo $name;?>
            </tr>

            <tr>
                <td> Id: </td>
                <td><?php echo $id;?>
            </tr>

            <tr>
                <td> Nationality: </td>
                <td><?php echo $nationality;?>
            </tr>

            <tr>
                <td> Email Address: </td>
                <td><?php echo $email;?>
            </tr>

            <tr>
                <td> Password: </td>
                <td><?php echo $pass;?>
            </tr>

            <tr>
                <td> Date of Birth: </td>
                <td><?php echo $birth;?>
            </tr>

            <tr>
                <td> Blood Group: </td>
                <td><?php echo $blood;?>
            </tr>

            <tr>
                <td> Contract Number: </td>
                <td><?php echo $nmbr;?>
            </tr>

            <tr>
                <td> Gender: </td>
                <td><?php echo $gender;?>
            </tr>

            <tr>
                <td> Address: </td>
                <td><?php echo $address;?>
            </tr>
            </table>

          </fieldset>

        </form>
  </body>

</html>