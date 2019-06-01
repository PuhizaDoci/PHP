<?php
session_start();


$emriErr = $mbiemriErr = $emailErr = $fjalkalimiErr = $numriErr = "";
$emailErr1 = $fjalkalimiErr1 = "";
$emri= "";
$mbiemri="";
$email="";
$fjalkalimi="";
$numri="";
$errors = "";
include("DB.php");
include('Klienti.php');

if(isset($_POST['submit'])){
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  $emri=mysqli_real_escape_string($connect,$_POST['emri']);
  $mbiemri=mysqli_real_escape_string($connect,$_POST['mbiemri']);
  $email=mysqli_real_escape_string($connect,$_POST['email']);
  $fjalkalimi=mysqli_real_escape_string($connect,$_POST['fjalkalimi']);
  $numri=mysqli_real_escape_string($connect,$_POST['numri']);

  if(empty($emri))
  {
  $emriErr = "Name is required";

  }
  else
  {
    $emri=variabla($emri);
      if(!preg_match("/^[a-zA-Z]*$/","$emri"))
      {
         $emriErr = "Invalid input";
        
      }
  }


  if(empty($mbiemri))
  {
  $mbiemriErr = "Lastname is required";
  }
  else
  {
    $mbiemri=variabla($mbiemri);
      if(!preg_match("/^[a-zA-Z]*$/","$mbiemri"))
      {
         $mbiemriErr = "Invalid input";
      }
  }


  if(empty($email))
  {
  $emailErr = "Email is required";
  }
  else
  {
    $email=variabla($email);
      if(!preg_match("/[a-zA-Z0-9_\-\.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/","$email"))
      {
         $emailErr = "Invalid input";
      }
  }


  if(empty($fjalkalimi))
  {
    $fjalkalimiErr = "Password is required";
  }
  else
  {
    $fjalkalimi=variabla($fjalkalimi);
  }


  if(empty($numri))
  {
  $numriErr = "Number is required";
  }
  else
  {
    $numri=variabla($numri);
      if(!preg_match("/[0-9]{8}/","$numri"))
      {   
        $numriErr = "Invalid input";        
      }
  }
  if(empty($emriErr) and empty($mbiemriErr) and empty($emailErr) and empty($fjalkalimiErr) and empty($numriErr))
  {
    $insert="Insert into input
    values('$emri','$mbiemri','$email','$fjalkalimi','$numri')";

    mysqli_query($connect,$insert);

    $_SESSION["emri"]=$emri;
    $_SESSION["mbiemri"]=$mbiemri;
    $_SESSION["email"]=$email;
    $_SESSION["fjalkalimi"]=$fjalkalimi;
    $_SESSION["numri"]=$numri;


      $klienti = new Klienti($emri,$mbiemri,$email,$numri);
      echo "Klienti: ". $klienti->getEmri() . " " ;
      echo $klienti->getMbiemri() . " me numrin: ";
      echo $klienti->getNumri();
      echo "<br>";
      echo $klienti->getEmail();
      echo "<br>";

      echo "Email ka " . strlen($klienti->getEmail()) . " karaktere.";
  }   


}

}
if(isset($_POST['login']))
{
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  $email=mysqli_real_escape_string($connect,$_POST['email']);
  $fjalkalimi=mysqli_real_escape_string($connect,$_POST['fjalkalimi']);

  if(empty($email))
  {
    $emailErr1 = "Email is required";
  }
  else
  {
    $email=variabla($email);

  if(!preg_match("/[a-zA-Z0-9_\-\.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/","$email"))
     {
          $emailErr1 = "Invalid input";
     }
  }

   if(empty($fjalkalimi))
  {
    $fjalkalimiErr1 = "Password is required";
  }
  else
  {
    $fjalkalimi=variabla($fjalkalimi);
  }

  try{
  if(empty($emailErr1) and empty($fjalkalimiErr1))
  {
    $login="select * from input where email= '".$email."' and fjalkalimi = '".$fjalkalimi."'";

    $result=mysqli_query($connect,$login);

    if(mysqli_num_rows($result)==1)
    {
      $_SESSION["email"]=$email;
      while($rreshti = mysqli_fetch_assoc($result))
      {
        $_SESSION["emri"]=$rreshti["emri"];
        $_SESSION["mbiemri"]=$rreshti["mbiemri"];
      }
      sleep(3);
      header('location:MainPage.php');
    }
    else
    {
     $errors = "Email or password wrong!";
    }
    $email="";
    $password="";
    }
  }catch(Exception $e){
    echo $e->messageError();
  }


}
}


function variabla($var1){
  $var1 = trim($var1);
  $var1 = stripslashes($var1);
  $var1 = htmlspecialchars($var1);
  return $var1;
}

 ?>
