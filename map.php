<?php
session_start();
include('traccarApi-1.1.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Traccar UI PHP</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Style the body */
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

/* Header/logo Title */
.header {
  padding: 5px;
  text-align: center;
  background: #7d79ff;
  color: white;
}

/* Increase the font size of the heading */
.header h1 {
  font-size: 20px;
}

/* Sticky navbar - toggles between relative and fixed, depending on the scroll position. It is positioned relative until a given offset position is met in the viewport - then it "sticks" in place (like position:fixed). The sticky value is not supported in IE or Edge 15 and earlier versions. However, for these versions the navbar will inherit default position */
.navbar {
  overflow: hidden;
  background-color: #C0C0C0;
  position: sticky;
  position: -webkit-sticky;
  top: 0;
}

/* Style the navigation bar links */
.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}


/* Right-aligned link */
.navbar a.right {
  float: right;
}

/* Change color on hover */
.navbar a:hover {
  background-color: #ddd;
  color: black;
}

/* Active/current link */
.navbar a.active {
  background-color: #666;
  color: white;
}

/* Column container */
.row {  
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
  -ms-flex: 15%; /* IE10 */
  flex: 15%;
  background-color: #f0efef;
  padding: 20px;
}

/* Main column */
.main {   
  -ms-flex: 85%; /* IE10 */
  flex: 85%;
  background-color: white;
  padding: 20px;
}

/* Fake image, just for this example */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Footer */
.footer {
  padding: 10px;
  text-align: center;
  background: #cfccf2;
}

/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width: 100%;
  }
}
</style>
</head>
<body>

<div class="header">
  <h1>Traccar UI PHP by www.gpsguru.in</h1>
</div>

<div class="navbar">
  <a href="map.php" class="active">Home</a>
  <a href="map.php">Map</a>
 <!-- <a href="login.php" class="right">Login</a>
  <a href="signup.php" class="right">Signup</a> //-->
  <a href="logoutDo.php" class="right">Logout</a>
</div>

<div class="row">
  
  <div class="side">
    <h2>Devices</h2>

    <div class="fakeimg" style="height:60px;">Device</div><br>
    
  </div>
  
  <div class="main">
    <h2>Map</h2>
   
    <div class="fakeimg" style="height:200px;">Map</div><br>	
    <div class="fakeimg" style="height:200px;">Graph</div>
    
  </div>
</div>

<div class="footer">
  <h2>Copyright - www.gpsguru.in - 2019</h2>
</div>

</body>
</html>