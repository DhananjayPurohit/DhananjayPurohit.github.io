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

    <title>School of Chemical Sciences</title>
  <style type="text/css">
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
  color: white;
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
		html {
  scroll-behavior: smooth;
}
body {
  margin: 0;
 
  font-family: 'Source Sans Pro', sans-serif !important;
  
  /* this breaks position sticky in Firefox */
  /* overflow-x: hidden; */
}
header {
  grid-column: 1 / 3;
  background: #455A64;
  color: white;
  padding: 4rem;
  text-align: center;
}
.sidesec {
  white-space: nowrap !important;
  background: #0c2461;
}
.sidesec ul {
  list-style: none !important;
  margin: 0;
  padding: 0;
  font-weight:510;
  font-size: 18px;
}
/* Only stick if you can fit */
@media (min-height: 300px) {
  .sidesec ul {
    position: sticky  !important;
    top: 300px;;
  }
}
.sidesec ul li a {
  display: block !important;
  padding: 0.5rem 1rem;
  color: white;
  text-decoration: none;
}
.sidesec ul li a.current {
  background: black;
}
main {
  padding-bottom: 10rem;
}
section {
  padding: 2rem;
  margin: 0 0 2rem 0;
}
footer {
  grid-column: 1 / 3;
  background: #607D8B;
  padding: 5rem 1rem;
}
h1,h3,h4{
  text-align: center !important;
  color:#0c2461;
  font-weight:510;
}

p{
  text-align: justify;
  
}

