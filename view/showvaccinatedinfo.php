<?php

include '../controller/showvaccinecontrol.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <title>ShowVaccinatedInformation</title>
    </head>

    <body>
        <h1>Show Vaccinated Information : </h1>
        <?php  
    
        if($result->num_rows>0){
            echo("<table>");
            echo("<th>Name </th><th>Age </th> <th>Gender </th> <th>Registration NO </th> <th>Registration Date </th> <th>Address</th><th>Hospital Name </th><th>Vaccine Name </th><th>Vaccinated Date </th>");

            foreach($result as $row){
                echo("<tr>");
                echo("<td>".$row['name']."</td>");
                echo("<td>".$row['age']."</td>");
                echo("<td>".$row['gender']."</td>");
                echo("<td>".$row['nmbr']."</td>");
                echo("<td>".$row['registration']."</td>");
                echo("<td>".$row['address']."</td");
                echo("<td>".$row['hospital']."</td>");
                echo("<td>".$row['vaccine']."</td>");
                echo("<td>".$row['vaccinated']."</td>");
                echo("</tr>");
            }

            echo("</table>");
        }
        
        
        ?>
    </body>
</html>