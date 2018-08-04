<?php SESSION_start(); ?>
<html>
<head><title>K-Wallet</title>
<link rel="icon" href="imgs/logo2.png" type="image/ico">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="qr/qrcode.js"></script>
<script type="text/javascript" src="qr/jquery.min.js"></script>


</head>

<script>

function insfn(contact, fee, cash, feat)
{$.post("insertrecharge.php",{feature:feat, rechnum:contact, amt:fee}, function(data,status){alert(data);});
}
$(document).ready(function(){$("#seatschart").hide();  $("#merchant").hide();
  $("#user").hide(); $("#pbtn").hide();});

 $(document).ready(function(){
 new QRCode(document.getElementById("qrcode"), "<?php echo $_SESSION["KwalletUserID"];?>");}); 
</script>
<body><font face="Calibri">

<?php 
include "newheader2.php";
$feature=$_GET["fot8765yui"];
 ?>


<div ng-app="" ng-init="feat='<?php echo $feature; ?>'"><div id="su">
<div class="container">
 <br><br><br><br>
 <!------------------------------------Mobile Recharge-------------------------------------------------------->
 <div ng-if="feat=='MobileRecharge'">
 <div class="w3-panel w3-round-xxlarge w3-light-blue w3-padding-32"><center><h1><img src="imgs/recharge.png" height=80 width=80> <b> Mobile Recharge</b></h1></center></div><br><br>
 <div class="row">
<div class="col-md-7"> <form method="POST" class="form-control" action="insertrecharge.php?feature=MobileRecharge" onsubmit="return rech('MobileRecharge')">
 <div class="form-group">
    <label for="number">Phone Number</label>
    <input type="number" class="form-control" id="contact" name="rechnum" placeholder="Phone Number"  ng-model="phn" >
  <font color="red" id="mssg"></font>
  </div>
 <div class="form-group">
    <label for="number">Operator</label>
    <select class="form-control" ng-model="operator" name="operator">
  <option value="Airtel">Airtel</option>
  <option value="Jio">Jio</option>
  <option value="Idea">Idea</option>
  <option value="Vodafone">Vodafone</option>
  <option value="Aircel">Aircel</option>
</select>
</div>
<div class="form-group">
    <label for="number">Amount</label>
    <input type="number" class="form-control" name="amt" id="amt" placeholder="Enter Recharge Value"  ng-model="amt">
  </div>
  <font color="red" id="amtmssg"></font>
  <button type="submit" class="btn btn-lg btn-primary">Recharge Now</button>
 </form></div>
  
  
 <div class="col-md-5"><div class="alert alert-info"><center><div ng-if="operator=='Idea'"><img src="imgs/idea.png" height=80 width=150></div><div ng-if="operator=='Aircel'"><img src="imgs/aircel.png" height=80 width=300></div><div ng-if="operator=='Vodafone'"><img src="imgs/vodafone.png" height=80 width=300></div><div ng-if="operator=='Jio'"><img src="imgs/jio.png" height=80 width=80></div><div ng-if="operator=='Airtel'"><img src="imgs/airtel.png" height=80 width=250></div></center><br>
 Mobile Number:<h3>{{"+91-"+phn}} &nbsp;<p id="mssg2"></p></h3><hr><br><h3><center><font color="black">Rs {{amt}}</font></center></h3>
 </div>
 </div>
 </div><!--row-->
 </div>

 
 <!------------------------------------------------end---------------------------------------------------->
 
 <!--&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&-DTH Recharge-&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&----->
 <div ng-if="feat=='DTH'">
  <div class="w3-panel w3-round-xxlarge w3-light-blue w3-padding-32"><center><h1><img src="imgs/dth.png" height=80 width=80> <b> DTH Recharge</b></h1></center></div><br><br>
 <div class="row">
<div class="col-md-7"> <form method="POST" class="form-control" action="insertrecharge.php?feature=DTH" onsubmit="return rech('DTH')">
 <div class="form-group">
    <label for="number">DTH Number</label>
    <input type="number" class="form-control" id="contact" name="rechnum" placeholder="Phone Number"  ng-model="phn" >
  <font color="red" id="mssg"></font>
  </div>
 <div class="form-group">
    <label for="number">Operator</label>
    <select class="form-control" ng-model="operator" name="operator">
  <option value="Tata Sky">Tata Sky</option>
  <option value="Dish Tv">Dish Tv</option>
  <option value="Videocon D2H">Videocon D2H</option>
  <option value="Airtel Digital TV">Airtel Digital TV</option>
