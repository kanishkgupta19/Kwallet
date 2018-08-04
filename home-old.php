
<html>
<head><title>K-Wallet</title>
<link rel="icon" href="imgs/logo2.png" type="image/ico">
</head>
<!--Bootstrap 4.1 version files-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!-- W3 css & javascript files -->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://www.w3schools.com/lib/w3.js"></script>

<!-- Angular files -->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">
	
<!---------W3 css----------------->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!------------------------------->


<style>
.containers {
    position: relative;
    text-align: center;
    color: white;
}

/* Bottom left text */
.bottom-left {
    position: absolute;
    bottom: 8px;
    left: 16px;
}

/* Top left text */
.top-left {
    position: absolute;
	right:2px;
    top: 10px;
    left: 8px;
}
a:active {

text-decoration: none;


/* font-size: 9px; this here I commented out*/

}
</style>


<body>
<?php //include"newheader.php"; ?>

    <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <br><br><br>
	  <section>
        <div class="containers">
		<img class="w3-grayscale-max" src="imgs/Indian-rupee.jpg" width=100% height=70%>
		<div class="top-left"><br><br><br>
		<div class="row">
          <div class="col-md-12"><h1 class="display-3"><font face="Arial">Welcome to K-Wallet</font></h1>
          <font size=3>Transfer, Recharge, Shop, and Pay easily anywhere on your fingertips with K-wallet.<br>Transact and pay from your Smartphones, Tabs, and Computers.</font><br><br><br>
          <p><button class="btn btn-primary btn-xlg" role="button"><h3>Create Account</h3></button></p><br><font color="white">Already have an account? <font id="sg" color="white" onmouseenter="changecolor('c')" onmouseleave="changecolor('k')" data-toggle="modal" data-target="#exampleModal"><b>Sign in Here</b></font></font>
        </div>
		<!--<div class="col-md-4"><div class="w3-display-container w3-text-black"><img src="imgs/phone2.png" width=80% height=70%><div class="w3-display-left w3-large"><br><br><br>&emsp;&emsp;&emsp;&emsp;<img src="imgs/allin1.gif" width=100 height=100></div></div></div>-->
		
		</div>
		
		</div>
		</div></section>
<!-- --------------------------------------------Modal------ ----------------------------------->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel"><center><img src="imgs/logo2.png" height=50 width=50>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;LOGIN</center></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="login.php">
  <div class="form-group">
    <label for="exampleInputEmail1">User ID</label>
    <input type="number" class="form-control" ng-model="userid" id="userid" name="userid" aria-describedby="emailHelp" placeholder="Enter K-Wallet User ID" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" ng-model="pswd" id="userpassword" name="userpassword" placeholder="Password" required>
  </div>
  <button type="submit" class="btn btn-primary" id="formbuton">Log In</button><br>
  <a href="">Forgot Password? </a>
