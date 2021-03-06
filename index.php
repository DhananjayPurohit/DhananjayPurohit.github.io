<?php
include 'connect.php';

$notify="";
$event="";
$sql = "SELECT Notifications, Events FROM Updates ORDER BY DateTime DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
        $notify= $notify . "<br><br>" . $row["Notifications"];
        $event= $event . "<br><br>" .$row["Events"];
    }
} else {
    echo "0 results";
}
$conn->close();

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">
    
      <link rel = "icon" type = "image/webp" href = "img/SCHEMLOGO.webp">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      
      <link rel="stylesheet" href="external/css/bootstrap.css">
    <script src="external/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="external/css/w3.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Rozha+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://fonts.googleapis.com/css?family=Vollkorn" rel="stylesheet">
    <script src="external/js/jquery-3.4.1.slim.min.js"></script>
    <script src="external/js/popper.js" ></script>
      
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
<!--    <link rel="stylesheet" href="external/css/boot.css">-->
    <!--<link rel = "stylesheet" href = "./external/css/bootstrap.min.css">-->

    
<!--    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">-->
<!--    <link rel = "stylesheet" href = "common.css">-->
<!--    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">-->
    <!--<link rel="stylesheet" href="external/css/w3.css">-->
    <!--<link rel="stylesheet" href="external/css/fontawallmin.css">-->
<!--    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">-->
    <!--<link rel="stylesheet" href="external/css/fontaw.css" >-->
<!--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
    <!--<link rel="stylesheet" href="external/css/fontawajax.css">-->
<!--    <link href="https://fonts.googleapis.com/css?family=Rozha+One" rel="stylesheet">-->
<!--    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:900" rel="stylesheet">-->
<!--    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">-->
    



<!--    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">-->

<!--  <link href="https://fonts.googleapis.com/css?family=Vollkorn" rel="stylesheet">-->



<!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>-->




    <title>School of Chemical Sciences</title>
    <style type="text/css">
    .bg-light{
      background-color: #0c2461 !important;
    }
/* 
    .imgfooter{
      width:100%;
      height : 50px;
      background-color: #0c2461;
      display:block;
      position: fixed;
      transition:0.5s;
      z-index:3;
     } */
     /* Float four columns side by side */
.column {
  float: left;
  width: 50%;
  padding: 0 10px;
}
/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}
/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.margin{
  margin : 0;
  padding : 0;
}
/* Responsive columns */
@media only screen and (max-width: 900px) {
  .column {
    width: 50%;
    display: block;
    margin-bottom: 20px;
  }
}
@media only screen and (max-width: 800px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}
/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: white;
  height:440px;
  width:100%;
  overflow: hidden;
  text-overflow: clip;
}
.qlinks{
  text-decoration  : none;
  font-size : 12px;
  display : block;
  color:white;
  opacity:0.7;
}
.qlinks a:hover{
  opacity: 1 !important;
  font-weight: bold;
  color:#0c2461;
}
 .sfqlinks a:hover {
  opacity: 1 !important;
  text-decoration: none;
}
    
.itopnav {
  overflow: hidden;
  background-color: #0c2461;
  
}
.itopnav a {
  float: left;
  display: block;
  color:#f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-weight:bold;
  font-family: 'Source Sans Pro', sans-serif;
  font-size:20px;
  opacity: 0.7;
}
.iactive {
  
  color: white;
}
.itopnav .icon {
  display: none;
}
.idropdown {
  float: left;
  overflow: hidden;
}
.idropdown .idropbtn {
  font-weight:bold;
  font-family: 'Source Sans Pro', sans-serif;
  font-size:20px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  margin: 0;
}
.idropbtn {
  opacity:0.6;
}
.idropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index:5;
}
.idropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block ;
  text-align: left;
}
.itopnav a:hover, .idropdown:hover .idropbtn {
  /*background-color: #555;*/
  color: white ;
  opacity: 1;
}
.idropdown-content a:hover {
  background-color: #ddd;
  color: black;
}
.idropdown:hover .idropdown-content {
  display: block;
}
@media screen and (max-width: 600px) {
  .itopnav a:not(:first-child), .idropdown .idropbtn {
    display: none;
  }
  .itopnav a.icon {
    float: right;
    display: block;
  }
  .itopnav.responsive {position: relative;}
  .itopnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .itopnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .itopnav.responsive .idropdown {float: none;}
  .itopnav.responsive .idropdown-content {position: relative;}
  .itopnav.responsive .idropdown .idropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
   .card{
     width:100vw; 
  }
} 
#colch:hover {
    color:white !important;
  
} 
.motionpic {
  margin: 0;
  padding: 0;
  color: #222;
  background-color: #111;
  overflow: hidden;
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 2em;
}
canvas {
  background-color: #0c2461;
}
      
/* from here       */
   @media only screen and (max-width: 1350px) {
  .pseudocont{
    display:none;
  }
}
@media only screen and (max-width: 500px) {
  .mapouter,.gmap_canvas,#gmap_canvas{
    width:350px;
  }
}
#f3{
  display:none;
}
      @media only screen and (max-width: 1000px) {
  .motionpic, #can{
    display:none;
  }
  #f3{
    font-size:3.6vw !important;
    position: absolute !important;
    right:3% !important;
  }
}
@media only screen and (max-width: 640px) {
  
  #f3{
    display:none !important;
  }
  
}
@media only screen and (max-width: 1180px) {
  
  #f1,#f2{
    display:none;
  }
  #f3{
    display:block;
    align-content: center;
  }
  
}
#s{
  position: absolute;
  top:30%;
  width : 18%;
  left:8%;
}
#text{
  font-size:2.4vw;
  position: absolute;
  top:42%;
  left:30%;
}
@media only screen and (max-width: 1180px) {
  #s{
  width:24%;
  position: absolute;
  top:5%;
  left:38%;
  
}
#text{
  font-size:3vw;
  position: absolute;
  left:15%;
  top:65%;
}
  
  
}
.explore{
  height:4%;
  width:100%;
  position: sticky;
  bottom:5px;
  background-color:#0c2461;
  color:white;
  font-size:2vw;
  font-weight: bold;
  font-family: 'Source Sans Pro', sans-serif;
  cursor:default;
}

