<?php include('header.php');
?>
<link rel="stylesheet" type="text/css" href="css/MainPage.css">

<style>
.card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 40%;
}
.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}
.container {
    padding: 2px 16px;
}
#admin {
    margin: 5%;
    border: 1px solid gray;
    padding: 8px;
}
h1 {
    text-align: center;
    text-transform: uppercase;
    opacity: 0.9;
    color: #088A4B;
}
p {
    letter-spacing: 3px;
}
#formstyle{
    height: 50px;
    width: 500px;
    background-color: #ccc;
    color: #2e2e2e;
    font-size: 22px;
    text-align: center;
    font-family: 'Teko', sans-serif;
}
.personeli{
    font-size: 14px;
    background-color: white;

}
</style>


   <script>
function showUser(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  }
  if (window.XMLHttpRequest) {
    xmlhttp=new XMLHttpRequest();
  } else { 
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("txtHint").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","getuser.php?q="+str,true);
  xmlhttp.send();
}
</script>

<main>
    <div class="container">
        <div class="main-top">
            <nav>
                <ul>
                    <li>
                        <a href="MainPage.php">
                            HOME
                        </a>
                    </li>

                    <li>
                        <a href="Company.php">COMPANY</a>
                    </li>
                    <li>
                        <a href="Services.php">SERVICES</a>
                    </li>
                    <li class="active">
                        <a href="Staff.php">STAFF</a>
                    </li>
                </ul>
            </nav>


        <div class="maintop1">
            <div class="maintop2">
                <h1 id="logo" title="Exoy">Exoy</h1>
                <p><u>Tech Marketplace</u></p>
            </div>
        </div>
    </div>
    <br>
</div>
    <section class="small-banner partners-banner">
        <h4>Our staff</h4>
    <section class="our-costumers text-center section-padding grey-background">
        <div class="container">
            <h1 class="main-title">For our costumers</h1>
            <p class="description-item">Our Fantastic Exoy Staff</p>


        </div>
                <div id="admin">
<form>
<select name="users" id="formstyle" onchange="showUser(this.value)">
<option class="personeli" value="">Personeli:</option>
<option class="personeli" value="1000">Puhize Doci</option>
<option class="personeli" value="1001">Rrezarta Sallauka</option>
<option class="personeli" value="1002">Etnik Krasniqi</option>
<option class="personeli" value="1003">Hana Gashi</option>
<option class="personeli" value="1004">Trim Hasani</option>

</select>
</form>
<br>
<div id="txtHint"><b>Te dhenat e stafit do te listohen ketu!</b></div>
</div>
</center>

    </section>
</section>
</main>
<?php include('footer.php');?>
</body>
</html>
