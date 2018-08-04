<html>
<head><link rel="icon" href="imgs/logo2.png" type="image/ico"></head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Angular files -->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<style>

</style>
<script>
$("document").ready(function(){
    $("window").resize(function(){
        w3_open2();
    });
});
</script>
<body ng-app="myApp" ng-controller="myCtrl">

<!------------------------NAVBAR---------------------------------------->
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">

       <button id="openNav" class="w3-button w3-large" onclick="w3_open()"><font color="white">&#9776;</font></button>
	   
	   <a class="navbar-brand" href="login2.php"><img src="logo2.png" height=50 width=50></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="login2.php">Home <span class="sr-only">(current)</span></a>
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
        <p ><font color="white" size=4>Wallet Balance:<b> &nbsp;Rs{{cash}}&emsp;&emsp;&emsp;&emsp;&emsp;</b><img src="imgs/user.png" height=40 width=40> &nbsp; {{UserName}}
      </font></div>
	  
    </nav>
	<div class="w3-sidebar w3-bar-block w3-card w3-animate-left w3-border" style="display:none" id="mySidebar" onmouseleave="w3_close()"><br><br><br>
  <button class="w3-bar-item w3-button w3-large" onclick="w3_close()"><font color=#FF0000><b>Close <img src</b></font></button>
  <a class="w3-bar-item w3-button w3-border w3-hover-grey w3-blue" onclick="account()"><center><img src="imgs/user.png" height=60 width=60> <h3>{{UserName}}</h3><h5>{{userid}}<br>Rs {{cash}}</h5></center></a>
 
  <div ng-if="UserName!='User'"><a href="#" class="w3-bar-item w3-button w3-border w3-hover-grey"><h6>My Account</h6></a></div>
  <a href="#" class="w3-bar-item w3-button w3-border"><h6>Refer to friends</h6></a>
  <a href="#" class="w3-bar-item w3-button w3-border"><h6>My Wallet</h5></a>
  <a href="#" class="w3-bar-item w3-button w3-border"><h6>K-Store</h6></a>
  <a href="#" class="w3-bar-item w3-button w3-border"><h6>My Orders</h6></a>
  <a href="#" class="w3-bar-item w3-button w3-border"><h6>Redeem Voucher</h6></a>
  <a href="home.php" class="w3-bar-item w3-button w3-border"><center><h5><font color="grey">--- LOG OUT ---</font></h5></center></a>
</div>
</body>
<script>
var app=angular.module('myApp',[]);
app.controller('myCtrl',function($scope){ $scope.UserName='<?php echo $_SESSION["KName"]; ?>';
$scope.cash='<?php echo $_SESSION["Kcash"]; ?>';
$scope.contact='<?php echo $_SESSION["KPhone"]; ?>';
$scope.email='<?php echo $_SESSION["KEmail"]; ?>';
$scope.Password='<?php echo $_SESSION["KPswd"]; ?>';
$scope.userid='<?php echo $_SESSION["KwalletUserID"]; ?>';
$scope.login=function()
       {
	   alert("jijijijiji");}
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