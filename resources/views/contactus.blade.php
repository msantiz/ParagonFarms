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

 

body{

  background-color: 	#4169E1;

}

.boxes{
  display: inline-block;

border:3px;
border-style:solid;
border-color:black;
padding:1em;
}

</style>

 

 
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
<body>

<br><br>

<div class = "contact">

              <div>

                             <font size = "5" face = "Palatino"><u><b>Address</b></u></font><br>

                             <font size = "4" face = "Palatino">Paragon Farms Equestrian Center<br>

                             3500 S Wagner Rd.<br>

                             Ann Arbor, MI 48103</font><br><br><br>

              </div>

              <div>

                             <font size ="5" face = "Palatino"><u><b>Phone</b></u></font><br>

                             <font size = "4" face = "Palatino">(734)-846-1779<br>

                             (734)-668-6709</font><br><br><br>

              </div>

              <div>

                             <font size = "5" face = "Palatino"><u><b>E-mail</b></u></font><br>

                             <font size = "4" face = "Palatino">paragonfarms@aol.com<br></font><br><br>

              </div>

              <div>

              <font size = "5" face = "Palatino"><u><b>Social Media</b></u></font><br><br>

                             <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

                             <a href ="https://www.facebook.com/pages/category/Horseback-Riding-Center/Paragon-Farms-Equestrian-Ctr-152513654791133/" class ="fa fa-facebook"target="_blank"></a>

                             <a href ="https://www.instagram.com/" class ="fa fa-instagram"target="_blank"></a>

                             <a href ="https://www.youtube.com/" class ="fa fa-youtube"target="_blank"></a>
                             <br><br><br>
</div>

</div><br><br><br>

 
<div class="google-maps">
<center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2954.051793659105!2d-83.80150704945663!3d42.234706450900035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x883cb07b63ee6147%3A0xb1b3eeb7e27fbe3b!2s3500%20S%20Wagner%20Rd%2C%20Ann%20Arbor%2C%20MI%2048103!5e0!3m2!1sen!2sus!4v1570818183701!5m2!1sen!2sus" width="300" height="225" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></center>                         
</div>
 

 <div style="overflow-x:auto;">
 <?php $name = $email = $phone = $content ="";?>
<div class = "boxes">
<form action = "{{url('/contact.html')}}" method = "post">
{{csrf_field()}}


<div class = "form-group">
    <label>Name*</label><br>
    <input type = "text" size = "50" name = "name" class = "form-control">
</div>

<div class = "form-group">
    <label>Email*</label><br>
    <input type = "email" size = "50" name = "email" class = "form-control">
</div>

<div class = "form-group">
    <label>Phone Number*</label><br>
    <input type = "phone" size = "50" name = "phone" class = "form-control">
</div>

<div class = "form-group">
    <label>Message*</label><br>
    <textarea name = "content" class = "form-control"></textarea>
</div>
                                  <div class="submit-section" style="display: flex margin-left: 80%;"> <button type ="submit" class = "btn btn-primary">Submit</button></div>
</form>
              
</div>
             

 

             

 

 
</body>

<style>

.google-maps{
  position: relative;
  padding-bottom: 75%;
  height: 0;
  overflow: hidden;
}

.google-maps iframe{
position: absolute;
top: 0;
left: 50%;
transform: translateX(-50%);
width: 75% !important;
height: 75% !important;
}

input[type=text], select, input[type=email], input[type=phone]{
              position: relative;
              width: 100%;

              padding: 12px;

              border: 1 px solid #ccc;

              border-radius: 4px;

              box-sizing: border-box;

              margin-top: 6px;

              margin-bottom: 16px;

              resize: vertical

}

textarea{
  width: 100%;
  height: 150px;
  position: relative;

              padding: 12px;

              border: 1 px solid #ccc;

              border-radius: 4px;

              box-sizing: border-box;

              margin-top: 6px;

              margin-bottom: 16px;

              resize: vertical
}

 

input[type=submit]{
              background-color: #4CAF50;
              position: relative;

              color: white;

              padding: 12px 20px;

              border: none;

              border-radius: 4px;

              cursor: pointer;

}

 

input[type=submit]:hover{

              background-color: #45a049;

}

 

.form-group{
              position: relative;
              padding: 20px;

}

 

.contact {

              display: flex;
              position: relative;
              

              justify-content: space-around;
margin-left: 45px;

              }

             

.fa{

              padding: 10px;

              font-size: 20px;

              width: 20px;

              text-align: center;

              text-decoration: none;

}

.fa:hover{

              opacity: 0.7;

}

 

.fa-facebook{
position: relative;
              background: #3B5998;

              color: white;

}

 

.fa-instagram{
  position: relative;
              background: purple;

              color: white;

}

 

.fa-youtube{
  position: relative;
              background: red;

              color: white;

}

 

@media only screen and (max-width: 1150px){


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

  .contact {

flex-direction: column;
text-align: center;
margin-left: 0px;
  }

  .submit-section{
    color: white;
  }

}

img{
  border: 7px solid black;
}
    

 

 

</style>


</html>