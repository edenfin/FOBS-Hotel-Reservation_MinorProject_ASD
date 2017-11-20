<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="images/hotel_rooms/logo.jpg">
<title> FOBS | Home </title> 
    
<link rel="stylesheet" type="text/css" href="css.css">
</head>     

<?php
$servername = "localhost";
$username = "root";
$password = "";
// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "use hotel_res";
if ($conn->query($sql) === TRUE) {
} 

$sql = "drop table cico";
if ($conn->query($sql) === TRUE) {
} 
 
$sql = "drop table rooms";
if ($conn->query($sql) === TRUE) {
} 

$sql = "drop table stays";
if ($conn->query($sql) === TRUE) {
} 
    
$sql = "drop table price";
if ($conn->query($sql) === TRUE) {
}    
    
$sql = "drop table max_res";
if ($conn->query($sql) === TRUE) {
}    
?>    
    
<body>

<!MARGINS--------------------------------------------------------------------------------->
<div id="left_margin">
<br><br><br><br><br><br><br><br><br><br><br>
<table border="0" width="50px">
<tr>
<td><div class="">
<a href="http://www.google.com" target="_blank">
<img src="images/social media/google.jpg" style width="50px" height="50px"></a>
</div></td></tr>

<tr>
<td><div class="">
<a href="http://www.facebook.com" target="_blank">
<img src="images/social media/facebook.png" style width="50px" height="50px"></a>
</div></td></tr>

<tr>
<td><div class="">
<a href="http://www.twitter.com" target="_blank">
<img src="images/social media/Twitter.png" style width="50px" height="50px"></a>
</div></td></tr>

<tr>    
<td><div class="">
<a href="http://www.instagram.com" target="_blank">
<img src="images/social media/instagram.jpg" style width="50px" height="50px"></a>
</div></td></tr>

<tr>    
<td><div class="" target="_blank">
<a href="http://www.youtube.com" target="_blank">
<img src="images/social media/youtube.png" style width="50px" height="50px"></a>
</div></td></tr>
</table>
</div>

<div id="right_margin">

</div>

<!TOP LINKS--------------------------------------------------------------------------------->
<div id="top_links">
<table border="0" width="500px">
<tr>
<td><center><h1>
<a href="http://localhost/Hotel%20Reservation/Home.php"> 
 HOME</a> </h1> 
</center></td>    
    
<td><h1>
    <a href="http://localhost/Hotel%20Reservation/Login.php">Customer Reservation Info</a></h1>
</td>    
    
</tr>
</table>
</div>

<!HEADER--------------------------------------------------------------------------------->
<div id="header">
<table border="0" width="900px">
<tr>
<td><h2> FOBS - Hotel Reservation </h2></td>

<td>
<img src="images/hotel_rooms/logo.jpg" style width="200px" height="90px">
</td>

</tr>
</table>
</div>

<!PLACES LINKS--------------------------------------------------------------------------------->
<div id="link_places">
    <center />
    <h10>ALERT!</h10>
</div>
<!MARQUEE LINKS--------------------------------------------------------------------------------->

<div id="marquee_links">
<table border="0" width="950px" height="65px">
<tr>
<td width="160px"><h4>Recommended Rooms</h4></td>

<td>
<marquee behavior="scroll" direction="left" scrollamount="5" 
onmouseover="this.stop ();" onmouseout="this.start ();">

<h5>Room 1</h5>
<a href="">
<img class="thumbnail" src="images/hotel_rooms/1.jpg" style width="50px" height="50px"></a>

<h5>Room 2</h5>
<img class="thumbnail" src="images/hotel_rooms/2.jpg" style width="50px" height="50px">

<h5>Room 3</h5>
<img class="thumbnail" src="images/hotel_rooms/3.jpg" style width="50px" height="50px">

<h5>Room 4</h5>
<img class="thumbnail" src="images/hotel_rooms/4.jpg" style width="50px" height="50px">

<h5>Room 5</h5>
<img class="thumbnail" src="images/hotel_rooms/5.jpg" style width="50px" height="50px">

</marquee></td>
</tr>
</table>
</div>

<!BODY---------------------------------------------------------------------------------------------->

