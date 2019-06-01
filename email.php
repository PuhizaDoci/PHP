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


<?php 
// ini_set("SMTP","ssl://stmp.gmail.com");
// ini_set("smtp_port","25");
// // ini_set('sendmail_from', "$_POST['email'])";
// if(isset($_POST['submit'])){
//     $to = "puhizad@gmail.com"; // this is your Email address
//     $from = $_POST['email']; // this is the sender's Email address
//     $first_name = $_POST['first_name'];
//     $last_name = $_POST['last_name'];
//     $subject = "Form submission";
//     $subject2 = "Copy of your form submission";
//     $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
//     $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

//     $headers = "From:" . $from;
//     $headers2 = "From:" . $to;
//     mail($to,$subject,$message,$headers);
//     mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
//     echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
//     // You can also use header('Location: thank_you.php'); to redirect to another page.
//     }
?>
<!-- 
<!DOCTYPE html>
<head>
<title>Form submission</title>
</head>
<body>

<form action="" method="post">
First Name: <input type="text" name="first_name"><br>
Last Name: <input type="text" name="last_name"><br>
Email: <input type="text" name="email"><br>
Message:<br><textarea rows="5" name="message" cols="30"></textarea><br>
<input type="submit" name="submit" value="Submit">
</form>

</body> -->
<!-- </html> -->
