<?php
SESSION_start();
$seatsbooked=$_POST["seats"];
$totalprice=$_POST["price"];
$tickets=$_POST["count"];
$Movie=$_POST["Mov"];
$UserID=$_SESSION["KwalletUserID"];
$_SESSION["MovieTotalPrice"]=$_POST["price"];
$_SESSION["MovieTickets"]=$_POST["Quantity"];
$i=0;
$arrlength = count($seatsbooked);

// connection to server
$servername="localhost";
$username="kanishkGupta";
$password="kanishk1999";
$dbname="kwallet";
$connectnew=new mysqli($servername,$username,$password,$dbname);
$stmt=$connectnew->prepare("insert into moviebooked(UserID,SeatNo,Movie) 
	values(?,?,?)");
	$stmt->bind_param("iis",$UserID,$SeatNo,$Movie);

	while($i<$arrlength)
	{  $SeatNo=$seatsbooked[$i];
	 $stmt->execute();
	 $i++;
	}

?>