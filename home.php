<?php SESSION_start();
$_SESSION["statusr"]="";
?>
<html>
<head>
<title>K-Wallet</title>
<link rel="icon" href="imgs/logo2.png" type="image/ico">
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<!----------------------------------------------jQuery file----------------------------------------->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Angular files -->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<style>
@media only screen and (max-width: 400px) {
#mysidebar{onclick:"w3_open2()";}
}
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
</style>
<script>
$("document").ready(function(){
    $("window").resize(function(){
        w3_open2();
    });
});
</script>
<body ng-app="myApp" ng-controller="myCtrl">
<div class="w3-sidebar w3-bar-block w3-card w3-animate-left w3-border" style="display:none" id="mySidebar" onmouseleave="w3_close()"><br><br><br>
  <button class="w3-bar-item w3-button w3-large" onclick="w3_close()"><font color=#FF0000><b>Close X</b></font></button>
  <div class="w3-bar-item w3-border">
  <center><img src="imgs/user.png" height=60 width=60><h2> Hello, Guest</h2><h5>Login or Register to K-Wallet to enjoy all the features</h5><br><br><a  data-toggle="modal" data-target="#exampleModal"><button class="btn btn-lg btn-success">Log in/ Sign up</button></a></center>
  </div>
</div>

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


<!------------------------NAVBAR---------------------------------------->
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
       <button id="openNav" class="w3-button w3-large" onclick="w3_open()"><font color="white">&#9776;</font></button>
	   
	   <a class="navbar-brand" href="#"><img src="logo2.png" height=50 width=50></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Offers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#aboutus">About Us</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Contact us</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Call</a>
              <a class="dropdown-item" href="#">Send email</a>
              <a class="dropdown-item" href="#">chat with us</a>
            </div>
          </li>
        </ul>
        <p><img src="imgs/user.png" height=40 width=40> &nbsp;<font color="white" size=4> Hello, {{UserName}}
      </font></div>
    </nav>
	<!----------------------------------home---------------------------------->

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
 
 <div class="col-md-2" onclick="failed()"><center><img src="imgs/wallet.png" width=100 height=100 id="wallet" onmouseover="changeicon(this.id)" onmouseleave="defaulticon(this.id)"></a><br><font color="black" size=4 id="wallettext">Manage<br>K-Wallet</font></div></center>
 
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
	
	<!---------------------------------------------------------------------------->
</body>
<script>
var app=angular.module('myApp',[]);
app.controller('myCtrl',function($scope, $http)
{ $scope.UserName="User";
/*$scope.login=function()
       {
		   var kid=$("#userid").val();
		   var password=$("#userpassword").val();
		   $.post("checkaccount.php",{kid:UserID, pswd:password},function(data, status){alert(data);});
		   //$http.get("login.php").then(function (response) {$scope.names = response.data.records;});
	        $scope.UserName="User";
		}*/
});
</script>

<script>

var w = window.innerWidth;
if(w<500)
	{document.getElementById("space").innerHTML = "<font align="+"right"+">";
	}
function w3_open() {
	var w = window.innerWidth;
	var h = window.innerHeight;
	if(w>500)
	{//document.getElementById("main").style.marginLeft = "25%";
  document.getElementById("mySidebar").style.width = "30%";
  document.getElementById("mySidebar").style.display = "block";
  //document.getElementById("openNav").style.display = 'none';
	}
	else
		
		{
           document.getElementById("mySidebar").style.width = "90%";
            document.getElementById("mySidebar").style.display = "block";
            //document.getElementById("openNav").style.display = 'none';
		}
}
function w3_close() {
  //document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}
function account()
{alert("You are not signed in or Registered");
}
</script>
</html>