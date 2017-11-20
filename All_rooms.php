<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="images/hotel_rooms/logo.jpg">
<link rel="stylesheet" type="text/css" href="css.css">
<title> FOBS | Rooms & Suite</title>
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
?>    

<body>
    <body style="scroll-behavior: smooth">
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
    <h10>Rooms & Suite Types </h10>
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
<div id="body_long">
<div class="element"><br>
    <a href="All_rooms.php#Single"><h8>Single</h8></a><br><br>
    <a href="All_rooms.php#Double"><h8>Double</h8></a><br><br>
    <a href="All_rooms.php#Queen"><h8>Queen</h8></a><br><br>
    <a href="All_rooms.php#King"><h8>King</h8></a><br><br>
    <a href="All_rooms.php#Studio"><h8>Studio</h8></a><br><br>
    <a href="All_rooms.php#Master"><h8>Master</h8></a><br><br>
    <a href="All_rooms.php#Luxury"><h8>Luxury</h8></a><br><br>
</div>
<br><br><br>
<center /><a name="Single">
<h6> Single Rooms </h6></a>
<br><br><br>
<h7>  "All single rooms here will definetely satisfy you" </h7>   
    
<br><br><br><br>
<center>
<table border="0" width="800px" height="700px">
<tr>
<td>
<Form Name ="form1" Method ="POST" ACTION = "Error_Room.php">
<input type="hidden" name="room" value="Single-Room(A)">
<input type="hidden" name="price" value="1000">
<h1>Number of Residents</h1>    
<INPUT TYPE = "number" min="1" max="2" VALUE ="1" NAME = "max_res" style="width: 45px" maxlength="2">
<INPUT TYPE = "Submit" Name = "Submit1" VALUE = "Rent">
</INPUT>
</INPUT>
</Form> <br>
<div class="grow pic">
    <div class="tooltip">
<img src="images/hotel_rooms/single_rooms/1.jpg">
    <span class="tooltiptext">
        <p><br>
            Name: Single-Room(A)<br>
            Price: 1,000<br>    
            WiFi: None
        </p></span>
    </div>
<h8> FOBS | Single Room (A) </h8></div>
</td>
<td>
<Form Name ="form1" Method ="POST" ACTION = "Error_Room.php">
<input type="hidden" name="room" value="Single-Room(B)">
<input type="hidden" name="price" value="1000">
    <h1>Number of Residents</h1>  
<INPUT TYPE = "number" min="1" max="2" VALUE ="1" NAME = "max_res" style="width: 45px" maxlength="2">
<INPUT TYPE = "Submit" Name = "Submit1" VALUE = "Rent">
</INPUT>
    </INPUT>
</Form> <br>
<div class="grow pic">
    <div class="tooltip">
<img src="images/hotel_rooms/single_rooms/2.jpg">
    <span class="tooltiptext">
        <p><br>
            Name: Single-Room(B)<br>
            Price: 1,000<br>
            WiFi: None
        </p></span>
    </div>
<h8> FOBS | Single Room (B) </h8></div>
</td>


<tr>
<td>
<Form Name ="form1" Method ="POST" ACTION = "Error_Room.php">
<input type="hidden" name="room" value="Single-Room(C)">
<input type="hidden" name="price" value="1000">
    <h1>Number of Residents</h1>  
<INPUT TYPE = "number" min="1" max="2" VALUE ="1" NAME = "max_res" style="width: 45px" maxlength="2">    
<INPUT TYPE = "Submit" Name = "Submit1" VALUE = "Rent">
</INPUT>
    </INPUT>    
</Form> <br>
<div class="grow pic">
    <div class="tooltip">
<img src="images/hotel_rooms/single_rooms/3.jpg">
    <span class="tooltiptext">
        <p><br>
            Name: Single-Room(C)<br>
            Price: 1,000<br>
            WiFi: Available
        </p></span>
    </div>
<h8> FOBS | Single Room (C) </h8></div>
</td>
<td>
<Form Name ="form1" Method ="POST" ACTION = "Error_Room.php">
<input type="hidden" name="room" value="Single-Room(D)">
<input type="hidden" name="price" value="1000">
    <h1>Number of Residents</h1>  
<INPUT TYPE = "number" min="1" max="2" VALUE ="1" NAME = "max_res" style="width: 45px" maxlength="2">    
<INPUT TYPE = "Submit" Name = "Submit1" VALUE = "Rent">
</INPUT>
    </INPUT>    