</select>
</div>
<div class="form-group">
    <label for="number">Amount</label>
    <input type="number" class="form-control" name="amt" id="amt" placeholder="Enter Recharge Value"  ng-model="amt">
  </div>
  <font color="red" id="amtmssg"></font>
  <button type="submit" class="btn btn-lg btn-primary" >Recharge Now</button>
 </form>
  </div><!--col-md-7---->
  
 <div class="col-md-5" ng-init="amt=''"><div class="alert alert-info"><center>
 <div ng-if="operator=='Tata Sky'"><img src="imgs/TataSky.png" height=80 width=220></div>
 <div ng-if="operator=='Airtel Digital TV'"><img src="imgs/airtel.png" height=80 width=210></div>
 <div ng-if="operator=='Dish Tv'"><img src="imgs/dishtv.png" height=80 width=210></div>
 <div ng-if="operator=='Videocon D2H'"><img src="imgs/VideoconD2H.png" height=80 width=210></div>
 
 </center><br>
 DTH Subscription Number:<h3>{{phn}} &nbsp;<p id="mssg2"></p></h3><hr><br><h3><center><font color="black">Rs {{amt}}</font></center></h3>
 </div>
 </div> <!----col-md-5----->
 
 </div><!--row---->
 </div>
 
 <!------------------------------------------------end---------------------------------------------------->
 
 <!--%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%--Bill Payment %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-------->
 <div ng-if="feat=='Bill'">
 <div class="w3-panel w3-round-xxlarge w3-light-blue w3-padding-32"><center><h1><img src="imgs/bill.png" height=80 width=80> <b>Bill Payment</b></h1></center></div><br><br>
 <div class="row">
<div class="col-md-7"> <form method="POST" class="form-control" action="insertrecharge.php?feature=Bill" onsubmit="return bill()">
 <div class="form-group">
    <label for="number">Bill Number</label>
    <input type="number" class="form-control" id="contact" name="rechnum" placeholder="Bill Number"  ng-model="phn" >
  <font color="red" id="mssg"></font>
  </div>
 <div class="form-group">
    <label for="number">Select Bill:</label>
    <select class="form-control" ng-model="billtype">
  <option value="Water Bill">Water Bill</option>
  <option value="Electricity Bill">Electricity Bill</option>
</select>
</div>
<div ng-if="billtype=='Electricity Bill'">
<div class="form-group">
    <label for="number">Operator</label>
    <select class="form-control" ng-model="operator" name="operator">
  <option value="Reliance">Reliance</option>
  <option value="Tata Power">Tata Power</option>
  <option value="BSES">BSES</option>
  <option value="UPPCL">UPPCL</option>
</select>
</div></div>

<div ng-if="billtype=='Water Bill'">
<div class="form-group">
    <label for="number">Operator</label>
    <select class="form-control" ng-model="operator" name="operator">
  <option value="Delhi Jal Board">Delhi Jal Board</option>
  <option value="Municipal Corporation of Ludhiana">Municipal Corporation of Ludhiana</option>
  <option value="BWSSB">BWSSB</option>
  <option value="MCG">Municipal Corporation of Gurugram (MCG)</option>
</select>
</div></div>



<div class="form-group">
    <label for="number">Bill Amount</label>
    <input type="number" class="form-control" name="amt" id="amt" placeholder="Enter Bill Amount"  ng-model="amt">
	<font color="red" id="amtmssg"></font>
	<font color=#0000ff>*Please Enter the exact bill amount for it to be successful</font>
	
  </div>
  
  <button type="submit" class="btn btn-lg btn-primary" >Pay Bill</button>
 </form></div>
  
  
 <div class="col-md-5" ng-init="amt=''"><div class="alert alert-info">
 </center><br>
 Your Bill Number:<h3>{{phn}} &nbsp;<p id="mssg2"></p></h3><hr><br><h3><center><font color="black">Rs {{amt}}</font></center></h3>
 </div> <!---alert--->
 </div><!---col-md-5---->
 </div>
 </div>
 </div>

 
 <!------------------------------------------------end---------------------------------------------------->
 
 
 <!---^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^-Movie Booking-^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^--->
 <div ng-if="feat=='MovieBooking'">
 <div class="container">
 <?php
 $seats1=array();
 $seats2=array();
 $seats3=array();
 $seats4=array();
 $i=0;
 $j=0;
 $k=0;
 $l=0;
 $servername="localhost";
