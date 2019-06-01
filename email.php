<?php
$nameErr="";
$emailErr="";
$messageErr="";
$name=$email=$comment="";
   if ($_SERVER["REQUEST_METHOD"] == "POST"){
   if(empty($_POST["Person"])) {
      $nameErr = "Name is required";
     }
	 else {
		 $name = test_input($_POST["Person"]);
		 if (!preg_match("/^[a-zA-Z]*$/",$name)) {
         $nameErr = "Only letters";

         }

       }
    if(empty($_POST["Email"])){
		$emailErr="Email is required";
	}
	else{
		$email=$_POST["Email"];

     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	  $emailErr = "Invalid email format";

	  }
	}
	if(empty($_POST["Message"])){
		$messageErr="Required field";
	}
	else{
		$message=test_input($_POST["Message"]);
		if(strlen($message)>256)
		{
			$messageErr="You can write only 255 characters";

		}

	}

	if (empty($nameErr) and empty($emailErr) and empty($messageErr)){

      $to = 'puhizad@gmail.com';
      $subject = 'Name:'.$name.' Email:'.$email;
	  $message= $message;
	  $headers = "From:" . $name;

      mail($to, $subject, $message,$headers);

          $name = $email =$message= '';

	  }
  }



function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
?>