</form>
      </div>
      <div class="modal-footer">
	  <a href="" onclick="loginf()">Register to K-Wallet</a>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!----------------------------------------------------------------------------------------------->
		
		
	  
	   <!------------- Functions ------------------------------->
      <br><div class="card"><div class="card-body">
	  <div class="row">
 <div class="col-md-2" ng-app="" onclick="failed()"><center><img src="imgs/recharge.png" width=100 height=100  id="recharge" onmouseover="changeicon(this.id)" onmouseleave="defaulticon(this.id)"><br><font color="black" size=4 id="rechargetext">Mobile<br> Recharge</font></div></center>
 
  <div class="col-md-2" onclick="failed()"><a href="http://localhost:8080/Kstore/home.php"><center><br><img src="imgs/kstore.png" width=200 height=80 id="kstore" onmouseover="changeicon(this.id)" onmouseleave="defaulticon(this.id)"></a><br><font color="black" size=4 id="kstoretext">shopping</font></div></center>
 
 <div class="col-md-2" onclick="failed()"><center><img src="imgs/banking.png" width=100 height=100 id="banking" onmouseover="changeicon(this.id)" onmouseleave="defaulticon(this.id)"><br><font color="black" size=4 id="bankingtext">K-Wallet<br>Bank</font></div></center>
 
 <div class="col-md-2" onclick="failed()"><a href="#"><center><img src="imgs/wallet.png" width=100 height=100 id="wallet" onmouseover="changeicon(this.id)" onmouseleave="defaulticon(this.id)"></a><br><font color="black" size=4 id="wallettext">Manage<br>K-Wallet</font></div></center>
 
 <div class="col-md-2" onclick="failed()"><center><img src="imgs/bill.png" width=100 height=100 id="bill" onmouseover="changeicon(this.id)" onmouseleave="defaulticon(this.id)"><br><font color="black" size=4 id="billtext">Pay<br>bill</font></div></center>
 
 <div class="col-md-2" onclick="failed()"><center><img src="imgs/dth.png" width=100 height=100 id="dth" onmouseover="changeicon(this.id)" onmouseleave="defaulticon(this.id)"><br><font color="black" size=4 id="dthtext">DTH<br>Recharge</font></div></center>
 </div>
 <br>
 <div class="row">
 <div class="col-md-2" ng-app="" onclick="failed()"><center><img src="imgs/bhim.png" width=100 height=100  id="bhim" onmouseover="changeicon(this.id)" onmouseleave="defaulticon(this.id)"><br><font color="black" size=4 id="bhimtext">BHIM<br> UPI</font></div></center>
 
 <div class="col-md-2" onclick="failed()"><center><img src="imgs/offers.png" width=140 height=100 id="offers" onmouseover="changeicon(this.id)" onmouseleave="defaulticon(this.id)"><br><font color="black" size=4 id="offerstext">Offers &<br>Deals</font></div></center>
 
 <div class="col-md-2" onclick="failed()"><center><img src="imgs/travel.png" width=100 height=100 id="travel" onmouseover="changeicon(this.id)" onmouseleave="defaulticon(this.id)"></a><br><font color="black" size=4 id="traveltext">Travel<br>Booking</font></div></center>
 
 <div class="col-md-2" onclick="failed()"><center><img src="imgs/transfer.png" width=100 height=100 id="transfer" onmouseover="changeicon(this.id)" onmouseleave="defaulticon(this.id)"><br><font color="black" size=4 id="transfertext">Transfer<br>Cash</font></div></center>

 <div class="col-md-2" onclick="failed()"><center><img src="imgs/movie.png" width=100 height=100 id="movie" onmouseover="changeicon(this.id)" onmouseleave="defaulticon(this.id)"><br><font color="black" size=4 id="movietext">Book Movie<br>Tickets</font></div></center>
 
 <div class="col-md-2" onclick="failed()"><center><img src="imgs/QR.png" width=100 height=100 id="QR" onmouseover="changeicon(this.id)" onmouseleave="defaulticon(this.id)"><br><font color="black" size=4 id="QRtext">QR<br>Code</font></div></center>
 </div>

 </div></div><br>
 
 <!--------------------------------slideshow section-------------------------------------->
 <section><div class="w3-content w3-section" style="max-width:1300px">
  <img class="mySlides" src="imgs/banner1.png" style="width:100%" height=400>
  <img class="mySlides" src="imgs/banner2.png" style="width:100%"  height=400>
  <img class="mySlides" src="imgs/banner3.png" style="width:100%"  height=400>
</div>
<center><button class="w3-button w3-black" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black" onclick="plusDivs(1)">&#10095;</button></center></section><hr>
  
  <script>
function changecolor(st)
{  if(st=='c')
	$("#sg").attr("color","blue");
if(st=='k')
	$("#sg").attr("color","white");
}
  function failed()
  {alert("Login to continue");
  }
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 3000); // Change image every 2 seconds
}
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>

  <!----------------------------------------------------------------->
 
 
 

	  <!------------------Section 5 About us ------------------------------------------>

      <section name="aboutus" id="aboutus"><div class="container">
	  <center><h1>About us</h1></center><br><br>
        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-4"><div class="card">
		  <div class="card-header">
            <h2>Fully Secure</h2></div>
			<div class="card-body">
            <p>We promise all our wallet holders to give you the world class security on all our services. All transactions made through K-Wallet will be safe and easy. Our customer's Security is our topmost priority. </p></div>
          </div></div>
          <div class="col-md-4">
		  <div class="card">
		  <div class="card-header">
            <h2>24 X 7 Support</h2></div>
			<div class="card-body">
            <p>The Support center of K-Wallet is open 24 X 7 to take your queries and to resolve your issues to insure safe and easy working. We guarantee our customer to resolve the issue within 36 hrs of registering complaints. </p></div>
          </div></div>
          <div class="col-md-4">
		  <div class="card">
		  <div class="card-header">
            <h2>Services</h2>
			</div>
			<div class="card-body">
            <p>K-wallet allows you to Recharge mobile, Pay Bills, Send or Receive money, transfer money to bank and many more with only few clicks.</p></div>
          </div></div>
        </div>

        <hr>

      </div></section> <!-- /container -->

    </main>

    <footer>
      <div class="w3-panel w3-black"><center><br>Contact Us at : support@kwallet.tk<br>Helpline 24/7: +91-8178218180<br>Created by Kanishk<br><br>© 2017-2018 K-Wallet<br><br></center></div>
    </footer>
<script>
function changeicon(x)
{
	$("#"+x).attr("src","imgs/"+x+"red.png");
	$("#"+x+"text").attr("color","blue");
}
function defaulticon(x)
{
	$("#"+x).attr("src","imgs/"+x+".png");
	$("#"+x+"text").attr("color","black");
}
</script>
  </body>
</html>
