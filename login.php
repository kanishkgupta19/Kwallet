<html>
<head><title>K-Wallet</title>
<link rel="icon" href="imgs/logo2.png" type="image/ico">

</head>

<?php
SESSION_Start();
$servername="localhost";
$username="kanishkGupta";
$password="kanishk1999";
$dbname="kwallet";
$kid=$_POST["userid"];
$pswd=$_POST["userpassword"];
$flag=0;


$connect3=new mysqli($servername,$username,$password,$dbname);
$sql="Select * from user_detail";
$result = $connect3->query($sql);

//$outp = "";
while($rs = $result->fetch_assoc()) {
   // if ($outp != "") {$outp =$outp. ",";}
if($kid==$rs["UserID"] && $pswd==$rs["Password"])
   {  
      $flag=1;
	  $_SESSION["KwalletUserID"]=$rs["UserID"];
	  $_SESSION["Kcash"]=$rs["WalletMoney"];
	  $_SESSION["KName"]= $rs["Name"];
	  $_SESSION["KEmail"]=$rs["Email"];
	  $_SESSION["KPhone"]=$rs["Contact"];
	  $_SESSION["KDOB"]=$rs["DOB"];
	  $_SESSION["KPswd"]=$rs["Password"];
	  include"home2.php";
	}
}
//$outp ='{"records":['.$outp.']}';
$connect3->close();

//echo($outp);
if($flag==0)
 echo"<script>alert("."Invalid UserID/Password".");</script>";



?>
</html>