<?php
$nameErr="";
$emailErr="";
$messageErr="";
$name=$email=$message1="";
   if ($_SERVER["REQUEST_METHOD"] == "POST"){
   if(empty($_POST["Person"])) {
      $nameErr = "Name is required";
      echo $nameErr;
     }
	 else {
		 $name = test_input($_POST["Person"]);
		 if (!preg_match("/^[a-zA-Z]*$/",$name)) {
         $nameErr = "Only letters";
         echo $nameErr;
         }

       }
    if(empty($_POST["Email"])){
		$emailErr="Email is required";
		echo $emailErr;
	}
	else{
		$email=$_POST["Email"];

     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	  $emailErr = "Invalid email format";
 		echo $emailErr;
	  }
	}
	if(empty($_POST["Message"])){
		$messageErr="Required field";
		echo $messageErr;

	}
	else{
		$message=test_input($_POST["Message"]);
		if(strlen($message)>256)
		{
			$messageErr="You can write only 255 characters";
			echo $messageErr;
		}

	}
	ini_set("SMTP","ssl:smtp.gmail.com" );
	ini_set("smtp_port","465");
	if(isset($_POST['submit'])){
	if (empty($nameErr) and empty($emailErr) and empty($messageErr)){

      $to = 'puhizad@gmail.com';
      $from = $_POST['Email'];
      $subject = 'Name:'.$name.' Email:'.$email;
	  $message1= $message;
	  $headers = "From:" . $from;

	 try{
      mail($to, $subject, $message1, $headers);

          $name = $email =$message= '';
     echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";


 	  }catch(Exception $ex){
 	  echo $ex->errorMessage();
 	  exit();
 }
}
  }
}



function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
?>