</Form> <br>
<div class="grow pic">
    <div class="tooltip">
<img src="images/hotel_rooms/single_rooms/4.jpg">
    <span class="tooltiptext">
        <p><br>
            Name: Single-Room(D)<br>
            Price: 1,000<br>
            WiFi: Available
        </p></span>
    </div>
<h8> FOBS | Single Room (D) </h8></div>
</td>
</tr>
    
<tr>
<td>
<Form Name ="form1" Method ="POST" ACTION = "Error_Room.php">
<input type="hidden" name="room" value="Single-Room(E)">
<input type="hidden" name="price" value="1000">
    <h1>Number of Residents</h1>  
<INPUT TYPE = "number" min="1" max="2" VALUE ="1" NAME = "max_res" style="width: 45px" maxlength="2">    
<INPUT TYPE = "Submit" Name = "Submit1" VALUE = "Rent">
</INPUT>
    </INPUT>
</Form> <br>
<div class="grow pic">
    <div class="tooltip">
<img src="images/hotel_rooms/single_rooms/5.jpg">
    <span class="tooltiptext">
        <p><br>
            Name: Single-Room(E)<br>
            Price: 1,000<br>
            WiFi: Available
        </p></span>
    </div>
<h8> FOBS | Single Room (E) </h8></div>
</td>
</tr>    
</table></center>
    
<br><br><br>
<center /><a name="Double">
<h6> Double Rooms </h6></a>
<br><br><br>
<h7>  "All double rooms here will definetely satisfy you" </h7>

<br><br><br><br>
<center>
<table border="0" width="800px" height="700px">
<tr>
<td>
<Form Name ="form1" Method ="POST" ACTION = "Error_Room.php">
<input type="hidden" name="room" value="Double-Room(A)">
<input type="hidden" name="price" value="3000">
    <h1>Number of Residents</h1>  
<INPUT TYPE = "number" min="1" max="3" VALUE ="1" NAME = "max_res" style="width: 45px" maxlength="2">    
<INPUT TYPE = "Submit" Name = "Submit1" VALUE = "Rent">
</INPUT>
    </INPUT>
</Form> <br>
<div class="grow pic">
    <div class="tooltip">
<img src="images/hotel_rooms/double_rooms/1.jpeg">
    <span class="tooltiptext">
        <p><br>
            Name: Double-Room(A)<br>
            Price: 3,000<br>
            WiFi: None
        </p></span>
    </div>
<h8> FOBS | Single Room (A) </h8></div>
</td>
<td>
<Form Name ="form1" Method ="POST" ACTION = "Error_Room.php">
<input type="hidden" name="room" value="Double-Room(B)">
<input type="hidden" name="price" value="3000">
    <h1>Number of Residents</h1>  
<INPUT TYPE = "number" min="1" max="3" VALUE ="1" NAME = "max_res" style="width: 45px" maxlength="2">    
<INPUT TYPE = "Submit" Name = "Submit1" VALUE = "Rent">
</INPUT>
    </INPUT>
</Form> <br>
<div class="grow pic">
    <div class="tooltip">
<img src="images/hotel_rooms/double_rooms/2.jpg">
    <span class="tooltiptext">
        <p><br>
            Name: Double-Room(B)<br>
            Price: 3,000<br>
            WiFi: None
        </p></span>
    </div>
<h8> FOBS | Double Room (B) </h8></div>
</td>


<tr>
<td>
<Form Name ="form1" Method ="POST" ACTION = "Error_Room.php">
<input type="hidden" name="room" value="Double-Room(C)">
<input type="hidden" name="price" value="3000">
    <h1>Number of Residents</h1>  
<INPUT TYPE = "number" min="1" max="3" VALUE ="1" NAME = "max_res" style="width: 45px" maxlength="2">    
<INPUT TYPE = "Submit" Name = "Submit1" VALUE = "Rent">
</INPUT>
    </INPUT>    
</Form> <br>
<div class="grow pic">
    <div class="tooltip">
<img src="images/hotel_rooms/double_rooms/3.jpg">
    <span class="tooltiptext">
        <p><br>
            Name: Double-Room(C)<br>
            Price: 3,000<br>
            WiFi: None
        </p></span>
    </div>
