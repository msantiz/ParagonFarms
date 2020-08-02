<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

<div class = "header">

<h1> <center><font size = "10" face = "Trebuchet" color = "black"> <b>Paragon Farms Equestrian Center</b></font></center></h1>
    <div class="picture">
    <img src = "../images/1.jpg" width="185" height="135" align = "left" class="horse">
    </div>
<div class = "flex">

<div class="navbar">

  <a href="./new.html">Home</a>

  <a href="./abtpg.html">About Us</a>

  <a href="./services.html">Services</a>

  <div class="dropdown">

    <button class="dropbtn">Sales

 

    </button>

    <div class="dropdown-content">
    
    <a href="./Lenni.html">Lenni</a>

    <a href="./henry.html">Final Appeal</a>

    <a href="./crunch.html">Mr Perfect Time</a>

    <a href="./sully.html">Sully's Folly</a>

    

  </div>

  </div>

    <a href="./contact.html">Contact Us</a>

    <a href="./photo.html">Photo Gallery</a>

    <a href="./calendar.html">Calendar</a>

</div>

</div>

</div>

</head>

<style>

 

.header{

padding: 20px;

text-align: center;

background: white;

color: blue;

border-radius: 25px;

}

 

.horse {

              position: absolute;

              top: 17px;

              left: 17px;
              border-radius: 25px;
}

 

.flex {

              display: flex;

              justify-content: space-around;

              }

.navbar {

  overflow: hidden;

  background-color: #808080;
    
      font-family: Verdana;

}

 

/* Links inside the navbar */

.navbar a {

  float: left;

  font-size: 16px;

  color: white;

  text-align: center;

  padding: 6px 8px;

  text-decoration: none;

}

 

/* The dropdown container */

.dropdown {

  float: left;

  overflow: hidden;

}

 

/* Dropdown button */

.dropdown .dropbtn {

  font-size: 16px;

  border: none;

  outline: none;

  color: white;

  padding: 6px 8px;

  background-color: inherit;

  font-family: inherit; /* Important for vertical align on mobile phones */

  margin: 0; /* Important for vertical align on mobile phones */

}

 

/* Add a red background color to navbar links on hover */

.navbar a:hover, .dropdown:hover .dropbtn {

  background-color: red;

}

 

/* Dropdown content (hidden by default) */

.dropdown-content {

  display: none;

  position: absolute;

  background-color: #f9f9f9;

  min-width: 160px;

  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);

  z-index: 1;

}

 

/* Links inside the dropdown */

.dropdown-content a {

  float: none;

  color: black;

  padding: 12px 16px;

  text-decoration: none;

  display: block;

  text-align: left;

}

 

/* Add a grey background color to dropdown links on hover */

.dropdown-content a:hover {

  background-color: #ddd;

}

 

/* Show the dropdown menu on hover */

.dropdown:hover .dropdown-content {

  display: block;

}

 .list{
  display: flex;
  justify-content: space-around;
 }

 .list1{
  display: flex;
  justify-content: space-around;
 }

body{

  background-color: 	#4169E1;

}

.Box{
  border:3px;
border-style:solid;
border-color:black;
padding:1em;
}


@media only screen and (max-width: 1150px){
  .list{
    flex-direction: column;
  }

.picture{
  display: flex;
  justify-content: center;
  margin-block-start: 1.34em;
  margin-block-end: 1.34em;
}

.horse{
  position: relative;
  margin-right: 45px;
  margin-bottom: 40px;
}

}

img{
border: 7px solid black;
}

</style>

 

 

<body>

<br><br>

<center><font size = "5" face = "Palatino" color = "black">We offer a variety of professional equine services including:</center><br>

<div class = "list">

<div class = "Box">

<ul>

<li>Lesson on your horse (one hour): $60</li>

<li>Lesson on a school horse (one hour): $65</li>

<li>Training ride: $60</li>

<li>Board: $400 per month</li>

<li>Half lease: $250 per month</li>

<li>Quarter lease: $175 per month</li>


</ul></div>

<div class = "Box">

<ul>






<li>Clinics: $75 per lesson plus travel expenses</li>

<li>Coaching at competitions: $15 per day</li>

<li>Course Walks: $10 stadium, $25 cross<br>country</li>

<li>Young horse starting</li>

<li>Training and consignment packages</li>

</ul></div>
</div>


</font><br><br>

 

<center><font size = "5" face = "Palatino" color = "black">------------------------֎------------------------<br><br><br>

Current Specials</center><br>

<div class = "list1">
<div class = "Box">
<ul>

<li>Monthly lesson package on your horse (payment<br>due on the first): $220 per month</li>
<li>Monthly lesson package on a school horse<br>(payment due on the first): $240 per month</li>
<li>Intro lessons- an introduction to riding for<br>those little to no experience: $25 per ride</li>



</ul>
</div>
<div class = "Box">
<ul>
<li>Monthly training ride package (payment due on<br>the first): $800 per month</li>

<li>Student discount: show your current student ID<br>and receive $10 off your first lesson</li>
<li>Referral discount: Any current student who refers<br>a new student to Paragon Farms will receive<br>$10 off their next lesson</li>



</ul></div>
</div>
</font><br><br>

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

</body>

</html>