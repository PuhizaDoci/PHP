<?php
session_start();


<?php
$cookie_name = "user";
$cookie_value = $_POST['emri'];
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}

?>





$errors= array();
$emri= "";
$mbiemri="";
$email="";
$fjalkalimi="";
$numri="";
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
  array_push($errors,"Name is required");
  }
  else
  {
    $emri=variabla($emri);
      if(!preg_match("/^[a-zA-Z]*$/","$emri"))
      {
          array_push($error,"Invalid Input!");
          echo "invalid input";
      }
  }


  if(empty($mbiemri))
  {
  array_push($errors,"Lastname is required");
  }
  else
  {
    $mbiemri=variabla($mbiemri);
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
    $email=variabla($email);
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
    $numri=variabla($numri);
      if(!preg_match("/[0-9]{8}/","$numri"))
      {
          array_push($error,"Invalid Input!");
      }
  }
  if(count($errors)==0)
  {
    $insert="Insert into input
    values('$emri','$mbiemri','$email','$fjalkalimi','$numri')";

    mysqli_query($connect,$insert);

    $_SESSION["emri"]=$emri;
    $_SESSION["mbiemri"]=$mbiemri;
    $_SESSION["email"]=$email;
    $_SESSION["fjalkalimi"]=$fjalkalimi;
    $_SESSION["numri"]=$numri;

   // header("location:MainPage.php");
  }

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
if(isset($_POST['login']))
{
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  $email=mysqli_real_escape_string($connect,$_POST['email']);
  $fjalkalimi=mysqli_real_escape_string($connect,$_POST['fjalkalimi']);

  if(empty($email))
  {
    array_push($errors, "Email is required!");
  }
  else
  {
    $email=variabla($email);

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

  if(count($errors)==0)
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
      array_push($errors, "Email or Password is wrong!");
    }
    $email="";
    $password="";
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
