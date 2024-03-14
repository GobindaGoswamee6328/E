<?php
include '../model/mydb.php';

$name=$id=$nationality=$email=$pass=$birth=$blood=$nmbr=$gender=$address=$haserror="";
$nameError=$idError=$nationalityError=$emailError=$passError=$birthError=$bloodError=$nmbrError=$genderError=$addressError="";
$idValidation=$emailValidation=$passValidation=$addressValidation="";

if(isset($_REQUEST["SUBMIT"]))
{
  if(empty($_REQUEST['name'])){
    $nameError= "*Name Required";
  }else{
     $name=$_REQUEST['name'];
     
    if(!preg_match("/^[a-zA-z]*$/", $name))
    {
      $nameError= "Invalid Name!";
    }
  }

  if(empty($_REQUEST["id"]))
  {
    $idError = "*Id Required";
  }
  else
  {
    $id = $_REQUEST["id"];

    $idValidation = strlen($id);  
    if ($idValidation > 12)
    {
      $idError = "Invalid Id!";
    }
  }

  if(empty($_REQUEST["nationality"]))
  {
    $nationalityError = "*Enter your Nationality";
  }
  else
  {
    $nationality = $_REQUEST["nationality"];

    if(!preg_match("/^[a-zA-z]*$/", $nationality))
    {
      $nationalityError= "Invalid Nationality!";
    }
  }

  if(empty($_REQUEST["email"]))
  {
    $emailError = "*E-mail Required";
  }
  else
  {
    $email = $_REQUEST["email"];

    $emailValidation = !filter_var($email,FILTER_VALIDATE_EMAIL);  
    if($emailValidation)
    {
      $emailError = "Invalid E-mail!";
    
    }

  }

  if(empty($_REQUEST["pass"]))
  {
    $passError = "*Password Required";
  }
  else
  {
    $pass = $_REQUEST["pass"];

    $passValidation = strlen($pass);  
    if ($passValidation > 20)
    {
      $passError = "Invalid Pass!";
    }
  }

  if(empty($_REQUEST["birth"]))
  {
    $birthError = "*Birthdate Required";
  }
  else
  {
    $birth = $_REQUEST["birth"];
  }

  if(empty($_REQUEST["blood"]))
  {
    $bloodError = "*Select Your Blood-Group";
  }
  else
  {
    $blood = $_REQUEST["blood"];
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

  if(empty($_REQUEST["gender"]))
  {
    $genderError = "*Select your Gender";
  }
  else
  {
    $gender = $_REQUEST["gender"];
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

  if($haserror!=1)
  {
    $mydb= new Model();
    $conobj= $mydb->Opencon();
    $result=$mydb->AddEmployee($conobj,"employee",$_REQUEST["name"],$_REQUEST["id"],$_REQUEST["nationality"],
    $_REQUEST["email"], $_REQUEST["pass"],$_REQUEST["birth"],$_REQUEST["blood"],$_REQUEST["nmbr"], $_REQUEST["gender"],$_REQUEST["address"]);

    if($result===TRUE)
    {
       echo "Successfully Added";
    }
   else
   {
      echo "Error Occurred".$conobj->error;
   }
 }
   else
   {
      echo "Please complete the validation ";
   }

}
?>