$username="kanishkGupta";
$password="kanishk1999";
$dbname="kwallet";
$connectnew=new mysqli($servername,$username,$password,$dbname);
$sql="Select * from moviebooked";
$result = $connectnew->query($sql);
while($rs = $result->fetch_assoc())
   {if($rs["Movie"]=="Movie 1")
	   { $seats1[$i]=$rs["SeatNo"];
         //$seats1[$i];
          $i++;
	   }
	 if($rs["Movie"]=="Movie 2")
	   { $seats2[$j]=$rs["SeatNo"];
          $j++;
	   }
	 if($rs["Movie"]=="Movie 3")
	   { $seats3[$k]=$rs["SeatNo"];
          $k++;
	   }
	 if($rs["Movie"]=="Movie 4")
	   { $seats4[$l]=$rs["SeatNo"];
          $l++;
	   }
   }
 $arrlength1=count($seats1);
$arrlength2=count($seats2);
$arrlength3=count($seats3);
$arrlength4=count($seats4); 
 
 
 
 ?>
  <div class="w3-panel w3-round-xxlarge w3-light-blue w3-padding-32"><center><h1><img src="imgs/movie.png" height=80 width=80> <b>Movie Booking</b></h1></center></div><br>
 <div class="row">
<div class="col-md-7"> 
<form method="POST" class="form-control" action="insertrecharge.php?feature=MovieBooking" onsubmit="return saveseat()">
 <div class="form-group">
    <label for="number">Contact Number</label>
    <input type="number" class="form-control" id="contact" name="rechnum" placeholder="Enter Contact Number"  ng-model="phn" >
  <font color="red" id="mssg"></font>
  </div>
 <div class="form-group">
    <label for="number">Movie</label>
    <select class="form-control" ng-model="operator" name="operator" id="operator" onchange="myFunction(this.value)" placeholder="Select Movie to book seats">
  <option value="Movie 1">Movie 1</option>
  <option value="Movie 2">Movie 2</option>
  <option value="Movie 3">Movie 3</option>
  <option value="Movie 4">Movie 4</option>
</select>
<font color=#0000ff id="mssg7"></font>
<p></p>

<div class="form-group">
    <label for="number">Amount Payable</label>
    <input type="number" class="form-control" id="amt" name="amt" ng-model="amt" value=0 readonly>
  <font color="red" id="amtmssg" size=8>{{amt}}</font>
  </div>
</div>
<!---<div class="form-group">
    <label for="number">No. Of Tickets</label>
    <select class="form-control" ng-model="qty" name="qty">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="4">5</option>
  <option value="more">more..</option>
</select>
</div>----><br>
  <input type="submit" class="btn btn-primary btn-lg" value="Book & Pay Now">
  <input type="button" class="btn btn-danger btn-lg" value="Book Now & Pay Later" onclick="alert('COMING SOON....');"><br><br>
  </div><!----col-md-7------------>
  </form>
 <div class="col-md-5" ng-init="amt=''"><div class="alert alert-info">
 <center><h2>{{operator}}</h2></center>
 <font color=#000000 size=5>No. Of Tickets: </font> <font size=5 color=#ff0000> <op id="tc"> 0</op></font><br>
  <font color=#000000 size=5>Selected Seats: </font> <font size=5 color=#ff0000> <op id="demo"> ----</op></font>
 <br>{{amt}}<br>
Phone Number:<h3>{{phn}} &nbsp;<p id="mssg2"></p></h3><hr><br><h3><center><font color="black">₹ <op id="price"></op></font></center></h3>
 </div>
 </div> <!----col-md-5----->
 </div><!----row------>