<h8> FOBS | Single Room (C) </h8></div>
</td>
<td>
<Form Name ="form1" Method ="POST" ACTION = "Error_Room.php">
<input type="hidden" name="room" value="Double-Room(D)">
<input type="hidden" name="price" value="3000">
    <h1>Number of Residents</h1>  
<INPUT TYPE = "number" min="1" max="3" VALUE ="1" NAME = "max_res" style="width: 45px" maxlength="2">    
<INPUT TYPE = "Submit" Name = "Submit1" VALUE = "Rent">
</INPUT>
    </INPUT>
</Form> <br>
<div class="grow pic">
    <div class="tooltip">
<img src="images/hotel_rooms/double_rooms/4.jpg">
    <span class="tooltiptext">
        <p><br>
            Name: Double-Room(D)<br>
            Price: 3,000<br>
            WiFi: Available
        </p></span>
    </div>
<h8> FOBS | Double Room (D) </h8></div>
</td>
</tr>
    
<tr>
<td>
<Form Name ="form1" Method ="POST" ACTION = "Error_Room.php">
<input type="hidden" name="room" value="Double-Room(E)">
<input type="hidden" name="price" value="3000">
    <h1>Number of Residents</h1>  
<INPUT TYPE = "number" min="1" max="3" VALUE ="1" NAME = "max_res" style="width: 45px" maxlength="2">    
<INPUT TYPE = "Submit" Name = "Submit1" VALUE = "Rent">
</INPUT>
    </INPUT>
</Form> <br>
<div class="grow pic">
    <div class="tooltip">
<img src="images/hotel_rooms/double_rooms/5.jpg">
    <span class="tooltiptext">
        <p><br>
            Name: Double-Room(E)<br>
            Price: 3,000<br>
            WiFi: Available
        </p></span>
    </div>
<h8> FOBS | Double Room (E) </h8></div>
</td>
</tr>    
</table></center>   
    
<br><br><br>
<center /><a name="Queen">
<h6> Queen Rooms </h6></a>
<br><br><br>
<h7>  "All queen rooms here will definetely satisfy you" </h7>

<br><br><br><br>
<center>
<table border="0" width="800px" height="700px">
<tr>
<td>
<Form Name ="form1" Method ="POST" ACTION = "Error_Room.php">
<input type="hidden" name="room" value="Queen-Room(A)">
<input type="hidden" name="price" value="5000">
    <h1>Number of Residents</h1>  
<INPUT TYPE = "number" min="1" max="5" VALUE ="1" NAME = "max_res" style="width: 45px" maxlength="2">    
<INPUT TYPE = "Submit" Name = "Submit1" VALUE = "Rent">
</INPUT>
    </INPUT>    
</Form> <br>
<div class="grow pic">
    <div class="tooltip">
<img src="images/hotel_rooms/queen/1.jpg">
    <span class="tooltiptext">
        <p><br>
            Name: Queen-Room(A)<br>
            Price: 5,000<br>
            WiFi: Available
        </p></span>
    </div>
<h8> FOBS | Queen Room (A) </h8></div>
</td>
<td>
<Form Name ="form1" Method ="POST" ACTION = "Error_Room.php">
<input type="hidden" name="room" value="Queen-Room(B)">
<input type="hidden" name="price" value="5000">
    <h1>Number of Residents</h1>  
<INPUT TYPE = "number" min="1" max="5" VALUE ="1" NAME = "max_res" style="width: 45px" maxlength="2">    
<INPUT TYPE = "Submit" Name = "Submit1" VALUE = "Rent">
</INPUT>
    </INPUT>
</Form> <br>
<div class="grow pic">
    <div class="tooltip">
<img src="images/hotel_rooms/queen/2.jpg">
    <span class="tooltiptext">
        <p><br>
            Name: Queen-Room(B)<br>
            Price: 5000<br>
            WiFi: Available
        </p></span>
    </div>
<h8> FOBS | Queen Room (B) </h8></div>
</td>


<tr>
<td>
<Form Name ="form1" Method ="POST" ACTION = "Error_Room.php">
<input type="hidden" name="room" value="Queen-Room(C)">
<input type="hidden" name="price" value="5000">
    <h1>Number of Residents</h1>  
