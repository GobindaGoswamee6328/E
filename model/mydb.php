<?php
class Model
{

    function OpenCon()
    {
      $conn= new mysqli("localhost","root","","details");
      return $conn;
    }
    function AddEmployee($conn,$table, $name, $id,$nationality,$email,$pass,$birth,$blood,$nmbr,$gender,$address)
    {
        $sql="INSERT INTO $table(name,id, nationality, email, password,birthdate,bloodgroup,nmbr,gender,address) VALUES 
        ('$name', '$id', '$nationality','$email','$pass','$birth','$blood', '$nmbr','$gender','$address')";
       $result= $conn->query($sql);
       return $result;
    }

    function checklogin($conn,$table,$email,$pass){
      $sql = "SELECT email,password from $table where email = '$email' AND password ='$pass'";
      $result = $conn->query($sql);
      return $result;
    }

    function AddEmployee1($conn,$table, $name, $nid,$nationality,$email,$pass,$birth,$nmbr,$gender,$address)
    {
      $sql="INSERT INTO $table (name,nid, nationality, email, password,birthdate,nmbr,gender,address) VALUES 
      ('$name','$nid','$nationality','$email','$pass','$birth', '$nmbr','$gender','$address')";

      $result = $conn->query($sql);
      return $result;
    }

    function ShowEmployeeInformation($conn,$table)
    {
      $sql = "SELECT * FROM $table"; 

      $result = $conn->query($sql);
      return $result;
    }

    function SearchEmployeeNid($conn,$table,$searchData)
    {
      $sql = "SELECT * FROM $table WHERE nid LIKE '$searchData'";

      $result = $conn->query($sql);
      return $result;
    }

    function SearchEmployeeName($conn,$table,$searchData)
    {
      $sql = "SELECT * FROM $table WHERE name LIKE '$searchData'";

      $result = $conn->query($sql);
      return $result;
    }


    function DeleteEmployeeNid($conn,$table,$deleteData)
    {
      $sql = "DELETE FROM $table WHERE nid LIKE '$deleteData'";

      $result = $conn->query($sql);
      return $result;
    }


  function ShowEmployeeNid($conn,$table)
  {
      $sql = "SELECT * FROM $table";
      
      $result = $conn->query($sql);
      return $result;
  }

    function AddVaccine($conn,$table, $name, $age,$gender,$nmbr,$registration,$address,$hospital,$vaccine,$vaccinated)
    {
      $sql="INSERT INTO $table (name,age, gender, nmbr, registration,address,hospital,vaccine,vaccinated) VALUES 
      ('$name','age','$gender','$nmbr','$registration','$address', '$hospital','$vaccine','$vaccinated')";

      $result = $conn->query($sql);
      return $result;
    }

    function ShowVaccinatedInformation($conn,$table)
    {
      $sql = "SELECT * FROM $table"; 

      $result = $conn->query($sql);
      return $result;
    }

    function SearchReqistrationNumber($conn,$table,$searchData)
    {
      $sql = "SELECT * FROM $table WHERE nmbr LIKE '$searchData'";

      $result = $conn->query($sql);
      return $result;
    }

    function SearchVaccinatedName($conn,$table,$searchData)
    {
      $sql = "SELECT * FROM $table WHERE name LIKE '$searchData'";

      $result = $conn->query($sql);
      return $result;
    }

    function DeleteRegistrationNumber($conn,$table,$deleteData)
    {
      $sql = "DELETE FROM $table WHERE nmbr LIKE '$deleteData'";

      $result = $conn->query($sql);
      return $result;
    }  

}

?>