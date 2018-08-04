<?php
$servername="localhost";
$username="kanishkGupta";
$password="kanishk1999";
$dbname="hotelgrand";
$conn = new mysqli($servername, $username, $password, $dbname);
$stmt=$conct->prepare("Insert into user_detail(Name,Contact,Email,State,Password) values(?,?,?,?,?)");
$stmt->bind_param("sisss",$uname,$ucontact,$uemail,$udob,$upassword);