<INPUT TYPE = "number" min="1" max="5" VALUE ="1" NAME = "max_res" style="width: 45px" maxlength="2">    
<INPUT TYPE = "Submit" Name = "Submit1" VALUE = "Rent">
    </INPUT>
</INPUT>
</Form> <br>
<div class="grow pic">
    <div class="tooltip">
<img src="images/hotel_rooms/queen/3.jpg">
    <span class="tooltiptext">
        <p><br>
            Name: Queen-Room(C)<br>
            Price: 5,000<br>
            WiFi: Available
        </p></span>
    </div>
<h8> FOBS | Queen Room (C) </h8></div>
</td>
<td>
<Form Name ="form1" Method ="POST" ACTION = "Error_Room.php">
<input type="hidden" name="room" value="Queen-Room(D)">
<input type="hidden" name="price" value="5000">
    <h1>Number of Residents</h1>  
<INPUT TYPE = "number" min="1" max="5" VALUE ="1" NAME = "max_res" style="width: 45px" maxlength="2">    
<INPUT TYPE = "Submit" Name = "Submit1" VALUE = "Rent">
</INPUT>
    </INPUT>
</Form> <br>
<div class="grow pic">
    <div class="tooltip">
<img src="images/hotel_rooms/queen/4.jpg">
    <span class="tooltiptext">
        <p><br>
            Name: Queen-Room(D)<br>
            Price: 5,000<br>
            WiFi: Available
        </p></span>
    </div>
<h8> FOBS | Queen Room (D) </h8></div>
</td>
</tr>
    
<tr>
<td>
<Form Name ="form1" Method ="POST" ACTION = "Error_Room.php">
<input type="hidden" name="room" value="Queen-Room(E)">
<input type="hidden" name="price" value="5000">
    <h1>Number of Residents</h1>  
<INPUT TYPE = "number" min="1" max="5" VALUE ="1" NAME = "max_res" style="width: 45px" maxlength="2">    
<INPUT TYPE = "Submit" Name = "Submit1" VALUE = "Rent">
</INPUT>
    </INPUT>
</Form> <br>
<div class="grow pic">
    <div class="tooltip">
<img src="images/hotel_rooms/queen/5.jpg">
    <span class="tooltiptext">
        <p><br>
            Name: Queen-Room(E)<br>
            Price: 5,000<br>
            WiFi: Available
        </p></span>
    </div>
<h8> FOBS | Queen Room (E) </h8></div>
</td>
</tr>    
</table></center>   
    
<br><br><br>
<center /><a name="King">
<h6> King Rooms </h6></a>
<br><br><br>
<h7>  "All king rooms here will definetely satisfy you" </h7>

<br><br><br><br>
<center>
<table border="0" width="800px" height="700px">
<tr>
<td>
<Form Name ="form1" Method ="POST" ACTION = "Error_Room.php">
<input type="hidden" name="room" value="King-Room(A)">
<input type="hidden" name="price" value="5000">
    <h1>Number of Residents</h1>  
<INPUT TYPE = "number" min="1" max="5" VALUE ="1" NAME = "max_res" style="width: 45px" maxlength="2">    
<INPUT TYPE = "Submit" Name = "Submit1" VALUE = "Rent">
</INPUT>
    </INPUT>
</Form> <br>
<div class="grow pic">
    <div class="tooltip">
<img src="images/hotel_rooms/king/1.jpg">
    <span class="tooltiptext">
        <p><br>
            Name: King-Room(A)<br>
            Price: 5,000<br>
            WiFi: Available
        </p></span>
    </div>
<h8> FOBS | King Room (A) </h8></div>
</td>
<td>
<Form Name ="form1" Method ="POST" ACTION = "Error_Room.php">
<input type="hidden" name="room" value="King-Room(B)">
<input type="hidden" name="price" value="5000">
    <h1>Number of Residents</h1>  
<INPUT TYPE = "number" min="1" max="5" VALUE ="1" NAME = "max_res" style="width: 45px" maxlength="2">
<INPUT TYPE = "Submit" Name = "Submit1" VALUE = "Rent">
</INPUT>
    </INPUT>
</Form> <br>
<div class="grow pic">
    <div class="tooltip">
<img src="images/hotel_rooms/king/2.jpg">
    <span class="tooltiptext">
        <p><br>
            Name: King-Room(B)<br>
            Price: 5,000<br>
            WiFi: Available
        </p></span>
    </div>