@media only screen and (max-width: 800px) {
  .explore{
    display:none;
  }
}

a { color: white; text-decoration: none; }

.arrow {
  text-align: center;
}
.bounce {
  -moz-animation: bounce 2s infinite;
  -webkit-animation: bounce 2s infinite;
  animation: bounce 2s infinite;
}

#ex{
   height:8%;
  width:100%;
}
@keyframes bounce {
  0%, 20%, 50%, 80%, 100% {
    transform: translateY(0);
  }
  40% {
    transform: translateY(-6px);
  }
  60% {
    transform: translateY(-3px);
  }
}


/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #0c2461;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}

@media only screen and (min-width: 1200px) {
.message img{
    margin-bottom:250px;
}
}
nav ul li a{
    color:#9d9d9d;
    text-decoration:none !important;
}

nav ul li a:hover{
    color:white;
}
    </style>
  </head>
  <body style="background-color: #E9E6DF;overflow-x : hidden">
    	<div id="load"></div>
    <div id="contents">
        
    </div>
    <div class="container-fluid" style="width:100% !important; padding:0% !important; margin:0% !important; " >
      <div class="pseudocont" style=" box-shadow: 0 20px 20px 0 rgba(0, 0, 0, 1); position:fixed;
      z-index:3 !important;"  >
      <nav class="navbar navbar-inverse" id="pseudoheader" style="background-color: #0c2461; position:fixed; z-index:0 !important;width:100%; border:0px; ">
  <div class="container-fluid" id="pseudocontent" style="font-family: 'Source Sans Pro', sans-serif; font-weight:bold;font-size:18px; " >
    <div class="navbar-header" >
      <a class="navbar-brand" style="font-family: serif; font-size : 20px; color:white; font-weight:normal; padding-top:8px; " href="index.php">SCHOOL OF CHEMICAL SCIENCES</a>
    </div>
    <ul class="nav navbar-nav navbar-left" >
      <li><a href="index.php"><span style="font-size: 1.2em; color: white; ">
            <i class="fas fa-home"></i>
            </span></a></li>
    </ul>
    <ul class="nav navbar-nav navbar-left">
      <li> <a href="aboutus.php">About Us</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-left">
      <li><div class="idropdown" >
        <button class="idropbtn" id="colch" style="font-size:18px; color: #9d9d9d; opacity:1;">Staff 
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="idropdown-content">
          <a href="facultyprofile.php" target="_blank">Staff Profile</a>
          <a onclick="document.getElementById('id01').style.display='block'">Update</a>
         </div>
      </div></li>
    </ul>
    <ul class="nav navbar-nav navbar-left">
      <li><div class="idropdown" >
    <button class="idropbtn" id="colch" style="font-size:18px; color: #9d9d9d; opacity:1;">Admission 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="idropdown-content">
      <a href="http://www.dauniv.ac.in/admissions.php" target="_blank">Admission Procedure</a>
      <a href="courses.php" >Programmes</a>
      <a href="POs.php">POs, PSOs, COs</a>
     </div>
  </div>
  </li>
    </ul>
    <ul class="nav navbar-nav navbar-left">
      <li><div class="idropdown" >
    <button class="idropbtn" id="colch"   style="font-size:18px; color: #9d9d9d; opacity:1;">
      Research 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="idropdown-content" >
      <a href="https://drive.google.com/open?id=1WYIIxCGyLvN1EAmxif02OaI1jSpxHx5C" target="_blank">Lab Profile 1</a>
      <a href="https://drive.google.com/open?id=1ToNP922GnnRP4Ex9Q_8C2wLIB6OX0nxM" target="_blank">Lab Profile 2</a>
      <a href="https://drive.google.com/open?id=1n9znm1frZsMoqX2-KOdaJyFK_QhcuK2F" target="_blank">Lab Profile 3</a>
    </div>
  </div></li>
    </ul>
    <ul class="nav navbar-nav navbar-left">
      <li><a href="student.php">Students</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-left">
      <li> <div class="idropdown">
    <button class="idropbtn" id="colch"   style="font-size:18px; color: #9d9d9d; opacity:1;" >Activities 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="idropdown-content">
      <a href="activities.php">Guest Of Honour</a>
      <a href="photogallery.php" >Gallery</a>
      
      
     </div>
  </div></li>
    </ul>
    <ul class="nav navbar-nav navbar-left">
      <li><a href="http://www.iqac.dauniv.ac.in/" target="_blank">IQAC</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-left">
      <li><a href="alumni.php">Alumni</a></li>
    </ul>
    

  </div>
