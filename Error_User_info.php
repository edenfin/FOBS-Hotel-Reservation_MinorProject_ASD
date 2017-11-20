<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="images/hotel_rooms/logo.jpg">
<title> FOBS | Confirmation </title>
<link rel="stylesheet" type="text/css" href="css.css">
</head> 
    
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
    <h10>Confirmation</h10>
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

<!BODY------------------------------------------------------------------------------------------>  
<div id="body">
<center /><br><br>
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
// insert values
$sql = "use hotel_res";
if ($conn->query($sql) === TRUE) {
} else {
    echo "Error creating database: " . $conn->error;
}
    
$sql = "select * from cico";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
             "Check-in: " . $row["check_in"] . "<br>" . "Check-out: " . $row["check_out"]. "<br>";
            $ci = $row["check_in"];
            $co = $row["check_out"];
        }
    }
    
$sql = "select * from rooms";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
             "Room: " . $row["room"];
            $room = $row["room"];
        }
    }
//submit from User_info
if (isset($_POST['Submit'])) {
    
$fn = $_POST['fname'];
$ln = $_POST['lname'];
$pw = $_POST['pword'];
$passw=null;

if ($fn == "" || $ln == "" || $pw == "") {
echo "<h8>Some fields are missing!!!</h8><br><br>";
$link = "User_info.php";
print "<a href='".$link."'><h6>Click me<br> to user info<br> choosing dates</h6></a>";
    
}
else if($fn != "" && $ln != "" && $pw != "" ){

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
    
    $sql = "select password from customers";
    $result = $conn->query($sql);
    if ($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            "Room: " . $row["password"];
            $dbpword = $row["password"];
            if($pw == $dbpword){
                $passw = $dbpword;
            }
        }
    }
    
if($pw == $passw){
// select values
        echo "<h8>$pw " . "<br>is already taken :( </h8><br><br>";
        $link = "User_info.php";
        print "<a href='".$link."'><h6>Click me to go<br> back to customer info</h6></a>";
        }   
else{
    $sql = "use hotel_res";
if ($conn->query($sql) === TRUE) {
} else {
    echo "Error creating database: " . $conn->error;
}
    
// insert values
$sql = "insert into customers values
        ('$fn','$ln','$ci','$co','$room','$pw')";
if ($conn->query($sql) === TRUE) {
        echo "<h8>Thanks for choosing us, we hope to serve you soon</h8>"
} else {
    echo "Error creating database: " . $conn->error;
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