<h8> FOBS | King Room (B) </h8></div>
</td>

    
<tr>
<td>
<Form Name ="form1" Method ="POST" ACTION = "Error_Room.php">
<input type="hidden" name="room" value="King-Room(C)">
<input type="hidden" name="price" value="5000">
    <h1>Number of Residents</h1>  
<INPUT TYPE = "number" min="1" max="5" VALUE ="1" NAME = "max_res" style="width: 45px" maxlength="2">    
<INPUT TYPE = "Submit" Name = "Submit1" VALUE = "Rent">
</INPUT>
    </INPUT>
</Form> <br>
<div class="grow pic">
    <div class="tooltip">
<img src="images/hotel_rooms/king/3.jpg">
    <span class="tooltiptext">
        <p><br>
           Name: King-Room(C)<br>
            Price: 5,000<br>
            WiFi: Available
        </p></span>
    </div>
<h8> FOBS | King Room (C) </h8></div>
</td>
<td>
<Form Name ="form1" Method ="POST" ACTION = "Error_Room.php">
<input type="hidden" name="room" value="King-Room(D)">
<input type="hidden" name="price" value="5000">
    <h1>Number of Residents</h1>  
<INPUT TYPE = "number" min="1" max="5" VALUE ="1" NAME = "max_res" style="width: 45px" maxlength="2">    
<INPUT TYPE = "Submit" Name = "Submit1" VALUE = "Rent">
</INPUT>
    </INPUT>    
</Form> <br>
<div class="grow pic">
    <div class="tooltip">
<img src="images/hotel_rooms/king/4.jpg">
    <span class="tooltiptext">
        <p><br>
           Name: King-Room(D)<br>
            Price: 5,000<br>
            WiFi: Available
        </p></span>
    </div>
<h8> FOBS | King Room (D) </h8></div>
</td>
</tr>
    
<tr>
<td>
<Form Name ="form1" Method ="POST" ACTION = "Error_Room.php">
<input type="hidden" name="room" value="King-Room(E)">
<input type="hidden" name="price" value="5000">
    <h1>Number of Residents</h1>  
<INPUT TYPE = "number" min="1" max="5" VALUE ="1" NAME = "max_res" style="width: 45px" maxlength="2">    
<INPUT TYPE = "Submit" Name = "Submit1" VALUE = "Rent">
</INPUT>
    </INPUT>    
</Form> <br>
<div class="grow pic">
    <div class="tooltip">
<img src="images/hotel_rooms/king/5.jpg">
    <span class="tooltiptext">
        <p><br>
            Name: King-Room(E)<br>
            Price: 5,000<br>
            WiFi: Available
        </p></span>
    </div>
<h8> FOBS | King Room (E) </h8></div>
</td>
</tr>    
</table></center>    
    
<br><br><br>
<center /><a name="Studio">
<h6> Studio Suite </h6></a>
<br><br><br>
<h7>  "All studio suites here will definetely satisfy you" </h7>

<br><br><br><br>
<center>
<table border="0" width="800px" height="700px">
<tr>
<td>
<Form Name ="form1" Method ="POST" ACTION = "Error_Room.php">
<input type="hidden" name="room" value="Studio-Suite(A)">
<input type="hidden" name="price" value="7000">
    <h1>Number of Residents</h1>  
<INPUT TYPE = "number" min="1" max="6" VALUE ="1" NAME = "max_res" style="width: 45px" maxlength="2">    
<INPUT TYPE = "Submit" Name = "Submit1" VALUE = "Rent">
</INPUT>
    </INPUT>    
</Form> <br>
<div class="grow pic">
    <div class="tooltip">
<img src="images/hotel_rooms/studio/1.jpg">
    <span class="tooltiptext">
        <p><br>
            Name: Studio-Suite(A)<br>
            Price: 7,000<br>
            WiFi: Available
        </p></span>
    </div>
<h8> FOBS | Studio Suite (A) </h8></div>
</td>
<td>
<Form Name ="form1" Method ="POST" ACTION = "Error_Room.php">
<input type="hidden" name="room" value="Studio-Suite(B)">
<input type="hidden" name="price" value="7000">
    <h1>Number of Residents</h1>  