</nav>
</div>
<p id="f1" style="font-size:2.7vw; color:white; position:absolute;  top:30px; right:20%; z-index:5; font-family:serif; font-weight:bold; ">SCHOOL OF CHEMICAL SCIENCES
</p>
<p id="f2" style="font-size:2.7vw; color:white; position:absolute;  top:110px; right:28%; z-index:5; font-family: 'Rozha One', serif; font-weight:bold;">रसायन विज्ञान अध्ययनशाला  
</p>
<p id="f3" align="center" style="font-size:3vw; color:white; position:absolute;  top:50px; right:25%; z-index:5; font-family:serif; font-weight:bold; ">SCHOOL OF CHEMICAL<br> SCIENCES
</p>

      
     


    <nav class="" style="background-color: #0c2461; position:relative; z-index:4 !important; width:100%; padding-top:10px;margin-bottom:-23px;
    box-shadow: 0 20px 20px 0 rgba(0, 0, 0, 0.2);">
    <a href="http://www.dauniv.ac.in/">
    <div class = "schoolName" style="  border-style:solid;
      border-width: thin;
      border-color: white;
      height:160px;
      width: 150px;
      display:inline-block;
      margin-left:3%;
      margin-top:20px;
      margin-bottom:10px;
      ">
      <img src= "img/davvlogo.webp" width="100%" height="100%" >
      
     
    </div>
    </a>
    <a href="index.php">
     <div class="logopane" style="
     margin-left: 2%;
     width:150px;
     height:160px;
     border-style:solid;
     border-width: thin;
     border-color: white;
     display:inline-block;
     margin-top:20px;
     margin-bottom:10px;
     ">
       <img src="img/SCHEMLOGO.webp" height="100%" width="100%">
      
      </div></a>
      
<div class="motionpic" style = "height :220px;width : 220px;position: absolute;right:2%; top:10px; ">
        <canvas id="can" style="background-color: #0c2461;">
        </canvas>
       
      </div>
      
      <script media="screen and (max-width:1020px)">
         // particules
         var viewportWidth = $(window).width();
         if (viewportWidth > 1000)
         {
class Point {
  constructor(x, y) {
    this.pos = {
      x: x,
      y: y
    };
    this.old_pos = {
      x: x,
      y: y
    };
    this.radius = Utl.random(10,15);
    let color_id = Math.floor(Utl.random(0,colorTheme.length));
    this.color = colorTheme[color_id];
    this.target = {
      x:W/2,
      y:H/2
    };
    this.linked = false;
    this.connected_to = [];
    this.is_dragged = false;
  }
  draw() {
    ctx.fillStyle=this.color; 
    ctx.beginPath();
    ctx.arc(this.pos.x, this.pos.y, this.radius, 0, 2 * Math.PI, false);
    ctx.fill();
    ctx.closePath();
    if(Utl.distance(pointer.pos,this.pos)<this.radius){
    ctx.fillStyle=selection_color;
    ctx.beginPath();
    ctx.arc(this.pos.x, this.pos.y, this.radius-10, 0, 2 * Math.PI, false);
    ctx.fill();
    ctx.closePath();
  }
    
  }
  update() {
    let vx = (this.pos.x - this.old_pos.x) * 0.96,
    vy = (this.pos.y - this.old_pos.y) * 0.96;
    this.old_pos.x = this.pos.x;
    this.old_pos.y = this.pos.y;
    this.pos.x += vx;
    this.pos.y += vy;
    if(!this.linked){
    let angle = Utl.angleFrom(this.pos,this.target)
    this.pos.x += Math.cos(angle) * 0.2;
    this.pos.y += Math.sin(angle) * 0.2;
    }
    if(pointer.active && pointer.target === false){
      if(Utl.distance(pointer.pos,this.pos)<this.radius){
      pointer.offset.x = pointer.pos.x - this.pos.x;
      pointer.offset.y = pointer.pos.y - this.pos.y;
      this.being_dragged = true;
      pointer.target = this;
      }
    }
    if(this.being_dragged && pointer.drag){
      this.pos.x = pointer.pos.x - pointer.offset.x;
      this.pos.y = pointer.pos.y - pointer.offset.y;
    }
        if(this.pos.x + this.radius > W) {
          this.pos.x = W - this.radius;
          this.old_pos.x = this.pos.x + vx * 0.2;
        }
        else if(this.pos.x < this.radius) {
          this.pos.x = this.radius;
          this.old_pos.x = this.pos.x + vx * 0.2;
        }
        if(this.pos.y + this.radius > H) {
          this.pos.y = H - this.radius;
          this.old_pos.y = this.pos.y + vy * 0.2;
        }
        else if(this.pos.y < this.radius) {
          this.pos.y = this.radius;
          this.old_pos.y = this.pos.y + vy * 0.2;
        }
  }
}
class Stick{
  constructor(point_array,stick_array,p0,p1,min_distance){
    this.point_array = point_array;
    this.stick_array = stick_array;
    this.p0 = this.point_array[p0];
    this.p1 = this.point_array[p1];
    let distance = Utl.distance(this.p0.pos,this.p1.pos);
    this.min_distance = min_distance;
    this.length = Math.max(min_distance,distance) + Utl.random(10,80);
    this.maxLength = this.length + 100;
    this.max_link_width = Math.min(3,8);
  }
  update(){
        let dx = this.p1.pos.x - this.p0.pos.x,
        dy = this.p1.pos.y - this.p0.pos.y,
        distance = Math.sqrt(dx * dx + dy * dy);
        if(distance  > this.maxLength){
          this.p0.connected_to[this.point_array.indexOf(this.p1)] = false;
          this.p1.connected_to[this.point_array.indexOf(this.p0)] = false;
          this.stick_array.splice(this.stick_array.indexOf(this), 1);
        }
        let difference = this.length - distance,
        percent = difference / distance /60,
        offsetX = dx * percent,
        offsetY = dy * percent;
        this.p0.pos.x -= offsetX;
        this.p0.pos.y -= offsetY;
        this.p1.pos.x += offsetX;
        this.p1.pos.y += offsetY;
  }
  draw(){
    let distance = Utl.distance(this.p1.pos,this.p0.pos);
    ctx.lineWidth = Utl.map(distance,this.min_distance,this.maxLength,this.max_link_width,0);
    ctx.strokeStyle=link_color;
    ctx.beginPath();
    ctx.moveTo(this.p0.pos.x,this.p0.pos.y);
    ctx.lineTo(this.p1.pos.x,this.p1.pos.y);
    ctx.stroke();
  }
}
// synapse.js
Utl = {};
Utl.distance = function(p1, p2) {
  return Math.hypot(p1.x - p2.x, p1.y - p2.y);
};
Utl.random = function(min, max) {
  return min + Math.random() * (max - min);
};
Utl.angleFrom = function(p1,p2){
  return Math.atan2(p2.y - p1.y, p2.x - p1.x)
};
Utl.map = function(a,b,c,d,e){
  return(a-b)/(c-b)*(e-d)+d;
};
class Synapse{
  constructor(){
    this.points = [];
    this.sticks = [];
    this.number_point = 15;
    for (var i = 0; i < this.number_point; i++) {
      this.points.push(new Point(Utl.random(0,W),Utl.random(0,H)));
    }
  }
  updatePoints(){
    for (let p = this.points.length - 1; p >= 0; p--) {
      this.points[p].update();
        for (let others = this.points.length - 1; others >= 0; others--) {
          if(this.points[p] === this.points[others]) continue;
          let min_distance = this.points[p].radius + this.points[others].radius;
          if(Utl.distance(this.points[p].pos,this.points[others].pos) < min_distance){
            if(this.points[p].connected_to[others] === true) continue;
            this.sticks.push(new Stick(this.points,this.sticks,p,others,min_distance));
            this.points[p].linked = true;
            this.points[p].connected_to[others] = true;
          }
        }
    }
  }
  renderPoints() {
    for (var i = this.points.length - 1; i >= 0; i--) {
      this.points[i].draw();
    }
  }
  renderSticks(){
    for (var i = this.sticks.length - 1; i >= 0; i--) {
      this.sticks[i].draw();
    }
  }
  updateSticks(){
    for (var i = this.sticks.length - 1; i >= 0; i--) {
      this.sticks[i].update();
    }
  }
  update(){
     this.updatePoints();
     this.updateSticks();
    
  }
  draw(){
    this.renderSticks();
    this.renderPoints();
  }
}
let canvas = document.getElementById("can"),
  ctx = canvas.getContext("2d");
let W = canvas.width = 220;
    H = canvas.height = 220;
document.addEventListener("mousedown", event => pointerDown(event), false);
document.addEventListener("mouseup", event => pointerUp(event), false);
document.addEventListener("mousemove", event => pointerMove(event), false);
colorTheme = ["#3fc778","#00a383","#007dc7","#bcb7c5","#ea71bd","#e1534a","#ad3e50","#f29546","#e33247"];
selection_color = "#ffce00";
link_color = "#ffffff";
// colorTheme = ["#007dc7","#ea71bd","#64468d"];
// link_color = "#332041";
let pointer = {
  pos:{
    x:0,
    y:0
  },
  offset:{
    x:0,
    y:0
  },
  active:false,
  drag:false,
  target:false,
}
function pointerDown(event){
  pointer.active = true;
}
function pointerUp(event){
  if(!pointer.drag){
    console.log("simple clique");
  }
  if(pointer.target.being_dragged){
    pointer.target.being_dragged = false;
    pointer.target = false;
  }
  pointer.active = false;
  pointer.drag = false;
}
function pointerMove(event){
  if(pointer.active){
    pointer.drag = true;
  }
  updatePointerPosition(event);
}
function updatePointerPosition(event){
    pointer.pos.x = event.pageX - canvas.offsetLeft;
    pointer.pos.y = event.pageY - canvas.offsetTop;
}
let memory_cloud = new Synapse();
function main_loop() {
  ctx.clearRect(0,0,W,H);
  memory_cloud.update();
  memory_cloud.draw();
  requestAnimationFrame(main_loop);
}
main_loop();
         
         }
