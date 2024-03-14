<?php

include '../model/mydb.php';

$name=$age=$gender=$nmbr=$registration=$address=$hospital=$vaccine=$vaccinated=$haserror="";
$nameError=$ageError=$genderError=$nmbrError=$registrationError=$addressError=$hospitalError=$vaccineError=$vaccinatedError="";
$ageValidation=$addressValidation="";

if(isset($_REQUEST["SUBMIT"]))
{
  if(empty($_REQUEST['name']))
  {
    $nameError= "*Name Required";
  }
  else
  {
     $name=$_REQUEST['name'];
     
    if(!preg_match("/^[a-zA-z]*$/", $name))
    {
      $nameError= "Invalid Name!";
    }
  }

  if(empty($_REQUEST["age"]))
  {
    $ageError = "*Age Required";
  }
  else
  {
    $age = $_REQUEST["age"];

    $ageValidation = strlen($age);  
    if ($ageValidation > 3)
    {
      $ageError = "Invalid Age!";
    }
  }

  if(empty($_REQUEST["gender"]))
  {
    $genderError = "*Select your Gender";
  }
  else
  {
    $gender = $_REQUEST["gender"];
  }

  if(empty($_REQUEST["nmbr"]))
  {
    $nmbrError = "*Number Required";

  }
  else
  {
    $nmbr = $_REQUEST["nmbr"];

    if (!preg_match ("/^\d{11}$/", $nmbr))
    {
      $nmbrError = "Invalid Nmbr!";
    }
  }

  if(empty($_REQUEST["registration"]))
  {
    $registrationError = "*Register Date Required!";
  }
  else
  {
    $registration = $_REQUEST["registration"];
  }
  
  if(empty($_REQUEST["address"]))
  {
    $addressError = "*Address Required";
  }
  else
  {
    $address = $_REQUEST["address"];

    $addressValidation = strlen($address);  
    if ($addressValidation > 40)
    {
      $addressError = "Invalid Address!";
    }
  }

  if(empty($_REQUEST['hospital']))
  {
    $hospitalError= "*Hospital Name Required!";
  }
  else
  {
     $hospital=$_REQUEST['hospital'];
     
    if(!preg_match("/^[a-zA-z]*$/", $hospital))
    {
      $hospitalError= "Invalid Hospital Name!";
    }
  }

  if(empty($_REQUEST['vaccine']))
  {
    $vaccineError= "*Vaccine Name Required!";
  }
  else
  {
     $vaccine=$_REQUEST['vaccine'];
     
    if(!preg_match("/^[a-zA-z]*$/", $vaccine))
    {
      $vaccineError= "Invalid Vaccine Name!";
    }
  }

  if(empty($_REQUEST["vaccinated"]))
  {
    $vaccinatedError = "*Vaccination Date Required!";
  }
  else
  {
    $vaccinated = $_REQUEST["vaccinated"];
  }

  if($haserror!=1)
  {
     $mydbadd2 = new Model();
     $conobj3 = $mydbadd2->OpenCon();
     $result3=$mydbadd2->AddVaccine($conobj3,"vaccinated",$_REQUEST["name"],$_REQUEST["age"],$_REQUEST["gender"],
     $_REQUEST["nmbr"], $_REQUEST["registration"],$_REQUEST["address"],$_REQUEST["hospital"], $_REQUEST["vaccine"],$_REQUEST["vaccinated"]);
 
     if($result3===TRUE)
    {
       echo "Successfully Added";
    }
   else
   {
      echo "Error Occurred".$conobj3->error;
   }
 }
   else
   {
      echo "Please complete the validation ";
   }

}

?>