<INPUT TYPE = "number" min="1" max="6" VALUE ="1" NAME = "max_res" style="width: 45px" maxlength="2">    
<INPUT TYPE = "Submit" Name = "Submit1" VALUE = "Rent">
</INPUT>
    </INPUT>
</Form> <br>
<div class="grow pic">
    <div class="tooltip">
<img src="images/hotel_rooms/studio/2.jpg">
    <span class="tooltiptext">
        <p><br>
            Name: Studio-Suite(B)<br>
            Price: 7,000<br>
            WiFi: Available
        </p></span>
    </div>
<h8> FOBS | Studio Suite (B) </h8></div>
</td>


<tr>
<td>
<Form Name ="form1" Method ="POST" ACTION = "Error_Room.php">
<input type="hidden" name="room" value="Studio-Suite(C)">
<input type="hidden" name="price" value="7000">
    <h1>Number of Residents</h1>  
<INPUT TYPE = "number" min="1" max="6" VALUE ="1" NAME = "max_res" style="width: 45px" maxlength="2">    
<INPUT TYPE = "Submit" Name = "Submit1" VALUE = "Rent">
</INPUT>
    </INPUT>
</Form> <br>
<div class="grow pic">
    <div class="tooltip">
<img src="images/hotel_rooms/studio/3.jpg">
    <span class="tooltiptext">
        <p><br>
           Name: Studio-Suite(C)<br>
            Price: 7,000<br>
            WiFi: Available
        </p></span>
    </div>
<h8> FOBS | Studio Suite (C) </h8></div>
</td>
<td>
<Form Name ="form1" Method ="POST" ACTION = "Error_Room.php">
<input type="hidden" name="room" value="Studio-Suite(D)">
<input type="hidden" name="price" value="7000">
    <h1>Number of Residents</h1>  
<INPUT TYPE = "number" min="1" max="6" VALUE ="1" NAME = "max_res" style="width: 45px" maxlength="2">    
<INPUT TYPE = "Submit" Name = "Submit1" VALUE = "Rent">
</INPUT>
    </INPUT>
</Form> <br>
<div class="grow pic">
    <div class="tooltip">
<img src="images/hotel_rooms/studio/4.jpg">
    <span class="tooltiptext">
        <p><br>
          Name: Studio-Suite(D)<br>
            Price: 7,000<br>
            WiFi: Available
        </p></span>
    </div>
<h8> FOBS | Studio Suite (D) </h8></div>
</td>
</tr>
    
<tr>
<td>
<Form Name ="form1" Method ="POST" ACTION = "Error_Room.php">
<input type="hidden" name="room" value="Studio-Suite(E)">
<input type="hidden" name="price" value="7000">
    <h1>Number of Residents</h1>  
<INPUT TYPE = "number" min="1" max="6" VALUE ="1" NAME = "max_res" style="width: 45px" maxlength="2">    
<INPUT TYPE = "Submit" Name = "Submit1" VALUE = "Rent">
</INPUT>
    </INPUT>
</Form> <br>
<div class="grow pic">
    <div class="tooltip">
<img src="images/hotel_rooms/studio/5.jpg">
    <span class="tooltiptext">
        <p><br>
            Name: Studio-Suite(E)<br>
            Price: 7,000<br>
            WiFi: Available
        </p></span>
    </div>
<h8> FOBS | Studio Suite (E) </h8></div>
</td>
</tr>    
</table></center>
    
<br><br><br>
<center /><a name="Master">
<h6> Master Suite </h6></a>
<br><br><br>
<h7>  "All master suites here will definetely satisfy you" </h7>

<br><br><br><br>
<center>
<table border="0" width="800px" height="700px">
<tr>
<td>
<Form Name ="form1" Method ="POST" ACTION = "Error_Room.php">
<input type="hidden" name="room" value="Master-Suite(A)">
<input type="hidden" name="price" value="9000">
    <h1>Number of Residents</h1>  
<INPUT TYPE = "number" min="1" max="6" VALUE ="1" NAME = "max_res" style="width: 45px" maxlength="2">
<INPUT TYPE = "Submit" Name = "Submit1" VALUE = "Rent">
</INPUT>
    </INPUT>
</Form> <br>
<div class="grow pic">
    <div class="tooltip">
<img src="images/hotel_rooms/master/1.jpeg">
    <span class="tooltiptext">
        <p><br>
            Name: Master-Suite(A)<br>
            Price: 9,000<br>
            WiFi: Available
        </p></span>
    </div>