</script>


  <div class="itopnav" id="myTopnav" style="margin-left: 2%;">
  <a href="index.php" style="opacity:1;"><span style="font-size: 1.2em; color: white;  ">
            <i class="fas fa-home" ></i>
            </span></a>
    <a href="aboutus.php">About Us</a>
    <div class="idropdown">
    <button class="idropbtn" >Staff 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="idropdown-content">
      <a href="facultyprofile.php">Staff</a>
      <a onclick="document.getElementById('id01').style.display='block'" >Update</a>
     </div>
  </div>
    
  <div class="idropdown">
    <button class="idropbtn" >Admission 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="idropdown-content">
      <a href="http://www.dauniv.ac.in/admissions.php" target="_blank">Admission Procedure</a>
      <a href="courses.php" >Programmes</a>
      <a href="POs.php" >POs, PSOs, COs</a>
     </div>
  </div>
  <div class="idropdown" style="">
    <button class="idropbtn" >Research 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="idropdown-content" >
      <a href="https://drive.google.com/open?id=1WYIIxCGyLvN1EAmxif02OaI1jSpxHx5C" target="_blank">Lab Profile 1</a>
      <a href="https://drive.google.com/open?id=1ToNP922GnnRP4Ex9Q_8C2wLIB6OX0nxM" target="_blank">Lab Profile 2</a>
      <a href="https://drive.google.com/open?id=1n9znm1frZsMoqX2-KOdaJyFK_QhcuK2F" target="_blank">Lab Profile 3</a>
    </div>
  </div> 
  <a href="student.php">Students</a>
  <div class="idropdown">
    <button class="idropbtn" >Activities 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="idropdown-content">
      <a href="activities.php">Guest Of Honour</a>
      <a href="photogallery.php" >Gallery</a>
      
      
     </div>
  </div>
  <a href="http://www.iqac.dauniv.ac.in/" target="_blank">IQAC</a>
  <a href="alumni.php">Alumni</a>
  
  <a href="javascript:void(0);" style="font-size:25px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
</nav>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "itopnav") {
    x.className += " responsive";
  } else {
    x.className = "itopnav";
  }
}
  
  
  