<br><br><br>
 

             <!------Seats booking------------>
 <!--<div ng-if="operator=='Movie 1' || operator=='Movie 2' || operator=='Movie 3' || operator=='Movie 4'">-->
 <div id="seatschart"><br><hr>
<center><h1>Book Your Seats</h1></center><br><hr>
  
  <div class="row">
  
  <div class="col-md-6">
 <table  class="table table-bordered">
 <tr ng-init="seat1=[1,2,3,4,5,6,7,8,9,10]" >
 <td  ng-repeat="x in seat1" id="{{x}}" onmouseenter="chngecolor(this)" onmouseleave="chngecolorback(this)" ondblclick="unselect(this)" onclick="show(this.id)"><h3>{{x}}</h3></td>
 </tr>
 <tr ng-init="seat2=[11,12,13,14,15,16,17,18,19,20]">
 <td ng-repeat="x in seat2" id='{{x}}' onmouseenter="chngecolor(this)" onmouseleave="chngecolorback(this)" ondblclick="unselect(this)" onclick="show(this.id)"><h3 >{{x}}</h3></td>
 </tr>
 <tr ng-init="seat3=[21,22,23,24,25,26,27,28,29,30]">
 <td ng-repeat="x in seat3"  id='{{x}}' onmouseenter="chngecolor(this)" onmouseleave="chngecolorback(this)" ondblclick="unselect(this)" onclick="show(this.id)"><h3>{{x}}</h3></td>
 </tr>
 </table></div>
 <div class="col-md-6">
 <table class="table table-bordered">
 <tr ng-init="seat4=[31,32,33,34,35,36,37,38,39,40]" >
 <td  ng-repeat="x in seat4" id="{{x}}" onmouseenter="chngecolor(this)" onmouseleave="chngecolorback(this)" ondblclick="unselect(this)" onclick="show(this.id)"><h3>{{x}}</h3></td>
 </tr>
 <tr ng-init="seat5=[41,42,43,44,45,46,47,48,49,50]">
 <td ng-repeat="x in seat5" id="{{x}}" onmouseenter="chngecolor(this)" onmouseleave="chngecolorback(this)" ondblclick="unselect(this)" onclick="show(this.id)"><h3 >{{x}}</h3></td>
 </tr>
 <tr ng-init="seat6=[51,52,53,54,55,56,57,58,59,60]">
 <td ng-repeat="x in seat6" id='{{x}}' onmouseenter="chngecolor(this)" onmouseleave="chngecolorback(this)" ondblclick="unselect(this)" onclick="show(this.id)"><h3 >{{x}}</h3></td>
 </tr>
 </table></div>
 <br>
 <table class="table table-bordered"> <tr ng-init="seat7=[61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80]"><td ng-repeat="x in seat7" id='{{x}}' onmouseenter="chngecolor(this)" onmouseleave="chngecolorback(this)" ondblclick="unselect(this)" onclick="show(this.id)"><h3 >{{x}}</h3></td></tr></table>
 <center><h1>___________________________________________________________</h1>
 Screen this side<br><button class="btn btn-lg btn-success" onclick='location.reload()' > Reset</button></center>
 </div><!----row----->
</div><!---id=seatschart --->
<!--</div><!---ng-if --->
 <br><br>
 <!------end of seat booking------------>
 
 
  
 </div></div>

 <!----------------------------------------------end(Movie booking)------------------------------------------------------------>
 
 
 
 <!--***************************************  Pay/ Transfer Cash  ******************************************--->
 <?php
 $i=0;
 $users=array();
 //$usernames=array();
$sqli="Select * from user_detail";
$result = $connectnew->query($sqli);
while($rs = $result->fetch_assoc()) 
   {$users[$i]=$rs["UserID"];
    $UserNames[$i]=$rs["Name"];
          $i++;
   }
 $length1=count($users);
	?>
 <div ng-if="feat=='TransferCash'">
 <div class="container">
 <div class="w3-panel w3-round-xxlarge w3-light-blue w3-padding-32"><center><h1><img src="imgs/transfer.png" height=80 width=80> <b>Pay / Tranfer Money</b></h1><h6>Now Pay money to your nearby merchant with just few clicks through K-Wallet</h6></b></center></div>
<br><br>