section {
    font-size:20px;
}

 @media only screen and (max-width: 600px) {
  .sidesec{
    width:0%;
  }
  section {
      display:block;
      width:100%;
  }
  .oframe {
      display:block !important;
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
	<script type="text/javascript">
		let mainNavLinks = document.querySelectorAll("nav ul li a");
let mainSections = document.querySelectorAll("main section");

let lastId;
let cur = [];

// This should probably be throttled.
// Especially because it triggers during smooth scrolling.
// https://lodash.com/docs/4.17.10#throttle
// You could do like...
// window.addEventListener("scroll", () => {
//    _.throttle(doThatStuff, 100);
// });
// Only not doing it here to keep this Pen dependency-free.

window.addEventListener("scroll", event => {
  let fromTop = window.scrollY;

  mainNavLinks.forEach(link => {
    let section = document.querySelector(link.hash);

    if (
      section.offsetTop <= fromTop &&
      section.offsetTop + section.offsetHeight > fromTop
    ) {
      link.classList.add("current");
    } else {
      link.classList.remove("current");
    }
  });
});
	</script>
</head>
<body>
    <div id="load"></div>
    <div id="contents">
        
    </div>
    <div class="container-fluid" style="width:100% !important; padding:0% !important; margin:0% !important; " >
      <div class="pseudocont" style=" box-shadow: 0 20px 20px 0 rgba(0, 0, 0, 1); position:fixed;
      z-index:3 !important;"  >
      <nav class="navbar navbar-inverse" id="pseudoheader" style="background-color: #0c2461; position:fixed; z-index:0 !important;width:100%; border:0px;">
  <div class="container-fluid" id="pseudocontent" style="font-family: 'Source Sans Pro', sans-serif; font-weight:bold;font-size:18px;" >
    <div class="navbar-header" >
      <a class="navbar-brand" style="font-family: serif; font-size : 20px; color:white; font-weight:normal; padding-top:8px; " href="index.php">SCHOOL OF CHEMICAL SCIENCES</a>
    </div>
    <ul class="nav navbar-nav navbar-left">
      <li><a href="index.php"><span style="font-size: 1.2em; color: #9d9d9d; ">
            <i class="fas fa-home"></i>
            </span></a></li>
    </ul>
    <ul class="nav navbar-nav navbar-left">
      <li> <a href="aboutus.php" >About Us</a></li>
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
    <button class="idropbtn" id="colch" style="font-size:18px; color: white; opacity:1;">Admission 
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
    <button class="idropbtn" id="colch" style="font-size:18px; color: #9d9d9d; opacity:1;" >Activities 
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
  <a href="index.php" ><span style="font-size: 1.2em; color: white;  ">
            <i class="fas fa-home" ></i>
            </span></a>
    <a href="aboutus.php" >About Us</a>
    <div class="idropdown">
    <button class="idropbtn"  >Staff 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="idropdown-content">
      <a href="facultyprofile.php">Staff</a>
      <a onclick="document.getElementById('id01').style.display='block'" >Update</a>
     </div>
  </div>
    
  <div class="idropdown">
    <button class="idropbtn" style="opacity:1;">Admission 
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
</div>

<!-- <header>
  <h3>DEVI AHILYA   VISHWAVIDYALAYA</h3>
  <h2></h2>
</header> -->
<div class="oframe" style=" display: grid ; grid-template-columns: min-content 1fr !important; font-weight:bold;">
<nav class="sidesec">
  <ul>
    <li><a href="#section-1">Creative Learning</a></li>
    <li><a href="#section-2">Programme Outcomes</a></li>
    <li><a href="#section-3">Programme Specific Outcomes</a></li>
    <li><a href="#section-4">Course Outcomes</a></li>
    
  </ul>
</nav>

<main>
  <section id="section-1">

    <h1>Creative Learning</h1>
    <p>School of Chemical Sciences is one of the premier centres of higher education in central India. As an acclaimed and leading science centre for academic excellence, school’s mission is to provide world class education and training for high flying careers in chemical sciences. As science and technology move faster and faster, globally it becomes more and more important for Indian institutions to make their presence on the international arena. To prepare academicians and trained chemist scientists for highly professional and top positions in drug and pharmaceutical industries, environmental and scientific organizations, school is running following programmes:</p>
    <ul>
    	<li>M.Sc. Chemistry</li>
    	<li>M.Sc. Pharmaceutical Chemistry</li>
    	<li>Ph.D.</li>
    </ul>
  </section>
  <section id="section-2">
    <h1>Programme Outcomes (POs)</h1>
    <p>Learning objectives of School of Chemical Sciences essentially focus on ‘Creative Learning’ of the students with a view to empower them with contemporary knowledge domain so as to enhance connectivity thereof towards academic and industrial institutions.<br>
    	<br>
    Programme outcomes basically aim at incorporation of chemical sciences in the mindset of students in an embedded state. With such association, students are expected to improve their critical thinking, accommodating both logical and intuitive approaches. With immense association of scientific approaches, new ideas may creep in the mind of students so that they can evolve innovative pathways. Standards and achievements are impressive for both taught courses and research.<br>
<br>
    Our distinguishing features are:
    <ul>
    	<li>Up-to-date knowledge of broad range of disciplines of chemical sciences</li>
    	<li>Theoretical and practical knowledge of Instrumental Techniques</li>
    	<li>Interpretation of various types of spectra viz., Nuclear Magnetic Resonance (NMR) , Electron Spin Resonance (ESR), Infrared (IR), Ultraviolet-Visible (UV-Visible),         MÖssbauer, XPS, and Mass.</li>
    </ul>
    </p>
  </section>
  <section id="section-3">
    <h1>Programme Specific Outcomes (PSOs)</h1>
    <p>Programme specific outcomes pertain to exploration of knowledge of chemical sciences with related disciplines.  A student of School of Chemical Sciences after acquiring Master of Science degree will be able to:
    	<ol>
    		<li> accelerate his/her thinking skills with the sound objective of problem solving at the         forefront, on the basis of exposure to the curriculum based knowledge of chemical         sciences.</li><br>
    		<li>display greater respect to the cause –effect relationship which eventually creates new         avenues and designs innovative pathways.</li><br>
    		<li>integrate creative learning in his/her day-to-day activities with the needed          confidence to embrace challenges.</li><br>
    		<li> demonstrate broad mindedness with respect to knowledge penetration vis-a-vis         knowledge accumulation in his /her professional activities.</li><br>
    		<li>explore global level research opportunities for doctoral and post-doctoral studies.</li>
    		<li> avail the benefit of enormous job avenues in different domains such as –        academics,         pharmaceutical industries, analytical laboratories, scientific organizations,         entrepreneurship, administrative positions etc.</li><br>
    		<li>display their true potential and get appropriate endorsement through qualifying         NET/GATE/SET/State Civil Services and other competitive examinations.</li><br>
    		<li> avail the opportunity to explore the  knowledge of chemical sciences with related         disciplines, in particular knowledge of synthetic methods, knowledge and         application of analytical techniques with specific orientation towards  industries.</li>

    	</ol>
    </p>
  </section>
  <section id="section-4">
    <h1>Course Outcomes (COs)</h1>
    <p>Course outcomes essentially envision diverse aspects of chemical sciences. They provide due priority to classification mindset rather than compartmentalization mindset and interdependence of one segment over the other. Consequently, students orient themselves as pro-active learners thereby enhancing their problem- solving skills, rendering high priority on modern areas of chemical sciences including spectroscopic techniques, chromatographic techniques and medicinal chemistry. Spectral interpretation indeed is a unique practice prevalent in School of Chemical Sciences. Students are encouraged to adopt GREEN CHEMISTRY whenever possible with a sound objective of ensuring environmentally sustainable approach towards society.
    	<h3>(I) For M.Sc. Programs</h3>
        <h4>INORGANIC CHEMISTRY I & II</h4>
    Students after studying inorganic chemistry courses are expected:
  <ol>
  	<li>to understand the shapes of the d orbitals and formation of delta bond, metal-metal         quadruple and quintiple bonds.</li>
  	<li>to learn various theories of chemical bonding and there importance and applications.</li>
  	<li>to understand unsuspected structural principles and growing need of molecular bond         theory to cope with unusaul stoichiometries of Boranes and its compounds.</li>
  	<li>to let the students learn, working with anhydrous solvents.</li>
</ol>
<br>
<h4>ORGANIC CHEMISTRY I & II</h4>
    Students after studying these areas of knowledge are expected:
  <ol>
  	<li>to build a sound perception of a wide variety of chemical reactions of organic         compounds so as to build a natural relationship with instant and effective         connectivity.</li>
  	<li>to contribute meaningfully towards research and development domain of various         organizations including pharmaceutical industries through carrying forward the          insight generated through academic practices prevalent in school of chemical         sciences.</li>
  	<li>to envision teaching as an attractive profession so that students after completing their         education in this school , become active knowledge facilitators promoting teaching as         rhythmic and enjoyable activity thereby enhancing the interest of further generations.
</li>
</ol>
<br>
<h4>PHYSICAL CHEMISTRY I& II</h4>
    Students after studying physical chemistry courses are expected:
  <ol>
  	<li>to recognize the interplay of various physical chemistry concepts so that problem         solving skills are promoted.</li>
  	<li>to enrich various concepts such as those from quantum chemistry, electrochemistry,         thermodynamics, chemical kinetics etc.</li>
  	</ol>
  	<br>
  	<h4>GROUP THEORY AND SPECTROSCOPY</h4>
    This course aims at helping the students to become acquainted with the basic concepts of Group Theory and Spectroscopy.  After studying this course the student will be able:
  <ol>
  	<li>to learn a systematic treatment of symmetry in chemical systems within the         mathematical framework.</li>
  	<li>to get considerable insight into many of chemical and physical applications of group         theory.</li>
  	<li> to develop acquisition of a theoretical framework considering background knowledge          of spectroscopy.</li>
  	<li> to  emphasise practical applications of point group theory in physics and chemistry by         considering the symmetry of isolated molecules along with the  involvement  of         selection         rules in Infrared and Raman spectroscopy as well as electronic         bonding, and         electronic transitions.</li>
</ol>
<br>
  	<h4>CONCEPTS OF MATHEMATICS</h4>
    After completion of this basic course the student will be able:
  <ol>
  	<li> to solve mathematical problems applying theory of determinants, vectors,         permutations         and combinations etc.  </li>
  	<li>to apply and solve problems using matrices, differentiation and integration.</li>
  	<li>  to understand and apply the knowledge of mathematics in solving the problems         encountered in the study of chemical sciences domain. </li>
</ol>
<br>
  	<h4>BIOLOGY FOR CHEMISTS</h4>
    After successfully finishing this basic course, the student will be able:
  <ol>
  	<li>  to have the knowledge of core concepts pertinent to all areas of biology.  </li>
  	<li>to get deep insight about the features of biological evolution, ecology and         physiology. </li>
</ol>
<br>
  	<h4>COMPUTER APPLICATIONS IN CHEMISTRY</h4>
    After completion of this basic course the student would be able:
  <ol>
  	<li>   to develop an understanding of the         basics of computer science and to prepare them         for continued professional development.  </li>
  	<li>to apply and solve problems using matrices, differentiation and integrationto illustrate the flowchart and design an algorithm for a given problem.</li>
  	<li>   to develop proficiency in writing the programs in C languages/ FORTRAN. </li>
  	<li>   to work on different softwares such as ACD lab for drawing the structures of         molecules, Origin to plot the graphs as well as programs related to create pi-charts         and bar diagram. </li>

</ol>
<br>
  	<h4>MOLECULAR SPECTROSCOPY</h4>
    Students after studying these areas of knowledge are expected:
  <ol>
  	<li>  to recognize enhanced utility of modern spectroscopic methods in structure         elucidation   as well as analytical applications vis-a-vis conventional knowledge of         chemical methods.  </li>
  	<li>to promote active use of this knowledge in various domains such as Research and         Development sector, quality control and quality assurance departments of industries         as well as academic institutions. </li>
</ol>
<br>
  	<h4>ORGANIC PHOTOCHEMISTRY</h4>
    On completion of this course, the student should be able:
  <ol>
  	<li>   to investigate the molecular basis for the study of photo- induced phenomena as well         as a to carry very broad vision of the main techniques and applications in chemistry.  </li>
  	<li>to build perception of photochemical and photo-physical processes along with         mechanisms through suitable theoretical models. </li>
</ol>
<br>
  	<h4>BIO-INORGANIC CHEMISTRY</h4>
    Students who complete the course are expected:
  <ol>
  	<li>   to understand the importance of the metal to change the entire properties of organic         compounds, heamoglobin and myoglobin when iron, chlorophyll when magnisium         and vitamin B12 when cobalt is there in porphyrin ring.  </li>
  	<li>to understand biological nitrogen fixation, and its mechanism. </li>
  	<li>to learn the biologically, Iron plays an important role in the transport and storage of         oxygen and also eletron transport and there would be no life without iron. </li>
  	<li>role of small amounts of Metals in Biological Systems. </li>
</ol>
<br>
  	<h4>MEDICINAL CHEMISTRY</h4>
    Students after studying these areas of knowledge are expected:
  <ol>
  	<li>   to develop an overall understanding of functioning as well as mode of action of         various drugs in human life.  </li>
  	<li>to consider drug design as a potential area so that appropriate contributions could be         made as and when required. </li>
  	<li> to contribute value addition in quality control as well as quality assurance sections of         various pharmaceutical industries. </li>
  	
</ol>
<br>
  	<h4>CHEMISTRY OF POLYMERS</h4>
    Students after studying these areas of knowledge are expected:
  <ol>
  	<li>   to recognize the importance of chemistry of polymers and to apply in professional         careers on need based approach.  </li>
  	<li>to create wide –spread awareness about utility of polymers in human life. </li>
</ol>
<br>
  	<h4>ADVANCES IN ANALYTICAL CHEMISTRY</h4>
    Students after studying these areas of knowledge are expected:
  <ol>
  	<li>    to connect in an obvious mode with ongoing rapid transformation in hi-tech         instrumentation operational in industries.  </li>
  	<li>to develop qualitative and quantitative skills needed in applications of analytical         chemistry. </li>
  	<li> to display appropriate professional talent through meaningful utilization of         instruments based hands- on- training imparted in their student life. </li> 	
</ol>
<br>
  	<h4>ENVIRONMENTAL CHEMISTRY</h4>
    Students after studying these areas of knowledge are expected:
  <ol>
  	<li>to know about the Chemical composition of enviroment- atmosphere, hydosphere,         lethosphere and biosphere.  </li>
  	<li>to understand water, air and noise polution and their sources, effects and remedies. </li>
  	<li> to learn environmental toxicology and chemical speciation due to toxic heavy metals         and toxic chemicals. </li>
  	<li> to know the history of environmental disasters throghout the world. </li> 	

</ol>
<br>
  	<h4>CHEMISTRY OF NATURAL PRODUCTS</h4>
    Students after studying these areas of knowledge are expected:
  <ol>
  	<li>to develop an overview of the field of natural product chemistry.  </li>
  	<li>to identify different types of natural products, their occurrence, structure,         biosynthesis and properties.</li>
  	<li>  to explore the use of natural products as starting materials for medicines. </li>
  	<li> to carry out independent investigations of plant materials and natural products. </li> 	
  </ol>
<br>
  	<h4>SOLID STATE CHEMISTRY AND NANOSCIENCE</h4>
    After completion of the course the student should be able :
  <ol>
  	<li>to gain a deep insight about the solid state reactions, basics of crystal defects with         mathematical treatment, to know about the concentration of defects and their utility in         current scientific domain and to comprehend the relation between structure and         properties.  </li>
  	<li>to understand the current trends and discoveries in the nanotechnology and its         perspectives for applications in different fields.</li>
  	<li>   to gain knowledge of different synthetic  methods for fabrication of inorganic         nanoparticles, one-dimensional nanostructures (nanotubes, nanorods, nanowires), thin         films, nanoporous materials. </li>
  	<li>  to develop fundamental knowledge of superconductivity and its use in modern day         science and technology. </li></ol>
<br>
  	<h4>BIO-ORGANIC CHEMISTRY</h4>
    After successfully finishing the course, the student wil  be able:
  <ol>
  	<li>to correlate the chemical structure of biomolecules with reactivity and properties         such         as solubility, binding ability (hydrogen bond ability, lipophilicity,         hydrophilicity).   </li>
  	<li> to discuss similarities and differences between transformations of biomolecules in         living systems and in vitro e.g., industrial synthesis.</li>	
  </ol> 
  <h3>(II)  For Ph.D. Course Work Program</h3>
  <h4>RESEARCH METHODOLOGY</h4>
    Doctoral students after successfully finishing the course, will be able:
  <ol>
  	<li>to become active promoter of GREEN CHEMISTRY concepts.   </li>
  	<li> to develop hands-on / operational practices of different sophisticated instruments.</li>	
  	<li>  to create a platform for pursuing research activities in respective domains</li>
  </ol> 	
  <br>
<h4>REVIEW OF LITERATURE</h4>
    After successfully finishing the course, the student will be able:
  <ol>
  	<li>to gain the  knowledge and develop  acquaintance with the  existing literature studies, threading the different lines of development in their respective research domains.   </li>
  </ol>
  <h4>COMPUTER APPLICATIONS</h4>
    After successfully finishing the course, the student will be able:
  <ol>
  	<li>to develop specialized computational skills.   </li>
  	<li>to gain proficiency in working with  different software,  beneficial for their         research studies.   </li>
  </ol>
  <br>
  <h4>ADVANCE COURSE: INTERPRETATION OF SPECTRA</h4>
    After successfully finishing the course, the student will be able:
  <ol>
  	<li> to develop theoretical and practical knowledge of different instrumental techniques.   </li>
  	<li>to apply the knowledge of interpretation skills in their research problems.   </li>
  </ol> 	

</p>

  </section>
  <!-- <section id="section-5">
    <h1>Section 5</h1>
    <p>Officia ipsum fugit iure eaque quisquam error tempore earum enim illum, delectus officiis incidunt corrupti aliquid nam quas perspiciatis eveniet doloremque quod labore? Doloremque, ipsum?</p>
  </section>
  <section id="section-6">
    <h1>Section 6</h1>
    <p>Aperiam repellat dignissimos fugiat possimus esse, suscipit neque nisi libero alias obcaecati ipsam, porro illo corrupti nostrum reprehenderit unde, illum in laudantium impedit. Modi, veniam.</p>
  </section>
  <section id="section-7">
    <h1>Section 7</h1>
    <p>Cum asperiores temporibus itaque consequatur quod inventore, quia quis explicabo dicta esse minus voluptatem reiciendis eveniet animi, necessitatibus illum dolorem doloremque repellat placeat, dolores eaque.</p>
  </section>
  <section id="section-8">
    <h1>Section 8</h1>
    <p>Optio qui, omnis itaque rerum iusto molestiae necessitatibus deleniti quod tenetur id perspiciatis voluptatum dolorum quisquam eius ipsum non architecto labore! Distinctio, tenetur. Officiis, necessitatibus?</p>
  </section>
  <section id="section-9">
    <h1>Section 9</h1>
    <p>Rem iste iure blanditiis excepturi esse nisi corrupti sequi, illo, laborum quo quis quaerat assumenda perspiciatis quod fuga vel laudantium doloribus architecto tempora omnis earum!</p>
  </section> -->
</main>
</div>
<div class="smallfooter" style="background-color:#0c2461 !important; display:block; font-family: 'Source Sans Pro', sans-serif; margin-top: 30px; ">

  

    <div class="col-md-3" style="float:left; background-color:inherit; min-height: 500px; " >
         <a href="index.php">
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

<!-- <footer>
  &copy;2018 Footer
</footer> -->
</body>
</html>