<?php  
SESSION_Start();
$balance=$_SESSION["Kcash"];
$feat=$_GET["feature"];
$rechnum=$_POST["rechnum"];
$operator=$_POST["operator"];
$fees=$_POST["amt"];
//echo $balance ." ". $feat." ".$rechnum." ".$fees." ". $operator;
$servername="localhost";
$username="kanishkGupta";
$password="kanishk1999";
$dbname="kwallet";
$connectnew=new mysqli($servername,$username,$password,$dbname);
$stmt=$connectnew->prepare("insert into transaction(UserID,Contact,Feature,Amount,RechNum,Operator,Discount,Coupon,Qty) 
	values(?,?,?,?,?,?,?,?,?)");
	$stmt->bind_param("iisiisisi",$UserID,$Contact,$Feature,$Amount,$RechNum,$Operator,$Discount,$Coupon,$qty);
	 $UserID=$_SESSION["KwalletUserID"];
	 $Contact=$_SESSION["KPhone"];
	 $Feature=$feat;
	 if($feat=="MovieBooking")
	   {$Amount=$_SESSION["MovieTotalPrice"];  $qty=$_SESSION["MovieTickets"];}
	 else
	    { $Amount=$fees; $qty=0;}
	 $RechNum=$rechnum;
	 $Operator=$operator;
	 $Discount=0;
	 $Coupon="";
	 $stmt->execute();
	 
$sqlupd="Update user_detail set WalletMoney=WalletMoney-$Amount where UserID=$UserID";
$connectnew->query($sqlupd);
?>
<html>
<head><title>Confirmation</title></head>
<!-- Angular files -->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<body>
<div id="pehla" ng-app ng-init="feats='<?php echo $feat;?>'">
<!-----------------Mobile/DTH Recharge---------------->
<div ng-if="feats=='MobileRecharge' || feats=='DTH'">
<font face="Calibri" >
<center><h1 id="pay"><font color=#ff0000>Confirming your Payment</font></h1><img src="imgs/rolling.gif" height=100 width=100><br>
<h2>Please Wait....<br>
<font color=#008000 id="cyp" size=6></font></h2>
<br>Please Do not click refresh or go back on this page.
</center></font></div> 
<!------------------------------------------------>

<!-----------------Bill Payment---------------->
<div ng-if="feats=='Bill'">
<font face="Calibri" >
<center><h1 id="pay2"><font color=#ff0000>Confirming your Bill Payment</font></h1><img src="imgs/rolling.gif" height=100 width=100><br>
<h2>Please Wait....<br>
<font color=#008000 id="cyp2" size=6></font></h2>
<br>Please Do not click refresh or go back on this page.
</center></font></div> 
<!------------------------------------------------>

<!-----------------Movie Booking---------------->
<div ng-if="feats=='MovieBooking'">
<font face="Calibri" >
<center><h1 id="pay2"><font color=#ff0000>Processing your Payment</font></h1><img src="imgs/rolling.gif" height=100 width=100><br>
<h2>Please Wait....<br>
<font color=#008000 id="cyp2" size=6></font></h2>
<br>Please Do not click refresh or go back on this page.
</center></font></div> 
<!------------------------------------------------>

<!-----------------Transfer/pay---------------->
<div ng-if="feats=='TransferCash'">
<font face="Calibri" >
<center><h1 id="pay2"><font color=#ff0000>Processing your Transfer Request</font></h1><img src="imgs/rolling.gif" height=100 width=100><br>
<h2>Please Wait....<br>
<font color=#008000 id="cyp2" size=6></font></h2>
<br>Please Do not click refresh or go back on this page.
</center></font></div> 
<!------------------------------------------------>
</div>


<script>
setTimeout(confirm,5000);
function gotop()
{window.location.href = "login2.php";
}
function confirm()
{
	var featre='<?php echo $feat; ?>';
	
	if(featre=="MobileRecharge" || featre=="DTH")
	{document.getElementById("pay").innerHTML="<font color=#0000FF>Payment Confirmed</font>";
	document.getElementById("cyp").innerHTML="Processing your <?php echo $operator; ?> Recharge";
	setTimeout(finalconfirm,5000);}
	
	if(featre=="Bill")
	{document.getElementById("pay2").innerHTML="<font color=#0000FF>Payment Confirmed</font>";
	document.getElementById("cyp2").innerHTML="Processing your <?php echo $operator; ?> Bill";
	setTimeout(finalconfirm,5000);}
	
	if(featre=="MovieBooking")
	{document.getElementById("pay2").innerHTML="<font color=#0000FF>Payment Confirmed</font>";
	document.getElementById("cyp2").innerHTML="Booking your Seats for <?php echo $operator; ?>";
	setTimeout(finalconfirm,5000);}
	
	if(featre=="TransferCash")
	{document.getElementById("pay2").innerHTML="<font color=#0000FF>Transfer Request Approved</font>";
	document.getElementById("cyp2").innerHTML="Paying to the <?php echo $operator; ?>";
	setTimeout(finalconfirm,4000);}
	
}
function finalconfirm()
{
	var featre='<?php echo $feat; ?>';
	
	if(featre=="MobileRecharge" || featre=="DTH")
	{document.getElementById("pehla").innerHTML="<font face="+"Calibri"+"><center><h1 id="+"pay"+">Recharge Successfully proccessed </h1><img src="+"imgs/tick.gif"+" height=100 width=100><br><h2>Redirecting to the homepage...<br>Please Wait<img src="+"dots.svg"+" height=5 widgth=80></h2></center></font>";}
    
	if(featre=="Bill")
	{document.getElementById("pehla").innerHTML="<font face="+"Calibri"+"><center><h1 id="+"pay"+">Bill Successfully Proccessed and completed</h1><br><img src="+"imgs/tick.gif"+" height=200 width=200><br><br><h2>Redirecting to the homepage...<br>Please Wait.</h2></center></font>";}

if(featre=="MovieBooking")
	{document.getElementById("pehla").innerHTML="<font face="+"Calibri"+"><center><h1 id="+"pay"+">Your Seats and Movie tickets are successfully confirmed</h1><img src="+"imgs/success.png"+" height=200 width=300><br><h1><font color=#0000ff>Enjoy Your Movie</font></h1><br><br><h2>Redirecting to homepage...<br>Please Wait.</h2></center></font>";}

if(featre=="TransferCash")
	{document.getElementById("pehla").innerHTML="<font face="+"Calibri"+"><center><h1 id="+"pay"+">Balance Transfered Successfully</h1><img src="+"imgs/success.png"+" height=200 width=275><br><br><h2>Redirecting to homepage...<br>Please Wait.</h2></center></font>";}

setTimeout(gotop,10000)
}
</script>
</body>
</html>