<h8> FOBS | Master Suite (A) </h8></div>
</td>
<td>
<Form Name ="form1" Method ="POST" ACTION = "Error_Room.php">
<input type="hidden" name="room" value="Master-Suite(B)">
<input type="hidden" name="price" value="9000">
    <h1>Number of Residents</h1>  
<INPUT TYPE = "number" min="1" max="6" VALUE ="1" NAME = "max_res" style="width: 45px" maxlength="2">    
<INPUT TYPE = "Submit" Name = "Submit1" VALUE = "Rent">
</INPUT>
    </INPUT>
</Form> <br>
<div class="grow pic">
    <div class="tooltip">
<img src="images/hotel_rooms/master/2.jpeg">
    <span class="tooltiptext">
        <p><br>
            Name: Master-Suite(B)<br>
            Price: 9,000<br>
            WiFi: Available
        </p></span>
    </div>
<h8> FOBS | Master Suite (B) </h8></div>
</td>


<tr>
<td>
<Form Name ="form1" Method ="POST" ACTION = "Error_Room.php">
<input type="hidden" name="room" value="Master-Suite(C)">
<input type="hidden" name="price" value="9000">
    <h1>Number of Residents</h1>  
<INPUT TYPE = "number" min="1" max="6" VALUE ="1" NAME = "max_res" style="width: 45px" maxlength="2">    
<INPUT TYPE = "Submit" Name = "Submit1" VALUE = "Rent">
</INPUT>
    </INPUT>
</Form> <br>
<div class="grow pic">
    <div class="tooltip">
<img src="images/hotel_rooms/master/3.jpg">
    <span class="tooltiptext">
        <p><br>
           Name: Master-Suite(C)<br>
            Price: 9,000<br>
            WiFi: Available
        </p></span>
    </div>
<h8> FOBS | Master Suite (C) </h8></div>
</td>
<td>
<Form Name ="form1" Method ="POST" ACTION = "Error_Room.php">
<input type="hidden" name="room" value="Master-Suite(D)">
<input type="hidden" name="price" value="9000">
    <h1>Number of Residents</h1>  
<INPUT TYPE = "number" min="1" max="6" VALUE ="1" NAME = "max_res" style="width: 45px" maxlength="2">
<INPUT TYPE = "Submit" Name = "Submit1" VALUE = "Rent">
</INPUT>
    </INPUT>
</Form> <br>
<div class="grow pic">
    <div class="tooltip">
<img src="images/hotel_rooms/master/4.jpg">
    <span class="tooltiptext">
        <p><br>
          Name: Master-Suite(D)<br>
            Price: 9,000<br>
            WiFi: Available
        </p></span>
    </div>
<h8> FOBS | Master Suite (D) </h8></div>
</td>
</tr>
    
<tr>
<td>
<Form Name ="form1" Method ="POST" ACTION = "Error_Room.php">
<input type="hidden" name="room" value="Master-Suite(E)">
<input type="hidden" name="price" value="9000">
    <h1>Number of Residents</h1>  
<INPUT TYPE = "number" min="1" max="6" VALUE ="1" NAME = "max_res" style="width: 45px" maxlength="2">    
<INPUT TYPE = "Submit" Name = "Submit1" VALUE = "Rent">
</INPUT>
    </INPUT>
</Form> <br>
<div class="grow pic">
    <div class="tooltip">
<img src="images/hotel_rooms/master/5.jpg">
    <span class="tooltiptext">
        <p><br>
            Name: Master-Suite(E)<br>
            Price: 9,000<br>
            WiFi: Available
        </p></span>
    </div>
<h8> FOBS | Master Suite (E) </h8></div>
</td>
</tr>    
</table></center> 
    
<br><br><br>
<center /><a name="Luxury">
<h6> Luxury Suite </h6></a>
<br><br><br>
<h7>  "All luxury suites here will definetely satisfy you" </h7>

<br><br><br><br>
<center>
<table border="0" width="800px" height="700px">
<tr>
<td>
<Form Name ="form1" Method ="POST" ACTION = "Error_Room.php">
<input type="hidden" name="room" value="Luxury-Suite(A)">
<input type="hidden" name="price" value="12000">
    <h1>Number of Residents</h1>  
