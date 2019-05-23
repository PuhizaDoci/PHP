<?php
session_start();
$errors= array();
$emri= "";
$mbiemri="";
$email="";
$fjalkalimi="";
$numri="";
include_once("DB.php");
if(isset($_POST['submit'])){
if($_SERVER["RESQUEST_METHOD"]=="POST")
{
  $emri=mysqli_real_escape_string($connect,$_POST['fname']);
  $mbiemri=mysqli_real_escape_string($connect,$_POST['lname']);
  $email=mysqli_real_escape_string($connect,$_POST['email']);
  $fjalkalimi=mysqli_real_escape_string($connect,$_POST['password1']);
  $numri=mysqli_real_escape_string($connect,$_POST['num']);

  if(empty($emri))
  {
  array_push($errors,"Name is required");
  }
  else
  {
    $emri=variabla($emri);
      if(!preg_match("/^[a-zA-Z]*$/","$emri"))
      {
          array_push($error,"Invalid Input!");
      }
  }


  if(empty($mbiemri))
  {
  array_push($errors,"Lastname is required");
  }
  else
  {
    $emri=variabla($mbiemri);
      if(!preg_match("/^[a-zA-Z]*$/","$mbiemri"))
      {
          array_push($error,"Invalid Input!");
      }
  }


  if(empty($email))
  {
  array_push($errors,"Email is required");
  }
  else
  {
    $emri=variabla($email);
      if(!preg_match("/[a-zA-Z0-9_\-\.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/","$email"))
      {
          array_push($error,"Invalid Input!");
      }
  }


  if(empty($fjalkalimi))
  {
    array_push($errors,"Password is required");
  }
  else
  {
    $fjalkalimi=variabla($fjalkalimi);
  }


  if(empty($numri))
  {
  array_push($errors,"Email is required");
  }
  else
  {
    $emri=variabla($numri);
      if(!preg_match("[0-9]","$numri"))
      {
          array_push($error,"Invalid Input!");
      }
  }
  if(count($errors)==0)
  {
    $insert="Insert into user values('$emri','$mbiemri','$email','$fjalkalimi','$numri')";

    mysqli_query($connect,$insert);

    $_SESSION["emri"]=$emri;
    $_SESSION["mbiemri"]=$mbiemri;
    $_SESSION["email"]=$email;
    $_SESSION["fjalkalimi"]=$fjalkalimi;
    $_SESSION["numri"]=$numri;

    header("location:MainPage.php");
  }

}

}



 ?>