<form method="POST" class="form-control" action="insertrecharge.php?feature=TransferCash" onsubmit="return transfervalidate()">
<div class="form-group">
    <label for="number"><b>Pay To</b></label>
    <select class="form-control" name="operator" onchange="acctype()" id="operator" required>
	<option value="">Select</option>
  <option value="Merchant">Merchant</option>
  <option value="K-Wallet User">K-Wallet User</option>
</select>
</div>

 <div class="form-group" id="user">
    <label for="number"><b>Recipient User ID</b></label>
    <input type="number" class="form-control" id="rechnumR" name="rechnum" placeholder="Enter K-Wallet User ID"  ng-model="phn" required>
  <font color="red" id="error1"></font>
  </div>
  <div class="form-group" id="merchant">
    <label for="number"><b>Merchant ID</b></label>
    <input type="text" class="form-control" id="rechnumM" name="rechnum" placeholder="Enter Merchant ID"  ng-model="phn" required>
  <font color="red" id="error1"></font>
  </div>
  
  <div class="row">
  <div class="col-md-9">
  <div class="form-group">
    <label for="number"><b>Transfer Amount</b></label>
    <input type="number" class="form-control" name="amt" id="amt" placeholder="Enter Balance Amount"  ng-model="amt" required>
	<font color="red" id="amterror"></font>
  </div>
  <div class="form-group">
    <label for="number"><b>Any Message</b></label>
    <input type="text" class="form-control" name="message" id="message" placeholder="Enter Your Message (if any)">
  </div>
  </div>
  <div class="col-md-3"><div class="w3-panel w3-round-xxlarge w3-green w3-padding-32">
    <center><h2><font color="black">K-Wallet Balance</font> <br><b>₹<?php echo $_SESSION["Kcash"]; ?></b></h2></center></div></div>
	</div><!--row--->
 <button type="submit" class="btn btn-lg btn-primary"><op id="tbtn">Transfer Now &nbsp;<img src="imgs/payicon.png" width=30 height=30></op><op id="pbtn">Pay Merchant</op> </button>
 </form>
 
  </div><!--container--->
 </div><!--ng-if-->
 
 <!------------------------------------end (transfer cash)----------------------------------------------------->
 
 <!--***************************************  QR Code ******************************************--->
 <div ng-if="feat=='QR'">
 <div class="container">
<center>
 <div class="card" style="width: 22rem;" >
  <div id="QRcard"><div class="card-header">
    <h2><?php echo $_SESSION["KName"]; ?></h2>
  </div>
   <br><div id="qrcode"></div></div>
  <div class="card-body" >
    <h5 class="card-title"></h5>
    <p class="card-text">This is your K-Wallet User ID QR code. Share it for easy transactions and cash payments.</p>
    <button onclick="printDiv('QRcard')" class="btn btn-primary">Print QR Code</button>
  </div>
</div><!-- card closes-->
</center>
 
 </div><!--container-->
 
 </div><!--ng-if-->
 
  <!------------------------------------end (QR code)----------------------------------------------------->
  

 
 
 </div></div></div>
 
 <br><br><br>
 <footer>
      <div class="w3-panel w3-black"><center><br>Contact Us at : support@kwallet.tk<br>Helpline 24/7: +91-8178218180<br>Created by Kanishk<br><br>© 2017-2018 K-Wallet<br><br></center></div>
    </footer>
<script ng-app="Kani" ng-controller="inst">
//functions for mobile recharge

var txt = new Array();    // for no. of seats
var ticketcount=0, flag=1,grandtotal;
function rech(funct)
{var cash=<?php echo $_SESSION["Kcash"]; ?>; 
//alert(cash);
var x=document.getElementById("contact");
var y=document.getElementById("amt");
var flag=1;
if(funct=="MobileRecharge")
 {if(x.value >999999999 && x.value<10000000000)
   {document.getElementById("mssg").innerHTML=" ";}
  else
  {document.getElementById("mssg").innerHTML="Phone Number Invalid!";
   document.getElementById("mssg2").innerHTML="<img src="+"imgs/cross.png"+" height=20 width=20>"; 
   flag++;
   }
 } 
 if(y.value<5 || y.value>2000)
  {document.getElementById("amtmssg").innerHTML="Recharge value not valid"; 
    flag++;}
	else
	  {document.getElementById("amtmssg").innerHTML="";}
  //alert(cash);
var io=y.value; 
if(io>cash)
   { 
      alert("INSUFFICIENT BALANCE. \nPlease Add Money to your K-Wallet Balance");
 		flag++;
}

		

	if(flag==1)
  {
	   if(confirm("Confirm to pay from wallet balance"))
	     return true;
	   else 
		   return false;
	   //insertdata();
	  //insfn(x,y,cash,"Mobile Recharge");

  }
  else
	  return false;
   

}

