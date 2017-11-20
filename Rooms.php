<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="images/hotel_rooms/logo.jpg">
<link rel="stylesheet" type="text/css" href="css.css">
<title> FOBS | Rooms </title>
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
 
$sql = "drop table rooms";
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
<body bgcolor="#A7C8D1">
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
<a href="http://localhost/Hotel%20Reservation/Home.php">HOME</a></h1>
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
<img src="images/hotel_rooms/logo.jpg" style width="200px" height="95px">
</td>

</tr>
</table>
</div>

<!PLACES LINKS--------------------------------------------------------------------------------->

<div id="link_places">
    <center />
    <h10>Rooms</h10>
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
<div id="body">
<br><br><br>
<center />
<h6> Types of Rooms and Suites </h6>
<br><br><br>
<h7>  "These are our rooms that we could offer. We are pleasured to serve you :)" </h7>

<br><br><br><br>
<center>
<table border="0" width="700px" height="700px">
<tr>
<td>
<div class="grow pic"><a href="All_rooms.php#Single">
    <img src="images/hotel_rooms/single_rooms/1.jpg"></a>
<br>
<h8> Room Type (Single) </h8></div>
</td>
<td><div class="grow pic"><a href="All_rooms.php#Queen">
    <img src="images/hotel_rooms/queen/1.jpg"></a>
<br>
<h8> Room Type (Queen) </h8></div>
</td>


<tr>
<td><div class="grow pic"><a href="All_rooms.php#Double">
    <img src="images/hotel_rooms/double_rooms/1.jpeg"></a>
<br>
<h8> Room Type (Double) </h8></div>
</td>
<td><div class="grow pic">
    <a href="All_rooms.php#King">
        <img src="images/hotel_rooms/king/1.jpg"></a>
<br>
<h8> Room Type (King) </h8></div>
</td>
</tr>
    
<tr>
<td>
<div class="grow pic"><a href="All_rooms.php#Studio">
    <img src="images/hotel_rooms/studio/1.jpg"></a>
<br>
<h8> Suite Type (Studio) </h8></div>
</td>
<td><div class="grow pic">
    <a href="All_rooms.php#Master">
        <img src="images/hotel_rooms/master/1.jpeg"></a>
<br>
<h8> Suite Type (Master) </h8></div>
</td>


<tr>
<td><div class="grow pic">
    <a href="All_rooms.php#Luxury">
        <img src="images/hotel_rooms/luxury_premium/1.jpg"></a>a
<br>
<h8> Suite Type (Luxury Premium) </h8></div>
</td>
</tr>    
</table></center>
</div>

<!FOOTER---------------------------------------------------------------------------------------------->
<div id="footer">
<center>
<h8> FOBS - Hotel Reservation --- All Rights Reserved :)) </h8>
</center>
</div>
</body>
</body>
</html>