<INPUT TYPE = "number" min="1" max="6" VALUE ="1" NAME = "max_res" style="width: 45px" maxlength="2">    
<INPUT TYPE = "Submit" Name = "Submit1" VALUE = "Rent">
</INPUT>
    </INPUT>
</Form> <br>
<div class="grow pic">
    <div class="tooltip">
<img src="images/hotel_rooms/luxury_premium/1.jpg">
    <span class="tooltiptext">
        <p><br>
            Name: Luxury-Suite(A)<br>
            Price: 12,000<br>
            WiFi: Available
        </p></span>
    </div>
<h8> FOBS | Luxury Suite (A) </h8></div>
</td>
<td>
<Form Name ="form1" Method ="POST" ACTION = "Error_Room.php">
<input type="hidden" name="room" value="Luxury-Suite(B)">
<input type="hidden" name="price" value="12000">
    <h1>Number of Residents</h1>  
<INPUT TYPE = "number" min="1" max="6" VALUE ="1" NAME = "max_res" style="width: 45px" maxlength="2">    
<INPUT TYPE = "Submit" Name = "Submit1" VALUE = "Rent">
</INPUT>
    </INPUT>    
</Form> <br>
<div class="grow pic">
    <div class="tooltip">
<img src="images/hotel_rooms/luxury_premium/2.jpg">
    <span class="tooltiptext">
        <p><br>
            Name: Luxury-Suite(B)<br>
            Price: 12,000<br>
            WiFi: Available
        </p></span>
    </div>
<h8> FOBS | Luxury Suite (B) </h8></div>
</td>


<tr>
<td>
<Form Name ="form1" Method ="POST" ACTION = "Error_Room.php">
<input type="hidden" name="room" value="Luxury-Suite(C)">
<input type="hidden" name="price" value="12000">
    <h1>Number of Residents</h1>  
<INPUT TYPE = "number" min="1" max="6" VALUE ="1" NAME = "max_res" style="width: 45px" maxlength="2">    
<INPUT TYPE = "Submit" Name = "Submit1" VALUE = "Rent">
</INPUT>
    </INPUT>
</Form> <br>
<div class="grow pic">
    <div class="tooltip">
<img src="images/hotel_rooms/luxury_premium/3.jpg">
    <span class="tooltiptext">
        <p><br>
           Name: Luxury-Suite(C)<br>
            Price: 12,000<br>
            WiFi: Available
        </p></span>
    </div>
<h8> FOBS | Luxury Suite (C) </h8></div>
</td>
<td>
<Form Name ="form1" Method ="POST" ACTION = "Error_Room.php">
<input type="hidden" name="room" value="Luxury-Suite(D)">
<input type="hidden" name="price" value="12000"> 
<h1>Number of Residents</h1>  
<INPUT TYPE = "number" min="1" max="6" VALUE ="1" NAME = "max_res" style="width: 45px" maxlength="2"> 
<INPUT TYPE = "Submit" Name = "Submit1" VALUE = "Rent">
</INPUT>
    </INPUT>
</Form> <br>
<div class="grow pic">
    <div class="tooltip">
<img src="images/hotel_rooms/luxury_premium/4.jpg">
    <span class="tooltiptext">
        <p><br>
          Name: Luxury-Suite(D)<br>
            Price: 12,000<br>
            WiFi: Available
        </p></span>
    </div>
<h8> FOBS | Luxury Suite (D) </h8></div>
</td>
</tr>
    
<tr>
<td>
<Form Name ="form1" Method ="POST" ACTION = "Error_Room.php">
<input type="hidden" name="room" value="Luxury-Suite(E)">
<input type="hidden" name="price" value="12000"> 
<h1>Number of Residents</h1>  
<INPUT TYPE = "number" min="1" max="6" VALUE ="1" NAME = "max_res" style="width: 45px" maxlength="2"> 
<INPUT TYPE = "Submit" Name = "Submit1" VALUE = "Rent">
</INPUT>
    </INPUT>
</Form> <br>
<div class="grow pic">
    <div class="tooltip">
<img src="images/hotel_rooms/luxury_premium/5.jpg">
    <span class="tooltiptext">
        <p><br>
            Name: Luxury-Suite(E)<br>
            Price: 12,000<br>
            WiFi: Available
        </p></span>
    </div>
<h8> FOBS | Luxury Suite (E) </h8></div>
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
</body></body>
</html>