// function for bill payments
function bill()
{var cash=<?php echo $_SESSION["Kcash"]; ?>; 
//alert(cash);
var x=document.getElementById("contact");
var y=document.getElementById("amt");
var flag=1;
if(x.value=="")
  {flag++; document.getElementById("mssg").innerHTML="<font color=#ff0000>Enter Bill Number</font>";}
else
  {document.getElementById("mssg").innerHTML="";}

if(y.value=="" || y.value<1)
  {flag++; document.getElementById("amtmssg").innerHTML="<font color=#ff0000>Bill Amount not valid</font>";}
else
  {document.getElementById("amtmssg").innerHTML="";}

var io=y.value; 
if(io>cash && io!="")
   { 
      alert("Insufficient Balance. Please Add Money to your Wallet");
 		flag++;
}

if(flag==1)
  {        
    if(confirm("Pay bill from your K-Wallet Balance?"))
     return true;
    else
	 return false;
  }
 else
	 return false;
}



// functions for movie features



function chngecolor(x)
{x.style.color="blue";
}
function chngecolorback(x)
{x.style.color="black";
}
function show(x)
{
	document.getElementById("mssg7").innerHTML="";
	document.getElementById(x).style.background="yellow";
	 $("#"+x).attr("onclick",'alert("Seat Selected");');

var tp=0;
var movie=$("#operator").val();
txt.push(x);
ticketcount++;
document.getElementById("demo").innerHTML=txt;
document.getElementById("tc").innerHTML=ticketcount;

if(movie=="Movie 1")
	tp=150;
if(movie=="Movie 2")
	tp=350;
if(movie=="Movie 3")
	tp=550;
if(movie=="Movie 4")
	tp=950;
document.getElementById("price").innerHTML=(ticketcount*tp);
grandtotal=(ticketcount*tp);

$("#amt").attr("value",grandtotal);
$("#amt").attr("placeholder",grandtotal);
}

// function to store seat booked
function saveseat()
{var cash=<?php echo $_SESSION["Kcash"]; ?>;
var arrlength=txt.length;
var x=document.getElementById("contact");
var y=document.getElementById("operator");
var bin=0;
var movie=$("#operator").val();
if(arrlength==0)
   {alert("Please book your Seats");  bin++;}

if(x.value >999999999 && x.value<10000000000)
   {document.getElementById("mssg").innerHTML=" "; }
else
  {document.getElementById("mssg").innerHTML="Phone Number Invalid!"; bin++; 
   }
if(grandtotal>cash)
   { 
      alert("INSUFFICIENT BALANCE. \nPlease Add Money to your K-Wallet Balance");
 		bin++;
    }   
   
 if(bin==0)
    { if(confirm("Pay Now and Book your seats?"))
		{ $.post("movie.php",{seats:txt, price:grandtotal,Quantity:ticketcount, count:ticketcount, Mov:movie},function(data,status){});  return true;}
	  else 
		  return false;
	}
else
	return false
}

function unselect(x) {
    x.style.background="white";
}



