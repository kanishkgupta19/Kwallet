<?php
SESSION_Start();
$Recipient=$_POST["RECPID"];
$cash=$_POST["balance"];
$op=$_POST["operator"];

$servername="localhost";
$username="kanishkGupta";
$password="kanishk1999";
$dbname="kwallet";
$connectnew=new mysqli($servername,$username,$password,$dbname);
$stmt=$connectnew->prepare("insert into transaction(UserID,Contact,Feature,Amount,RechNum,Operator,Discount,Coupon,Qty) 
	values(?,?,?,?,?,?,?,?,?)");
	$stmt->bind_param("iisiisisi",$UserID,$Contact,$Feature,$Amount,$RechNum,$Operator,$Discount,$Coupon,$qty);
	 $UserID=$Recipient;
	 $Contact=$_SESSION["KPhone"];
	 $Feature="CashRecieved";
	 $Amount=$cash; 
	 $qty=1;
	 $RechNum=$_SESSION["KwalletUserID"];
	 $Operator=$op;
	 $Discount=0;
	 $Coupon="";
	 $stmt->execute();
	 
$sqlupd="Update user_detail set WalletMoney=WalletMoney+$cash where UserID=$Recipient";
$connectnew->query($sqlupd);