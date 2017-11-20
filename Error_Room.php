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
 
$sql = "drop table rooms";
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

<!BODY---------------------------------------------------------------------------------------------->

<div id="body_center">  
<br><br>  

<?php
if (isset($_POST['Submit1'])) {
$passw = null;
$radioVal = $_POST['room'];
$price = $_POST['price'];
$max_res = $_POST['max_res'];
    
// Create connection
$servername = "localhost";
$username = "root";
$password = "";    
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

// select values
$sql = "select room from customers";
    $result = $conn->query($sql);
    if ($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
             "Room: " . $row["room"];
            $dbpword = $row["room"];
            if($radioVal == $dbpword){
                $passw = $dbpword;
            }
        }
    }
    
if($radioVal == $passw){
// select values
        echo "<h8>$radioVal " . "<br>is already taken :( </h8><br><br>";
        $link = "All_rooms.php";
        print "<a href='".$link."'><h6>Click me to go<br> back to choosing Rooms</h6></a>";
        }
    else{
        $link = "User_info.php";
        print "<a href='".$link."'><h6>Click me: <br>The room is<br> available and you<br> may proceed for<br> your info<h6></a>";
    }
         //Single Rooms------------------------------------------------------------------------------------
if($radioVal == "Single-Room(A)"){
}
    else if($radioVal == "Single-Room(B)") {
    }
    else if($radioVal == "Single-Room(C)") {
    }
    else if($radioVal == "Single-Room(D)") {
    }
    else if($radioVal == "Single-Room(E)") {
    }
//Double Rooms------------------------------------------------------------------------------------
if($radioVal == "Double-Room(A)"){
}
    else if($radioVal == "Double-Room(B)") {
    }
    else if($radioVal == "Double-Room(C)") {
    }
    else if($radioVal == "Double-Room(D)") {
    }
    else if($radioVal == "Double-Room(E)") {
    }
    //Queen Rooms------------------------------------------------------------------------------------
if($radioVal == "Queen-Room(A)"){
}
    else if($radioVal == "Queen-Room(B)") {
    }
    else if($radioVal == "Queen-Room(C)") {
    }
    else if($radioVal == "Queen-Room(D)") {
    }
    else if($radioVal == "Queen-Room(E)") {
    }
//King Rooms------------------------------------------------------------------------------------
if($radioVal == "King-Room(A)"){
}
    else if($radioVal == "King-Room(B)") {
    }
    else if($radioVal == "King-Room(C)") {
    }
    else if($radioVal == "King-Room(D)") {
    }
    else if($radioVal == "King-Room(E)") {
    }
//Studio Suite------------------------------------------------------------------------------------
if($radioVal == "Studio-Suite(A)"){
}
    else if($radioVal == "Studio-Suite(B)") {
    }
    else if($radioVal == "Studio-Suite(C)") {
    }
    else if($radioVal == "Studio-Suite(D)") {
    }
    else if($radioVal == "Studio-Suite(E)") {
    }
//Master Suite------------------------------------------------------------------------------------
if($radioVal == "Master-Suite(A)"){
}
    else if($radioVal == "Master-Suite(B)") {
    }
    else if($radioVal == "Master-Suite(C)") {
    }
    else if($radioVal == "Master-Suite(D)") {
    }
    else if($radioVal == "Master-Suite(E)") {
    }
//Luxury Suite------------------------------------------------------------------------------------
if($radioVal == "Luxury-Suite(A)"){
}
    else if($radioVal == "Luxury-Suite(B)") {
    }
    else if($radioVal == "Luxury-Suite(C)") {
    }
    else if($radioVal == "Luxury-Suite(D)") {
    }
    else if($radioVal == "Luxury-Suite(E)") {
    }

// Create connection
$servername = "localhost";
$username = "root";
$password = "";    
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

$sql = "create table rooms (room varchar(100), price int)";
if ($conn->query($sql) === TRUE) {
}
    
// insert values
$sql = "insert into rooms values
        ('$radioVal','$price')";
if ($conn->query($sql) === TRUE) {
} else {
    echo "Error creating database: " . $conn->error;
}
    
$sql = "create table price (price int)";
if ($conn->query($sql) === TRUE) {
}

$sql = "select * from stays";
    $result = $conn->query($sql);
    if ($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            "Room: " . $row["stay"];
            $stays = $row["stay"];
        }
    }
    
    $resprice = $max_res * 500;
    $amount = ($stays * $price) + $resprice;
    
$sql = "create table price (price int)";
if ($conn->query($sql) === TRUE) {
}    
    
// insert values
$sql = "insert into price values
        ('$amount')";
if ($conn->query($sql) === TRUE) {
} else {
    echo "Error creating database: " . $conn->error;
}    
    $sql = "create table max_res (residents int)";
if ($conn->query($sql) === TRUE) {
} 
    
// insert values
$sql = "insert into max_res values
        ('$max_res')";
if ($conn->query($sql) === TRUE) {
} else {
    echo "Error creating database: " . $conn->error;
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