function myFunction(val) 
{
var arrlngth1=<?php echo $arrlength1; ?>;
var arrlngth2=<?php echo $arrlength2; ?>;
var arrlngth3=<?php echo $arrlength3; ?>;
var arrlngth4=<?php echo $arrlength4; ?>;
document.getElementById("mssg7").innerHTML="Select Your Seats below";
  $("#seatschart").show();

if(flag==1)
	  { flag++;
         //document.getElementById("demo").innerHTML="kokokokoko";
        var seat1=[<?php $h=0; while($h<$arrlength1) { echo $seats1[$h].','; $h++;}?>];
		var seat2=[<?php $h=0; while($h<$arrlength2) { echo $seats2[$h].','; $h++;}?>];
		var seat3=[<?php $h=0; while($h<$arrlength3) { echo $seats3[$h].','; $h++;}?>];
		var seat4=[<?php $h=0; while($h<$arrlength4) { echo $seats4[$h].','; $h++;}?>];
        if(val=="Movie 1")
		  { var i=0; 
            while(i<arrlngth1)
			{   
				var temp=seat1[i];
				//alert(temp);
				document.getElementById(temp).style.background="lightgrey";
				$("#"+temp).attr('onclick','alert("seat already booked");');
				$("#"+temp).attr('onmouseenter','');
				$("#"+temp).attr('onmouseleave','');
				i++;
				//disable();
			}
		 } 
		 
		 if(val=="Movie 2")
		  { var i=0; 
            while(i<arrlngth2)
			{   
				var temp=seat2[i];
				//alert(temp);
				document.getElementById(temp).style.background="lightgrey";
				$("#"+temp).attr('onclick','alert("seat already booked");');
				$("#"+temp).attr('onmouseenter','');
				$("#"+temp).attr('onmouseleave','');
				i++;
				//disable();
			}
		 }

        if(val=="Movie 3")
		  { var i=0; 
            while(i<arrlngth3)
			{   
				var temp=seat3[i];
				//alert(temp);
				document.getElementById(temp).style.background="lightgrey";
				$("#"+temp).attr('onclick','alert("seat already booked");');
				$("#"+temp).attr('onmouseenter','');
				$("#"+temp).attr('onmouseleave','');
				i++;
				//disable();
			}
		 } 	

        if(val=="Movie 4")
		  { var i=0; 
            while(i<arrlngth4)
			{   
				var temp=seat4[i];
				//alert(temp);
				document.getElementById(temp).style.background="lightgrey";
				$("#"+temp).attr('onclick','alert("seat already booked");');
				$("#"+temp).attr('onmouseenter','');
				$("#"+temp).attr('onmouseleave','');
				i++;
				//disable();
			}
		 }		 
	  }
	else
	{flag=1; location.reload(); }
}
  
</script>
<script>
function acctype()
{
 var type2=$("#operator").val();
 if(type2=="Merchant")
    {$("#merchant").show(); $("#pbtn").show();
      $("#user").hide(); $("#tbtn").hide();
	}
if(type2=="K-Wallet User")
    { $("#user").show(); $("#tbtn").show(); $("#merchant").hide(); $("#pbtn").hide();
	}
}

function transfervalidate()
{
	var userids=[<?php $h=0; while($h<$length1) { echo $users[$h].','; $h++;}?>];
	var Names=[<?php $d=0; while($d<$length1){echo '"'.$UserNames[$d].'",'; $d++;} ?>];
	var aelength1=<?php echo $length1; ?>;
	var x=$("#amt").val();
	var ter=0;
	var recpname="";
	flag=0;
	var recpid=$("#rechnumR").val();
	var mercid=$("#rechnumM").val();
	if(recpid!="")
	  {
		  var i=0;
		  while(i<aelength1)
		  {
			  if(userids[i]==recpid)
			  {ter++; 
		       recpname=Names[i]; 
		     }
		     i++;
		  }
	  }
	  if(ter==0)
	     {document.getElementById("error1").innerHTML="User ID does not exist"; flag++;}
	  else
		  document.getElementById("error1").innerHTML="";
	  
	  if(x<10000)
           {document.getElementById("amterror").innerHTML=""; }
       else
         {document.getElementById("amterror").innerHTML="Transfer Amount limit exceeded"; flag++; }
	 
if(flag==0)
   {
	   document.getElementById("amterror").innerHTML="";
	   if(confirm("Confirm Transfer Rs "+x+" to "+recpname+" ("+recpid+")"))
	   {$.post("transfer.php",{RECPID:recpid,balance:x, operator:"K-Wallet User"},function(data, status){alert(data);}); return true;}
	else 
		return false;
   }
else
	return false;
	  
}

// QR Code Functions
function printDiv(divName) {

 var printContents = document.getElementById(divName).innerHTML;
 w=window.open();
 w.document.write(printContents);
 w.print();
 w.close();
}
</script>

 </font>
 </body>
 </html>