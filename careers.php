<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
               <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" >
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <style>
            #nav-bar
{
	position: sticky;
	top: 0;
	z-index: 10;

}

.navbar-nav li
{
	padding: 0 10px;
}
.navbar-nav li a
{
	float: right;
	text-align: left;
}
#nav-bar ul li a:hover
{
	color: #007bff!important;

}
.navbar-brand img
{
        margin-left: -63px;
    margin-top: 10px;
    width: 463px;}
.hero-image {
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("images/about.png");
  height: 100%;
  width: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
#banner img
{
   margin-top: -11px;
}
table
{
    padding: 20px;
}
table, th, td {
  border: 5px solid black;
  padding: 20px;
  width:100px;
}

    </style>
    </head>
    <body>
       <!--navigationbar-->
	<section id="nav">
		<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="http://triwacko.in/apexdigital/"><img src="images/54.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="http://triwacko.in/apexdigital/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://triwacko.in/apexdigital/services.php">Services</a>
        <!-----ul>
            <li><a href="#">Digital Marketing</a></li>
            <li><a href="#">Website Development</a></li>
            <li><a href="#">S.E.O</a></li>
            <li><a href="#">Pay Per Click</a></li>
        <!----/ul---->
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://triwacko.in/apexdigital/servies.php">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://triwacko.in/apexdigital/contact.php">Contact</a>
      </li>.
      <li class="nav-item">
        <a class="nav-link" href="http://triwacko.in/apexdigital/careers.php">Careers</a>
      </li>
    </ul>
  </div>
</nav>
        </section>
        <section id="banner">
            <img id="banner" src="images/careers.jpg" alt="Banner Image" >
        </section>
       <section id="career">
           <table class="table table-bordered table-hover" >
  <tr style="background:grey;">
      <th>Position</th>
    <th>Job Location</th> 
    <th>Experience</th>
    <th>Description</th>
    <th>Apply</th>
  </tr>
  <tr>
    <td>Web Developer</td>
    <td>Delhi</td>
    <td>0-1 Years</td>
    <td>Lorem Ipsum</td>
    <td><button type="button" data-toggle="modal" data-target="#myModal">Apply Here</button></td>
  </tr>
  <tr>
    <td>Web Developer</td>
    <td>Delhi</td>
    <td>0-1 Years</td>
    <td>Lorem Ipsum</td>
    <td><button type="button" data-toggle="modal" data-target="#myModal">Apply Here</button></td>
  </tr>
  <tr>
    <td>Web Developer</td>
    <td>Delhi</td>
    <td>0-1 Years</td>
    <td>Lorem Ipsum</td>
    <td><button type="button" data-toggle="modal" data-target="#myModal">Apply Here</button></td>
  </tr>
  <tr>
    <td>Web Developer</td>
    <td>Delhi</td>
    <td>0-1 Years</td>
    <td>Lorem Ipsum</td>
    <td><button type="button" data-toggle="modal" data-target="#myModal">Apply Here</button></td>
  </tr>
  <tr>
    <td>Web Developer</td>
    <td>Delhi</td>
    <td>0-1 Years</td>
    <td>Lorem Ipsum</td>
    <td><button type="button" data-toggle="modal" data-target="#myModal">Apply Here</button></td>
  </tr>
  <tr>
    <td>Web Developer</td>
    <td>Delhi</td>
    <td>0-1 Years</td>
    <td>Lorem Ipsum</td>
    <td><button type="button" data-toggle="modal" data-target="#myModal" >Apply Here</button></td>
  </tr>
  <tr>
    <td>Web Developer</td>
    <td>Delhi</td>
    <td>0-1 Years</td>
    <td>Lorem Ipsum</td>
    <td><button type="button" data-toggle="modal" data-target="#myModal">Apply Here</button></td>
  </tr>
  <tr>
    <td>Web Developer</td>
    <td>Delhi</td>
    <td>0-1 Years</td>
    <td>Lorem Ipsum</td>
    <td><button type="button" data-toggle="modal" data-target="#myModal">Apply Here</button></td>
  </tr>
           </table>
           <!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Apply here</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        
  First name:<br>
  <input type="text" name="firstname">
  <br>
  Last name:<br>
  <input type="text" name="lastname">
  <br>
  E-Mail:<br>
  <input type="email" name="Email">
  <br>
  Contact No:<br>
  <input type="number" name="contact">
  <br>
  Attach Your Resume:<br>
  <input type="file" name="resume">
  <br><br>
  <input type="button" value="Submit" onclick="hello">

      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

    </body>
</html>
