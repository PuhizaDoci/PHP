<html>
<head>
<style>
#buttons {
        border-radius:4px;
        background-color:rgb(180,180,180);
        color:black;
        width:9%;
        font-size:17px;
       height:6%;
       margin-left:25%;
        border: 2px solid rgb(90,90,90);
        float:left;
		outline:none;
       }
      #buttons:hover{
        background-color:rgb(90,90,90);
        color:white;
        width:9%;
        height: 6%;
        font-size:17px;
        text-align: center;
        cursor:pointer;
		outline:none;
      }
      #buttons:active{
        outline:none;


</style>
</head>
<body>
    <?php

        function compare_two_numbers($number_A, $number_B){

            if ($number_A == $number_B){
                echo "Congratulations! You won!";
                $GLOBALS['b_match'] = true;
            }
            if ($number_A > $number_B){
                echo "You should go lower.";
            }
            if ($number_A < $number_B){
                echo "You should go higher.";
            }
        }
    ?>
    <?php
        $GLOBALS['b_match'] = false;
        if(isset($_GET['number_guess'])){
            setcookie('my_guess',$_GET['number_guess']);
            $_COOKIE['my_guess'] = $_GET['number_guess'];
        }else{
            unset($_COOKIE['my_guess']);
            setcookie('my_guess', '', time() - 3600, '/');
        }
        if(isset($_GET['login'])){
            setcookie('my_login',$_GET['login']);
            setcookie('my_rand',rand(1,100));
            $_COOKIE['my_login'] = $_GET['login'];
            $GLOBALS['b_match'] = false;
        }
		echo "</br>";
        echo "<span style='font-size:17px;'>Welcome</span> " . $_COOKIE['my_login'] . "!";
        if(isset($_COOKIE['my_guess'])){
            echo "</br>";
            if (is_numeric($_COOKIE['my_guess'])){
                echo "You have chosen " . $_COOKIE['my_guess'] . ".</br>";
            }else {
                echo "Please, give me numeric values! 🙂" . ".</br>";
            }
            //echo "The random is " . $_COOKIE['my_rand'] . ".</br>";
            compare_two_numbers($_COOKIE['my_guess'], $_COOKIE['my_rand']);
            echo "</br>";
        } else {
            echo "</br>";
            echo "<span style='font-size:17px;'>Guessing is not difficult! :)</span>";
        }
        if (!$GLOBALS['b_match']){
            echo "</br>";
            echo "<span style='font-size:17px;'>Try to guess:</span>";
			echo "<br>";
			$start= array(2,1,3);
	  sort($start);
			foreach($start as $i)
			echo "$i"." ";
            echo "</form>";
            echo "<form action='game.php' method='get'>";
            echo "<span style='margin-left:-34%;font-size:17px;'>Number: </span><input type = 'text' name = 'number_guess' style=' width:35%;
         margin-left:2%;
         width:15%;
         font-style: italic;
         font-family: Cambria;
         font-size: 14px;
         height: 6%;
         padding: 4px 8px;
         font-size:15px;
         border: 2px solid rgb(90,90,90);
         border-radius: 4px;
         background-color: #f8f8f8;
         opacity: 0.8;
         outline:0;'>";
            echo "<input type='submit' id='buttons'>";
            echo "</form>";
        } else {
            echo "<form action='game.php'><br>";
            echo "<input type='submit' value='Dare to play again?' id='buttons' style='width:21%;margin-left:2%;'>";
        }
    ?>
</body>
</html>