</script>
      
 
<!--    to here    -->
<!-- <marquee style="margin-top:20px;"><i class="fas fa-vial" style = "color :#800000;font-size : 20px;margin-right : 5px;"></i> <font id = "marquee" style = "font-size : 25px;font-family: serif; color :#800000;"><b>SCHOOL OF CHEMICAL SCIENCES WELCOMES YOU!!!</b></font><i class="fas fa-vial" style = "color :#800000;font-size : 20px;margin-left : 5px;"></i></marquee> -->
<br>


    <script src="external/js/jssor.slider-27.5.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jssor_1_slider_init = function() {
            var jssor_1_SlideoTransitions = [
              [{b:0,d:600,y:-290,e:{y:27}}],
              [{b:0,d:1000,y:185},{b:1000,d:500,o:-1},{b:1500,d:500,o:1},{b:2000,d:1500,r:360},{b:3500,d:1000,rX:30},{b:4500,d:500,rX:-30},{b:5000,d:1000,rY:30},{b:6000,d:500,rY:-30},{b:6500,d:500,sX:1},{b:7000,d:500,sX:-1},{b:7500,d:500,sY:1},{b:8000,d:500,sY:-1},{b:8500,d:500,kX:30},{b:9000,d:500,kX:-30},{b:9500,d:500,kY:30},{b:10000,d:500,kY:-30},{b:10500,d:500,c:{x:125.00,t:-125.00}},{b:11000,d:500,c:{x:-125.00,t:125.00}}],
              [{b:0,d:600,x:535,e:{x:27}}],
              [{b:-1,d:1,o:-1},{b:0,d:600,o:1,e:{o:5}}],
              [{b:-1,d:1,c:{x:250.0,t:-250.0}},{b:0,d:800,c:{x:-250.0,t:250.0},e:{c:{x:7,t:7}}}],
              [{b:-1,d:1,o:-1},{b:0,d:600,x:-570,o:1,e:{x:6}}],
              [{b:-1,d:1,o:-1,r:-180},{b:0,d:800,o:1,r:180,e:{r:7}}],
              [{b:0,d:1000,y:80,e:{y:24}},{b:1000,d:1100,x:570,y:170,o:-1,r:30,sX:9,sY:9,e:{x:2,y:6,r:1,sX:5,sY:5}}],
              [{b:2000,d:600,rY:30}],
              [{b:0,d:500,x:-105},{b:500,d:500,x:230},{b:1000,d:500,y:-120},{b:1500,d:500,x:-70,y:120},{b:2600,d:500,y:-80},{b:3100,d:900,y:160,e:{y:24}}],
              [{b:0,d:1000,o:-0.4,rX:2,rY:1},{b:1000,d:1000,rY:1},{b:2000,d:1000,rX:-1},{b:3000,d:1000,rY:-1},{b:4000,d:1000,o:0.4,rX:-1,rY:-1}]
            ];
            var jssor_1_options = {
              $AutoPlay: 1,
              $Idle: 2000,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions,
                $Breaks: [
                  [{d:2000,b:1000}]
                ]
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            /*#region responsive code begin*/
            var MAX_WIDTH = 1520;
            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;
                if (containerWidth) {
                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);
                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
    <link href="//fonts.googleapis.com/css?family=Oswald:200,300,regular,500,600,700&subset=latin-ext,vietnamese,latin,cyrillic" rel="stylesheet" type="text/css" />
    <style>
        /*jssor slider loading skin spin css*/
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }
        @keyframes jssorl-009-spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
        /*jssor slider bullet skin 052 css*/
        .jssorb052 .i {position:absolute;cursor:pointer;}
        .jssorb052 .i .b {fill:#000;fill-opacity:0.3;}
        .jssorb052 .i:hover .b {fill-opacity:.7;}
        .jssorb052 .iav .b {fill-opacity: 1;}
        .jssorb052 .i.idn {opacity:.3;}
        /*jssor slider arrow skin 053 css*/
        .jssora053 {display:block;position:absolute;cursor:pointer;}
        .jssora053 .a {fill:none;stroke:#fff;stroke-width:640;stroke-miterlimit:10;}
        .jssora053:hover {opacity:.8;}
        .jssora053.jssora053dn {opacity:.5;}
        .jssora053.jssora053ds {opacity:.3;pointer-events:none;}
    </style>
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1240px;height:540px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1240px;height:540px;overflow:hidden;">
            <div>
                <img data-u="image" src="img/SCHOOL.webp" />
                 <div data-ts="flat" data-p="1360" style="position:absolute;top:0px;left:-900px;width:980px;height:380px;">
                    <div data-t="2" style="position:absolute;top:30px;left:900px;width:500px;height:40px;font-family: 'Source Sans Pro', sans-serif;font-size:24px;font-weight:200;line-height:1.2;text-align:center;background-color:rgba(12,36,97,0.8); transition:6s; color:white;
                    font-weight:bold;">School Of Chemical Sciences Welcomes You</div>
                </div>
            </div>
                <!-- <div data-t="0" style="position:absolute;top:320px;left:30px;width:700px;height:50px;font-family: 'Source Sans Pro', sans-serif;font-size:32px;line-height:1.2;text-align:center;background-color:rgba(12,36,97,0.6); font-weight:bold;
                color:white;"><marquee scrolldelay="1" direction="right">School Of Chemical Sciences Welcomes You</marquee></div>
            </div> -->
            <div>
                <img data-u="image" src="img/LAB.webp" />
                <div data-ts="flat" data-p="1360" style="position:absolute;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
                    <!-- <div data-t="1" style="position:absolute;top:-50px;left:125px;width:500px;height:40px;font-family: 'Source Sans Pro', sans-serif;font-size:32px;font-weight:200;line-height:1.2;text-align:center;background-color:rgba(40,177,255,0.6);">Laboratory</div> -->
                </div>
            </div>
            <div>
                <img data-u="image" src="img/Ujla_Daswani.webp" />
<!--                 <div data-ts="flat" data-p="1360" style="position:absolute;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
                    <div data-t="10" style="position:absolute;top:150px;left:50px; width:300px;height:260px;font-family: 'Source Sans Pro', sans-serif;font-size:24px;font-weight:200;line-height:1.25;padding:15px 15px 15px 15px;box-sizing:border-box;background-color:rgba(40,177,255,0.5);background-clip:padding-box">
                                           <b>Ms. Ujla Daswani receiving<br>​
                                                    National Award in<br />
                                                    105th Indian Science Congress</b>
                        <br />​<br />
                         <a href="Ujla synopsis.docx" style="color:white;">
                            Read More...
                        </a> 
                       
                    </div>
                </div> -->
      <div data-t="0" style="position:absolute;top:750px;left:0px;width:100%;height:50px;font-family: 'Source Sans Pro', sans-serif;font-size:20px;line-height:2.2;text-align:center;background-color:rgba(12,36,97,0.6); font-weight:bold;
                color:white;">Ms. Ujla Daswani receiving National ISCA Award 2018</div>
                <!-- <div data-ts="flat" data-p="1360" style="position:absolute;top:0px;left:0px;width:980px;height:380px;">
                    <div data-t="2" style="position:absolute;top:30px;left:-505px;width:500px;height:40px;font-family:Oswald,sans-serif;font-size:32px;font-weight:200;line-height:1.2;text-align:center;background-color:rgba(255,188,5,0.8);">Our Teaching Staff</div>
                </div> -->
            </div>
            <div>
                <img data-u="image" src="img/Gagandeep_Kaureen.webp" />
<!--                 <div data-ts="flat" data-p="1360" style="position:absolute;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
                    <div data-t="10" style="position:absolute;top:150px;left:50px; width:300px;height:260px;font-family: 'Source Sans Pro', sans-serif;font-size:24px;font-weight:200;line-height:1.25;padding:15px 15px 15px 15px;box-sizing:border-box;background-color:rgba(40,177,255,0.5);background-clip:padding-box"><b>Ms. Gagandeep Kaureen receiving<br />​
                                                    State Award in<br />
                                                    32nd M.P. Young Scientist Congress</b>
                        <br />​<br />
                        <a href="Ujla synopsis.docx" style="color:white;">
                            Read More...
                        </a> 
                       
                    </div>
                </div> -->
                <!-- <div data-t="3" style="position:absolute;top:30px;left:30px;width:500px;height:40px;font-family:Oswald,sans-serif;font-size:32px;font-weight:200;line-height:1.2;text-align:center;background-color:rgba(255,188,5,0.8);">responsive, scale smoothly</div> -->
        <div data-t="0" style="position:absolute;top:750px;left:0px;width:100%;height:50px;font-family: 'Source Sans Pro', sans-serif;font-size:20px;line-height:2.2;text-align:center;background-color:rgba(12,36,97,0.6); font-weight:bold;
                color:white;">Ms. Gagandeep Kaureen receiving State Award in 32nd M.P. Young Scientist Congress</div>
            </div>
          
           <div>
                <img data-u="image" src="img/goodimg.webp" />
       
    </div>
    <div>
                   <img data-u="image" src="img/sliderimg.webp" />
    </div>
    <div>
       <img data-u="image" src="img/A3.webp" /> 
    </div>
    <div>
                      <img data-u="image" src="img/davvimg.webp" />
             
               
              
            </div>
            <!-- <div>
                <img data-u="image" src=".jpg" />
                <div data-t="4" style="position:absolute;top:30px;left:30px;width:500px;height:40px;font-family:Oswald,sans-serif;font-size:32px;font-weight:200;line-height:1.2;text-align:center;background-color:rgba(255,188,5,0.8);">image, text, and custom layers</div>
            </div>
            <div>
                <img data-u="image" src="img/006.jpg" />
                <div data-t="5" style="position:absolute;top:30px;left:600px;width:500px;height:40px;font-family:Oswald,sans-serif;font-size:32px;font-weight:200;line-height:1.2;text-align:center;background-color:rgba(255,188,5,0.8);">tons of transition type</div>
            </div>
            <div>
                <img data-u="image" src="img/007.jpg" />
                <div data-t="6" style="position:absolute;top:30px;left:30px;width:500px;height:40px;font-family:Oswald,sans-serif;font-size:32px;font-weight:200;line-height:1.2;text-align:center;background-color:rgba(255,188,5,0.8);">visual slider maker</div>
            </div>
            <div data-b="0">
                <img data-u="image" src="img/008.jpg" />
                <div data-t="7" style="position:absolute;top:-50px;left:30px;width:500px;height:40px;font-family:Oswald,sans-serif;font-size:32px;font-weight:200;line-height:1.2;text-align:center;background-color:rgba(255,188,5,0.8);">play in and play out</div>
            </div>
            <div>
                <img data-u="image" src="img/009.jpg" />
                <div data-ts="flat" data-p="1360" style="position:absolute;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
                    <div data-t="8" data-ts="preserve-3d" style="position:absolute;top:25px;left:150px;width:250px;height:250px;overflow:hidden;background-color:rgba(40,177,255,0.6);">
                        <div data-t="9" style="position:absolute;top:100px;left:25px;width:200px;height:50px;font-family:Oswald,sans-serif;font-size:24px;font-weight:200;line-height:2.08;">A Child Layer</div>
                    </div>
                </div>
            </div>
            <div>
                <img data-u="image" src="img/010.jpg" />
                <div data-ts="flat" data-p="1360" style="position:absolute;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
                    <div data-t="10" style="position:absolute;top:25px;left:100px;width:300px;height:260px;font-family:Oswald,sans-serif;font-size:24px;font-weight:200;line-height:1.25;padding:15px 15px 15px 15px;box-sizing:border-box;background-color:rgba(40,177,255,0.6);background-clip:padding-box">This is full customized content layer.<br />​<br />
                        Everything is allowed.<br />​<br />You can insert
                        <a href="http://wwww.jssor.com">
                            a link
                        </a> or an image
                        <img src="img/icon_chrome.png" /> here.
                    </div>
                </div>
            </div> -->
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb052" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:16px;height:16px;">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                </svg>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora053" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora053" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
            </svg>
        </div>
    </div>
    <script type="text/javascript">jssor_1_slider_init();</script>
    <!-- #endregion Jssor Slider End -->
    
    <div id="id01" class="modal" style="z-index:10;">
  
      <form class="modal-content animate" action="Login.php" method="post">
        <div class="imgcontainer">
          <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
          <!-- <img src="img_avatar2.png" alt="Avatar" class="avatar"> -->
        </div>
    
        <div class="container">
          <label for="uname"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="username" required>
    
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="password" required>
            
          <button type="submit">Login</button>
          <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
          </label>
        </div>
    
        <!--<div class="container" style="background-color:#f1f1f1">-->
        <!--    <label>-->
        <!--        <b>Update</b><br><br>-->
        <!--    <input type="radio" name="updateopt" value="Notify" checked> Notifications & Events<br>-->
        <!--    <input type="radio" name="updateopt" value="Alumni"> Alumni<br>-->
        <!--    <input type="radio" name="updateopt" value="GOH"> Guest of Honour-->
        <!--    </label>-->
        <!--  <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn" style="float:right;">Cancel</button>-->
          <!-- <span class="psw">Forgot <a href="#">password?</a></span> -->
        <!--</div>-->
      </form>
    </div>

    <script>
      // Get the modal
      var modal = document.getElementById('id01');
      
      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
          if (event.target == modal) {
              modal.style.display = "none";
          }
      }
      </script>
      

<div class = "message" style = "margin-top : 0px; background-color: white; margin:5%; padding:2%; padding-bottom:20px;">

  <h2 style="font-family: 'Source Sans Pro', sans-serif; text-align : center; color:#1e3799"><b> Message From Head </b></h2>


<img src = "img/HOD1.webp" class="img-fluid" style = "width :45%; height : auto; display : inline;float : left;margin-right : 1%;margin-top : 28px;margin-left : 1%;border : solid 2px ;max-height:500px; ">



<div class="MOH">
  <p align="justify" style = "font-size : 15.9px;font-family: 'Vollkorn', serif;color:#1e3799;font-weight: 1000; ">
       <br>Dear Friends!
    <br>
    Welcome to the website for School of Chemical Sciences, Devi Ahilya Vishwavidyalaya, Indore.
    <br>
    
    The School of Chemical Sciences is on a fascinating path of growth and development.
    Since its establishment in 1972, it has risen to become one of the premier institutions
    for scientific research across the country. It has gone to outreach and fetch scholars
    from all over the country to enrich its faculty strength and quality. It has impressive
    facilities to inculcate an atmosphere conducive for high quality research and teaching pedagogy.
    It excels in providing the best quality post-graduate courses in Chemistry with a flexibility
    to meet the current dynamic scenario. It provides students with M.Sc. in Chemistry, M.Sc. in
    Pharmaceutical Chemistry and Ph.D. in Chemistry. Its newly designed curriculum is based on the
    principle of more hands on experience with strong fundamentals offering more choices to the students
    and imbibing social and national commitments in them. This department has helped students reach a pinnacle
    in their carreers, such as leading positions in Pharma companies, NET/GATE qualifications, prestigious ISCA
    Young Scientist Awards, D.S. Kothari Fellowship, S.P.M. Fellowship and other National / State Awards.
    The department has been supported by the SAP-DRS-Phase I status provided by the UGC along with a grant of Rs.
    126 lakhs for a period of 2017-2021. At the School of Chemical Sciences, we aim to become a leader of the premier institutes that provide world class research. And hence, we together at large aim to fulfil our motto- 
    
    
    <div style="margin-left:47%;">
    <font style="font-family: 'Hind', sans-serif; font-weight:bold;margin-left:0%;color:#1e3799">धियो योनः प्रचोदयात् |</font>
    <br>
    <font  style = "font-size : 16px;  font-family: 'Source Sans Pro', sans-serif; font-weight:bold;color:#1e3799; ">
    (Deploy out intellect on the right path).
    </font>
  </div>
  <br><br>
    <font  style = "font-size : 18px; font-family: 'Source Sans Pro', sans-serif; font-weight:bold; float:right; margin-bottom:20px;color:#1e3799">
    Prof. Ashok Kumar
    <br>
  </font>
  <br>
  </p>

</div>
</div>

<div class="container">
<div class="row" style="padding-bottom:30px;">
  <div class="column">
    <div class="card" >
      <center><span style="font-size: 1.5em;">
        <i class="fas fa-bell"></i>
        <font  style="font-size:24px; font-family: 'Source Sans Pro', sans-serif; font-weight:bold;">Notifications</font>
        <hr size="100">
      </span></center>
      <marquee  scrollamount="2" direction="up" loop="true">
 <font style="font-family: 'Source Sans Pro', sans-serif; font-size:20px; font-weight:bold;"><?php echo $notify; ?></font></marquee>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <center><span style="font-size: 1.5em;">
        <i class="fas fa-calendar-check"></i>
        <font  style="font-size:24px; font-family: 'Source Sans Pro', sans-serif; font-weight:bold;">Events</font>
         <hr size="100">
      </span>
     </center>
     <marquee  scrollamount="2" direction="up" loop="true">
 <font style="font-family: 'Source Sans Pro', sans-serif; font-size:20px; font-weight:bold;"><?php echo $event; ?></font></marquee>
    </div>
  </div>  
</div>
</div>



<div class = "container-fluid margin" id="c1" style = "width : 100%;position: relative;">
<img src = "newImg/bgimg.webp"  style = "height: auto; width : 100%;max-height : 700px;filter:blur(3px);">

  <img src = '' id = "s" style = "border-radius: 100%;height : auto; max-height : 310px;box-shadow: 0 12px 15px 0 rgba(1, 1, 1, 1), 0 0 15px 10px rgba(1, 1, 1, 1);"> 
  <!-- h4 id = "text"style = "margin-bottom : 17px;color :#fff;">"Nothing in life is to feared, it is only to be understood. Now is the time to understand </h4> -->

<h2 id = "text" style = "margin-bottom : 17px;color :#fff;width : 70%;"></h2>
<!-- <h4 style = "color : #fff;">more, so that we may fear less" - Marie Curie</h4> -->

  </div>

</div>
 <script>
  
var s = document.getElementById("s");
var text = document.getElementById("text");
var name = document.getElementById("name");
var random = Math.floor(Math.random() * 5) + 1;
if(random === 1)
{
s.src = "newImg/marie_curie.webp";
text.innerHTML =  ' "Nothing in life is to be feared, it is only to be understood. Now it \n \nis the time to understand more, so that we may fear less" '
name.innerHTML = "-Marie Curie"
}
if(random === 2){
  s.src = "newImg/hawking.webp" 
  text.innerHTML = "However difficult life may seem, there is always something you can do and succeed at. It matters that you don't give up. - Stephen Hawking"
}
if(random === 3){
  s.src = "newImg/maxwell.webp" 
  text.innerHTML = "In science, it is when we take some interest in the great discoveries and their lives that it become endurable,and only when we begin to trace the development of ideas that it becomes fascinating. - James Clerk Maxwell"
}
if(random === 4){
  s.src = "newImg/einstein.webp"
  text.innerHTML = "Everybody is a genius. But if you judge a fish by its ability to climb a tree, it will live its whole life believing that it is stupid. - Albert Einstein" 
}
if(random === 5){
  s.src = "newImg/newton.webp"
  text.innerHTML = "If I have seen further than others, it is by standing on the shoulders of the giants.- Sir Isaac Newton"
}
console.log(random);
</script>

 <div class="explore arrow bounce" id="ex" onClick = "exploreD()"><center>Explore More
  <a class="fa fa-arrow-down fa-1x" href="#"></a>
</center>
 </div> 
 <script>
function exploreD(){
  window.scrollBy(0, 500); // Scroll 100px downwards
}
</script>
<div class="smallfooter" style="background-color:#0c2461 !important; display:block; font-family: 'Source Sans Pro', sans-serif; margin-top: 0px; ">

  

   <div class="col-md-3" style="float:left; background-color:inherit; min-height: 500px; " >
        <a href="index.html">
        <div class = "schoolName" style="  border-style:solid;
          border-width: thin;
          border-color: white;
          height:140px;
          width:140px;
          margin-left:5%;
          margin-top:10px;">
         <img src="img/SCHEMLOGO.webp" height="138px" width="138px">
        </div>
      </a>
      <div class="sfqlinks" style="color:white !important;"  >
      <ul style=" list-style-type: none; color:white !important; text-decoration:none; font-size:18px;">
        <li style="margin-top:30px;" >
        <a style="color:white !important; font-weight:bold; opacity:0.6;" href="http://www.dauniv.ac.in/">DAVV</a>
        </li>
        <li style="margin-top:15px;" >
        <a style="color:white !important; font-weight:bold; opacity:0.6;"href="aboutus.php">About Us</a>
        </li>
        <li style="margin-top:15px;" >
        <a style="color:white !important; font-weight:bold; opacity:0.6;" href="https://maps.google.com/?cid=6646430206762351224">Campus Map</a>
        </li>
        <li style="margin-top:15px;" >
        <a style="color:white !important; font-weight:bold; opacity:0.6;" href="aboutdev.php">About Developers</a>
        </li>

      </ul>
    </div>
  </div>
    <div class="col-md-4" style="float:left; background-color:inherit; min-height: 500px;  " >
    <div class = "contact" >
      <br>
          <a style = " color : white; font-size : 22px; "><b>Contact Us</b></a>
          
          <p style = "color : white; font-size : 18px; font-weight:500; opacity:0.7;">
            <span style="font-size: 1.2em; color: white; opacity:1;">
          <i class="fas fa-map-marker-alt"></i>
        </span>School of Chemical Sciences, <br>
            Devi Ahilya Vishwavidyalaya,<br>Takshashila Campus,<br>Khandwa Road,<br>Indore (M.P.)-452001,India<br><br>
            <span style="font-size: 1.2em; color: white; opacity:1;">
            <i class="fas fa-phone"></i>
            </span>Contact No. - 0731-2460208 <br><br>
            <span style="font-size: 1.2em; color: white; opacity:1;">
            <i class="fas fa-envelope"></i>
            </span>Email ID: drashoksharma2001@yahoo.com<br><br>
          &copy; 2019 School Of Chemical Sciences</p>
       </div> 
      
    </div>
      
   

   <div class="col-md-5" style="float:left;  padding:2%; background-color:inherit; min-height: 500px; " >
    <div class="mapouter" style="outline:solid 20px white; margin-top:30px; margin-bottom:10px;"><div class="gmap_canvas"><iframe style="width:100%;" height="350" id="gmap_canvas" src="https://maps.google.com/maps?q=School%20of%20chemical%20sciences%2CDAVV%2C%20KHANDWA%20ROAD&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.pureblack.de/webdesign-muenster/"></a></div>
    <style>.mapouter{text-align:right;height:350px;width:90%;}.gmap_canvas {overflow:hidden;background:none!important;height:350px;width:100%;}
    </style></div>

</div>

</div>

      


  </body>
    
    
</html>