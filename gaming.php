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
      <?
          unset($_COOKIE['my_login']);
          setcookie('my_login', '', time() - 3600, '/');
      ?>
      <form action="play.php" method="GET"><br>
          Name: <input type="text" name="login"><br><hr />
      <input type="submit" value="Start Game" id="buttons" >
      </form>
    </body>
</html>