<div id="body_center">  
<br><br>  

<?php
if (isset($_POST['Submit1'])) {
    $ci_m = $_POST['ci_m'];
    $ci_d = $_POST['ci_d'];
    $ci_y = $_POST['ci_y'];
    $co_m = $_POST['co_m'];
    $co_d = $_POST['co_d'];
    $co_y = $_POST['co_y'];
    
$stays = null;
$t_m_r = $co_m - $ci_m;
     
if ($ci_m == "" || $ci_d == "" || $ci_y == ""  || $co_m == "" || $co_d == "" || $co_y == "") {
echo "<h8>Some fields<br> are missing!!!</h8><br><br>";
        $link = "CICO.php";
        print "<a href='".$link."'><h6>Click me<br> to  go back in<br> choosing dates</h6></a>";
}   
 
else if($t_m_r > 2 && $ci_y==$co_y){
        echo "<h8>Reservation greater than 2 months is not allowed!</h8><br><br>";
        $link = "CICO.php"; 
        print "<a href='".$link."'><h6>Click m  e<br> to  go back in<br> choosing dates</h6></a>";
    }
 
else if($ci_m==$co_m && $ci_d>$co_d && $ci_y==$co_y){
        echo "<h8>You inputted a<br> wrong check-in/<br>check-out date!</h8><br><br>";
        $link = "CICO.php"; 
        print "<a href='".$link."'><h6>Click m  e<br> to  go back in<br> choosing dates</h6></a>";
    }
else if(($ci_m<date("m") && $ci_y==date("y")) || ($co_m<date("m") && $co_y==date("y"))) {
        echo "<h8>You inputted a past date!</h8><br><br>";
        $link = "CICO.php";
        print "<a href='".$link."'><h6>Click me<br> to  go back in<br> choosing dates</h6></a>";
    }
else if(($ci_m==date("m") && $ci_d<date("d")) || ($co_m==date("m") && $co_d<date("d"))){
    echo "<h8>You inputted a past date!</h8><br><br>";
        $link = "CICO.php";
        print "<a href='".$link."'><h6>Click me<br> to  go back in<br> choosing dates</h6></a>";
}
    else if($ci_m==$co_m && $ci_d==$co_d && $ci_y==$co_y){
        echo "<h8>You have inputted the same dates!</h8><br><br>";
        $link = "CICO.php";
        print "<a href='".$link."'><h6>Click me<br> to  go back in<br> choosing dates</h6></a>";
    }
    else if(($ci_m==2 && $ci_d>28) || ($ci_m==4 && $ci_d>30) || ($ci_m==6 && $ci_d>30) || ($ci_m==9 && $ci_d>30) || ($ci_m==11 && $ci_d>30)){ 
        echo "<h8>You have inputted an invalid date!</h8><br><br>";
        $link = "CICO.php";
        print "<a href='".$link."'><h6>Click me<br> to  go back in<br> choosing dates</h6></a>";
    }
    
    else if(($ci_m<$co_m && $ci_d>$co_d && $ci_y==$co_y) || ($ci_m<$co_m && $ci_d<$co_d && $ci_y==$co_y) || ($ci_m<$co_m && $ci_d==$co_d && $ci_y==$co_y) || ($ci_m>$co_m && $ci_d>$co_d && $ci_y<$co_y) || ($ci_m>$co_m && $ci_d<$co_d && $ci_y<$co_y) || ($ci_m>$co_m && $ci_d==$co_d && $ci_y<$co_y)){   
    
		if($ci_m == 1 || $ci_m == 01){
		$ci_jan = 31 - $ci_d;
        if($co_m == 02 || $co_m == 2){
			$stays = $ci_jan + $co_d;
            goto here;
		}
		if($co_m == 03 || $co_m == 3){
			$stays = $ci_jan + 28 + $co_d;
            goto here;
		}
		if($co_m == 04 || $co_m == 4){
			$stays = $ci_jan + 28 + 31 + $co_d;
            goto here;
		}
		if($co_m == 05 || $co_m == 5){
			$stays = $ci_jan + 28 + 31 + 30 + $co_d;
            goto here;
		}
		if($co_m == 06 || $co_m == 6){
			$stays = $ci_jan + 28 + 31 + 30 + 31 + $co_d;
            goto here;
		}
		if($co_m == 07 || $co_m == 7){
			$stays = $ci_jan + 28 + 31 + 30 + 31 + 30 +  $co_d;
            goto here;
		}
		if($co_m == 08 || $co_m == 8){
			$stays = $ci_jan + 28 + 31 + 30 + 31 + 30 + 31 + $co_d;
            goto here;
		}
		if($co_m == 09 || $co_m == 9){
			$stays = $ci_jan + 28 + 31 + 30 + 31 + 30 + 31 + 31 + $co_d;
            goto here;
		}
		if($co_m == 10){
			$stays = $ci_jan + 28 + 31 + 30 + 31 + 30 + 31 + 31 + 30 + $co_d;
            goto here;
		}
		if($co_m == 11){
			$stays = $ci_jan + 28 + 31 + 30 + 31 + 30 + 31 + 31 + 30 + 31 + $co_d;
            goto here;
		}
		if($co_m == 12){
			$stays = $ci_jan + 28 + 31 + 30 + 31 + 30 + 31 + 31 + 30 + 31 + 30 + $co_d;
            goto here;
		}
		}
		else if($ci_m == 2 || $ci_m == 02){
			$ci_feb = 28 - $ci_d;
		if($co_m == 03 || $co_m == 3){
			$stays = $ci_feb + $co_d;
            goto here;
		}
		if($co_m == 04 || $co_m == 4){
			$stays = $ci_feb + 31 + $co_d;
            goto here;
		}
		if($co_m == 05 || $co_m == 5){
			$stays = $ci_feb + 31 + 30 + $co_d;
            goto here;
		}
		if($co_m == 06 || $co_m == 6){
			$stays = $ci_feb + 31 + 30 + 31 + $co_d;
            goto here;
		}
		if($co_m == 07 || $co_m == 7){
			$stays = $ci_feb + 31 + 30 + 31 + 30 +  $co_d;
            goto here;
		}
		if($co_m == 08 || $co_m == 8){
			$stays = $ci_feb + 31 + 30 + 31 + 30 + 31 + $co_d;
            goto here;
		}
		if($co_m == 09 || $co_m == 9){
			$stays = $ci_feb + 31 + 30 + 31 + 30 + 31 + 31 + $co_d;
            goto here;
		}
		if($co_m == 10){
			$stays = $ci_feb + 31 + 30 + 31 + 30 + 31 + 31 + 30 + $co_d;
            goto here;
		}
		if($co_m == 11){
			$stays = $ci_feb + 31 + 30 + 31 + 30 + 31 + 31 + 30 + 31 + $co_d;
            goto here;
		}
		if($co_m == 12){
			$stays = $ci_feb + 31 + 30 + 31 + 30 + 31 + 31 + 30 + 31 + 30 + $co_d;
            goto here;
		}
		}
		else if($ci_m == 3 || $ci_m == 03){
			$ci_mar = 31 - $ci_d;
		if($co_m == 04 || $co_m == 4){
			$stays = $ci_mar + $co_d;
            goto here;
		}
		if($co_m == 05 || $co_m == 5){
			$stays = $ci_mar + 30 + $co_d;
            goto here;
		}
		if($co_m == 06 || $co_m == 6){
			$stays = $ci_mar + 30 + 31 + $co_d;
            goto here;
		}
		if($co_m == 07 || $co_m == 7){
			$stays = $ci_mar + 30 + 31 + 30 +  $co_d;
            goto here;
		}
		if($co_m == 08 || $co_m == 8){
			$stays = $ci_mar + 30 + 31 + 30 + 31 + $co_d;
            goto here;
		}
		if($co_m == 09 || $co_m == 9){
			$stays = $ci_mar + 30 + 31 + 30 + 31 + 31 + $co_d;
            goto here;
		}
		if($co_m == 10){
			$stays = $ci_mar + 30 + 31 + 30 + 31 + 31 + 30 + $co_d;
            goto here;
		}
		if($co_m == 11){
			$stays = $ci_mar + 30 + 31 + 30 + 31 + 31 + 30 + 31 + $co_d;
            goto here;
		}
		if($co_m == 12){
			$stays = $ci_mar + 30 + 31 + 30 + 31 + 31 + 30 + 31 + 30 + $co_d;
            goto here;
		}
		}
		
		else if($ci_m == 4 || $ci_m == 04){
			$ci_apr = 30 - $ci_d;
		if($co_m == 05 || $co_m == 5){
			$stays = $ci_apr + $co_d;
            goto here;
		}
		if($co_m == 06 || $co_m == 6){
			$stays = $ci_apr + 31 + $co_d;
            goto here;
		}
		if($co_m == 07 || $co_m == 7){
			$stays = $ci_apr + 31 + 30 +  $co_d;
            goto here;
		}
		if($co_m == 08 || $co_m == 8){
			$stays = $ci_apr + 31 + 30 + 31 + $co_d;
            goto here;
		}
		if($co_m == 09 || $co_m == 9){
			$stays = $ci_apr + 31 + 30 + 31 + 31 + $co_d;
            goto here;
		}
		if($co_m == 10){
			$stays = $ci_apr + 31 + 30 + 31 + 31 + 30 + $co_d;
            goto here;
		}
		if($co_m == 11){
			$stays = $ci_apr + 31 + 30 + 31 + 31 + 30 + 31 + $co_d;
            goto here;
		}
		if($co_m == 12){
			$stays = $ci_apr + 31 + 30 + 31 + 31 + 30 + 31 + 30 + $co_d;
            goto here;
		}
		}
		
		else if($ci_m == 5 || $ci_m == 05){
			$ci_may = 31 - $ci_d;
		if($co_m == 06 || $co_m == 6){
			$stays = $ci_may + $co_d;
            goto here;
		}
		if($co_m == 07 || $co_m == 7){
			$stays = $ci_may + 30 +  $co_d;
            goto here;
		}
		if($co_m == 08 || $co_m == 8){
			$stays = $ci_may + 30 + 31 + $co_d;
            goto here;
		}
		if($co_m == 09 || $co_m == 9){
			$stays = $ci_may + 30 + 31 + 31 + $co_d;
            goto here;
		}
		if($co_m == 10){
			$stays = $ci_may + 30 + 31 + 31 + 30 + $co_d;
            goto here;
		}
		if($co_m == 11){
			$stays = $ci_may + 30 + 31 + 31 + 30 + 31 + $co_d;
            goto here;
		}
		if($co_m == 12){
			$stays = $ci_may + 30 + 31 + 31 + 30 + 31 + 30 + $co_d;
            goto here;
		}
		}
		
		else if($ci_m == 6 || $ci_m == 06){
			$ci_jun = 30 - $ci_d;
		if($co_m == 07 || $co_m == 7){
			$stays = $ci_jun +  $co_d;
            goto here;
		}
		if($co_m == 08 || $co_m == 8){
			$stays = $ci_jun + 31 + $co_d;
            goto here;
		}
		if($co_m == 09 || $co_m == 9){
			$stays = $ci_jun + 31 + 31 + $co_d;
            goto here;
		}
		if($co_m == 10){
			$stays = $ci_jun + 31 + 31 + 30 + $co_d;
            goto here;
		}
		if($co_m == 11){
			$stays = $ci_jun + 31 + 31 + 30 + 31 + $co_d;
            goto here;
		}
		if($co_m == 12){
			$stays = $ci_jun + 31 + 31 + 30 + 31 + 30 + $co_d;
            goto here;
		}
		}
		
		else if($ci_m == 7 || $ci_m == 07){
			$ci_jul = 31 - $ci_d;
		if($co_m == 08 || $co_m == 8){
			$stays = $ci_jul + $co_d;
            goto here;
		}
		if($co_m == 09 || $co_m == 9){
			$stays = $ci_jul + 31 + $co_d;
            goto here;
		}
		if($co_m == 10){
			$stays = $ci_jul + 31 + 30 + $co_d;
            goto here;
		}
		if($co_m == 11){
			$stays = $ci_jul + 31 + 30 + 31 + $co_d;
            goto here;
		}
		if($co_m == 12){
			$stays = $ci_jul + 31 + 30 + 31 + 30 + $co_d;
            goto here;
		}
		}
		
		else if($ci_m == 8 || $ci_m == 08){
			$ci_aug = 31 - $ci_d;
		if($co_m == 09 || $co_m == 9){
			$stays = $ci_aug + $co_d;
            goto here;
		}
		if($co_m == 10){
			$stays = $ci_aug + 30 + $co_d;
            goto here;
		}
		if($co_m == 11){
			$stays = $ci_aug + 30 + 31 + $co_d;
            goto here;
		}
		if($co_m == 12){
			$stays = $ci_aug + 30 + 31 + 30 + $co_d;
            goto here;
		}
		}
		
		else if($ci_m == 9 || $ci_m == 09){
			$ci_sep = 30 - $ci_d;
		if($co_m == 10){
			$stays = $ci_sep + $co_d;
            goto here;
		}
		if($co_m == 11){
			$stays = $ci_sep + 31 + $co_d;
            goto here;
		}
		if($co_m == 12){
			$stays = $ci_sep + 31 + 30 + $co_d;
            goto here;
		}
	}
	
	else if($ci_m == 10 || $ci_m == 10){
			$ci_oct = 31 - $ci_d;
		if($co_m == 11){
			$stays = $ci_oct + $co_d;
            goto here;
		}
		if($co_m == 12){
			$stays = $ci_oct + 30 + $co_d;
            goto here;
		}
	}
	
	else if($ci_m == 11 || $ci_m == 11){
			$ci_nov = 30 - $ci_d;
		if($co_m == 12){
			$stays = $ci_nov + 30 + $co_d;
            goto here;
		}
	}
	
	else if($ci_m == 12){
			$ci_dec = 31 - $ci_d;
		if($co_m == 01 || $co_m == 1){
			$stays = $ci_dec + $co_d;
            goto here;
		}
        if($co_m == 02 || $co_m == 2){
			$stays = $ci_dec + 28 + $co_d;
            goto here; 
		}
		if($co_m == 03 || $co_m == 3){
			$stays = $ci_dec + 28 + 31 + $co_d;
            goto here;
		}
	}	
    }

    
else if($ci_m != "" && $ci_d != "" && $ci_y != "" && $co_m != "" && $co_d != "" && $co_y != ""){
here:
$servername = "localhost";
$username = "root";
$password = "";
    
// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "use hotel_res";
if ($conn->query($sql) === TRUE) {
} else {
    echo "Error creating database: " . $conn->error;
}
    
$sql = "create table cico (check_in varchar(100), check_out varchar(100))";
if ($conn->query($sql) === TRUE) {
}
    else {
    echo "Error creating database: " . $conn->error;
}
    $ci = $ci_m.'/'.$ci_d.'/'.$ci_y;
    $co = $co_m.'/'.$co_d.'/'.$co_y;    
    
// insert values
$sql = "insert into cico values
        ('$ci', '$co')";
if ($conn->query($sql) === TRUE) {
} else {
    echo "Error creating database: " . $conn->error;
}
    
$sql = "create table stays (stay int(100))";
if ($conn->query($sql) === TRUE) {
}
    else {
    echo "Error creating database: " . $conn->error;
} 
    
if($stays == null){
    $stays = $co_d - $ci_d;
$sql = "insert into stays values
            ('$stays')";
if ($conn->query($sql) === TRUE) {
    $link = "Rooms.php";
print "<a href='".$link."'><h6>Click me to<br> proceed in<br> choosing rooms</h6></a>";
}
}else{
$sql = "insert into stays values
            ('$stays')";
if ($conn->query($sql) === TRUE) {
    $link = "Rooms.php";
print "<a href='".$link."'><h6>Click me to<br> proceed in<br> choosing rooms</h6></a>";
} 
    }
}
}
?>  
    
</div> 

<!FOOTER---------------------------------------------------------------------------------------------->
<div id="footer">
<center>
<h8> FOBS Hotel Reservation --- All Rights Reserved - 2017 :)) </h8>
</center>
</div>
</body>
</html>