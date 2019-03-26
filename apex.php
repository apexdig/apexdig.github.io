<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
	<title>Apex Digital Solutions</title>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" >
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
<style>
body
{
	background-size: cover;
}

	
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

ul li ul li
{
	float:block;
}
ul li ul
{
	display:none;

}
ul li:hover ul
{
	display:block;
	float:block;
 
}
.navbar
{
	background: #fff;
}
.navbar-toggler
{
	border:none!important;
}
.nav-link
{
	
	font-weight: 600;
	font-size: 16px;
}

#slider
{
	width: 65%;
	position: center;
	margin-left: 230px;
	background-image: url("images/22.png");
}
#about
{
	padding-top: 50px;
	padding-bottom: 50px;
	color: #555;
}
		.btn
{
	margin-top: 20px;
	margin-bottom: 30px;
}
#Price
{
	padding: 40px 0;
	background:#efefef;
}

.about-content
{
	padding-top: 20px;
}
.skills-bar p
{
	margin-bottom:  6px;
	font-weight: 600;

}
.progress-bar
{
	border-radius: 16px;
}
.progress
{
	border-radius: 16px;
}
#services
{
	background-image: linear-
	gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)) ;
	background: url("images/333.jpg");
	background-size: cover;
	background-position: center;
		background-attachment: fixed;
		color:black;
	padding-top: 50px;
	padding-bottom: 50px;
}
.container h1
{
	text-align: center;
	padding-top: 10px;
}
.services
{
	margin-top: 40px;
}
.icon
{
	font-size: 40px;
	margin:20px auto;
	padding: 20px;
	height:80px;
	width:80px;

}
.services p
{
	font-size: 14px;
	margin-top: 20px;
	
}
.services .col-md-3:hover
{
	background:#007bff;
	cursor: pointer;
	transition: 0.9s;
}
#promo
{
	background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url("images/44.jpg");
	background-size: cover;
	background-position: center;
	color:#fff;
	background-attachment: fixed;
	text-align: center;
	padding: 100px;
	font-family: sans-serif;
	font-size: 38px;
}
.single-price
{
	margin: 10px auto;
	display: inline;
	float: left;
	width: 100%;
	background-color: #fff;
	transition: 0.5s ease;

}
.single-price:hover{
    box-shadow: 0 2px 20px #333;
}
.profile-pic
{
	margin-top: 25px;
}
.profile-pic .img-box
{
   opacity: 1;
   display: block;
   position: relative;
}
.profile-pic .img-box img
{
	
}
.profile-pic .img-box img:hover
{
	filter: grayscale(0);
	cursor: pointer;
}
.profile-pic h2
{

	font-size: 22px;
	font-weight: bold;
	margin-top: 15px;
	color: #007bff !important;
}
#team.fa
{
  height:25px;
  width: 25px;
}
.navbar-brand img
{
        margin-left: -63px;
    margin-top: 10px;
    width: 463px;
}
.carousel-inner {
    margin-left: -230px;
    width: 154%;
    overflow: hidden;
}
.carousel-control-prev {
    left: -262px;
}

.price-head
{
    background-color: #2196f3;
    display:inline;
    float:left;
    padding: 10px 5px;
    text-align: center;
    width:100%;
    
}
.price-head h2
{
    color:#fff;
    font-weight: bold;
}
.price-head p{
    color:#fff;
       font-size: 25px;
}
#team{
    margin-top: 24px;
    margin-bottom: 32px;
}
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 5px;
}

.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 10px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #444;
  color: white;
}

.fa {font-size:50px;}

#testimonials
{
    padding-top: 50px;
    padding-bottom: 50px;
    
}
#testimonials .row
{
    margin-top:30px; 
}
.col-md-4{
    margin:40px auto;
}
.profile{
    padding: 70px 10px 10px;
    background-color: #efefef;
}
.profile img
{
    top:-60px;
    position: absolute;
    left: calc(50% -60px);
    border: 10px solid;
    width:127px;
    left:115px;
    
}
.fa-quote-left
{
    color:#2196f3;
}
.fa-quote-right
{
    color:#2196f3;
}
#blockquote
{
     
}
#contact
{
    background: #efefef;
    padding-top: 40px;
    padding-bottom: 40px;
    
}
.contact-form
{
    padding: 15px;
}
.form-control
{
    border-radius: 0 !important;
    border: none !important;
}
::placeholder
{
    color: #999 !important;
}
.content ul li{
    border-bottom: 1px solid #efefef;
    padding: 15px 10px;
    list-style: none;
}
.fa-check-circle
{
    color:green;
    
}
.fa-times-circle
{
    color:red;
   
}
.butto{
    display: inline;
    float: left;
    padding: 15px 30px 30px;
    text-align: center;
    
    width: 100%;
}
.buy-btn
{
    background-color: #2196f3;
    border-radius: 3px;
    display: inline-block;
    font-size: 18px;
    padding: 15px 50px;
    transition: 0.5s;
    color:black;
}
#footer
{
    background: #333;
    color:#fff;
    padding: 12px;
    text-align: center;
}
.fa-heart
{
    color: red;
}
#career .table
{
    margin-left: 123px;
    margin-top: 102px;
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
<div id="slider">
	<div id="headerSlider" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#headerSlider" data-slide-to="0" class="active"></li>
    <li data-target="#headerSlider" data-slide-to="1"></li>
    <li data-target="#headerSlider" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/bg.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/85.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/446.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#headerSlider" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#headerSlider" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<section id="about">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h2>About Us</h2>
				<div class="about-content">
					We provide excellent user experience in website and application development, search engine marketing solutions, handling your online advertisement, managing your social media channels, management and execution for your email marketing campaigns, so we have a one stop solution for all your digital needs.<br>
					<a href="http://triwacko.in/apexdigital/servies.php" class="btn btn-primary">Read More>></a>

			</div>
		</div>

			<div class="col-md-6 skills-bar">
				<h2>Why Us?</h2>
				<p>Ready For Business</p>
				<div class="progress">
				<div class="progress-bar" style="width:100%;"></div>
	</div>
	<p>Success</p>
				<div class="progress">
				<div class="progress-bar" style="width:100%;"></div>


</div>
<p>Innovation</p>
				<div class="progress">
				<div class="progress-bar" style="width:100%;"></div>
				</div>
				<p>Experience</p>
				<div class="progress">
				<div class="progress-bar" style="width:100%;"></div>
			</div>
			<p>Creativity</p>
				<div class="progress">
				<div class="progress-bar" style="width:100%;"></div>
			</div>
</section>
<section id="services">
<div class="container">
<h1>Our Services</h1>
<div class="row services">
		<div class="col-md-3 text-center">
			<div class="icon">
				<i class="fas fa-desktop"></i>
			</div>
			<h3>Website Development</h3>
			<p>Web development is the work involved in developing a web site for the Internet or an intranet. </p>
		</div>
		<div class="col-md-3 text-center">
			<div class="icon">
				<i class="fab fa-searchengin"></i>
			</div>
			<h3>Search Engine Optimization</h3>
			<p>Web development is the work involved in developing a web site for the Internet or an intranet. </p>
		</div>
		<div class="col-md-3 text-center">
			<div class="icon">
			<i class="fab fa-microsoft"></i>
			</div>
			<h3>Digital Marketing</h3>
			<p>Web development is the work involved in developing a web site for the Internet or an intranet. </p>
		</div>
		<div class="col-md-3 text-center">
			<div class="icon">
				<i class="fas fa-money-bill-alt"></i>
			</div>
			<h3>Pay Per Click</h3>
			<p>Web development is the work involved in developing a web site for the Internet or an intranet. </p>
		</div>
	</div>

	</div>
</div>
</div>
</section>	
<section id="team">
	<div class="container">
		<h1>Our Team</h1>
		<div class="row">
			<div class="col-md-3 profile-pic text-center">
				<div class="img-box">
                                    <img src="images/p.jpg" class="img-responsive">
					<ul>
						<a href="#"><li><i class="fab fa-facebook"></i></li></a>
							<a href="#"><li><i class="fab fa-twitter"></i></li></a>
								<a href="#"><li><i class="fab fa-linkedin"></i></li></a>
							</ul>

				</div>
				<h3>Saksham Luthra</h3>
				<h5>Founder / Director</h5>
			</div>
                    <div class="col-md-3 profile-pic text-center">
				<div class="img-box">
                                    <img src="images/p.jpg" class="img-responsive">
					<ul>
						<a href="#"><li><i class="fab fa-facebook"></i></li></a>
							<a href="#"><li><i class="fab fa-twitter"></i></li></a>
								<a href="#"><li><i class="fab fa-linkedin"></i></li></a>
							</ul>

				</div>
				<h3>Lores Ipsum</h3>
				<h5>Manager</h5>
			</div>
                    <div class="col-md-3 profile-pic text-center">
				<div class="img-box">
                                    <img src="images/p.jpg" class="img-responsive">
					<ul>
						<a href="#"><li><i class="fab fa-facebook"></i></li></a>
							<a href="#"><li><i class="fab fa-twitter"></i></li></a>
								<a href="#"><li><i class="fab fa-linkedin"></i></li></a>
							</ul>

				</div>
				<h3>Lorem Ipsum</h3>
				<h5>C.O.O</h5>
			</div>
                    <div class="col-md-3 profile-pic text-center">
				<div class="img-box">
                                    <img src="images/p.jpg" class="img-responsive">
					<ul>
						<a href="#"><li><i class="fab fa-facebook"></i></li></a>
							<a href="#"><li><i class="fab fa-twitter"></i></li></a>
								<a href="#"><li><i class="fab fa-linkedin"></i></li></a>
							</ul>

				</div>
				<h3>Lorem Ipsum</h3>
				<h5>C.E.O</h5>
			</div>
		</div>
	</div>
</section>


<section id="promo">
	<div class="container">
		<p>Get Free Web Page and Web Hosting</p>
		<a href="http://triwacko.in/apexdigital/contact.php" class="btn btn-primary">Contact Us</a>
	</div>

</section>
<section id="Price">
	<div class="container">
		<h1>Price Quotes</h1>
		<div class="row">
			<div class="col-md-3">
				<div class="single-price">
					<div class="price-head">
						<h2>Free</h2>
                                                <p>$0/<span>Month</span></p>
                                        </div>
						
						<div class="content">
                                                    <ul style="float:left;">
                                                            <li><i class="fas fa-check-circle" style="padding:10px ;"></i>5GB Space</li>
								<li><i class="fas fa-check-circle" style="padding:10px ;"></i>10GB Bandwidth</li>
								<li><i class="fas fa-times-circle" style="padding:10px ;"></i>Unlimited Domains</li>
								<li><i class="fas fa-times-circle" style="padding:10px ;"></i>Unlimited Support</li>
								<li><i class="fas fa-times-circle" style="padding:10px ;"></i>15 E-mail Accounts </li>
							</ul>
						</div>
						<div class="butto">
							<a class="buy-btn" href="#">Join Now</a>
						</div>
                                    


					</div>
                                    
                                    


				</div>
                            <div class="col-md-3">
				<div class="single-price">
					<div class="price-head">
						<h2>Startup</h2>
                                                <p>$39.90/<span>Month</span></p>
                                        </div>
						
						<div class="content">
							<ul style="float:left;">
								<li><i class="fas fa-check-circle" style="padding:10px ;"></i>15GB Space</li>
								<li><i class="fas fa-check-circle" style="padding:10px ;"></i>20GB Bandwidth</li>
								<li><i class="fas fa-check-circle" style="padding:10px ;"></i>Unlimited Domains</li>
								<li><i class="fas fa-times-circle" style="padding:10px ;"></i>Unlimited Support</li>
								<li><i class="fas fa-times-circle" style="padding:10px ;"></i>15 E-mail Accounts </li>
							</ul>
						</div>
						<div class="butto">
							<a class="buy-btn" href="#">Join Now</a>
						</div>
                            
			</div>

		</div>
                    <div class="col-md-3">
				<div class="single-price">
					<div class="price-head">
						<h2>Business</h2>
                                                <p>$49.90/<span>Month</span></p>
                                        </div>
						
						<div class="content">
							<ul style="float:left;">
								<li><i class="fas fa-check-circle" style="padding:10px ;"></i>35GB Space</li>
								<li><i class="fas fa-check-circle" style="padding:10px ;"></i>40GB Bandwidth</li>
								<li><i class="fas fa-check-circle" style="padding:10px ;"></i>Unlimited Domains</li>
								<li><i class="fas fa-check-circle" style="padding:10px ;"></i>Unlimited Support</li>
								<li><i class="fas fa-times-circle" style="padding:10px ;"></i>15 E-mail Accounts </li>
							</ul>
						</div>
						<div class="butto">
							<a class="buy-btn" href="#">Join Now</a>
						</div>
</div>
                        

		

	</div>
                    <div class="col-md-3">
				<div class="single-price">
					<div class="price-head">
						<h2>Corporate</h2>
                                                <p>$99.90/<span>Month</span></p>
                                        </div>
						
						<div class="content">
							<ul style="float:left;">
								<li><i class="fas fa-check-circle" style="padding:10px ;"></i>55GB Space</li>
								<li><i class="fas fa-check-circle" style="padding:10px ;"></i>50GB Bandwidth</li>
								<li><i class="fas fa-check-circle" style="padding:10px ;"></i>Unlimited Domains</li>
								<li><i class="fas fa-check-circle" style="padding:10px ;"></i>Unlimited Support</li>
								<li><i class="fas fa-check-circle" style="padding:10px ;"></i>15 E-mail Accounts </li>
							</ul>
						</div>
						<div class="butto">
							<a class="buy-btn" href="#">Join Now</a>
						</div>
</section>
       <!------Testimonials------>
       <section id="testimonials">
           <div class="container">
           <h1>Testimonials</h1>
           <p class="text-center"></p><br>
           <div class="row">
               <div class="col-md-4 text-center">
                   <div class="profile">
                       <img src="images/p.jpg">
                       <blockquote><i class="fas fa-quote-left"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.<i class="fas fa-quote-right"></i></blockquote>
                       <h3 style="color:#2196f3;">Saksham Luthra</h3><span>Founder at XYZ</span>
                   </div>
                   
                   
               </div>
               <div class="col-md-4 text-center">
                   <div class="profile">
                       <img src="images/p.jpg">
                       <blockquote><i class="fas fa-quote-left"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.<i class="fas fa-quote-right"></i></blockquote>
                       <h3 style="color:#2196f3;">Saksham Luthra</h3><span >Founder at XYZ</span>
                   </div>
                   
                   
               </div>
               <div class="col-md-4 text-center">
                   <div class="profile">
                       <img src="images/p.jpg">
                       <blockquote><i class="fas fa-quote-left"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.<i class="fas fa-quote-right"></i></blockquote>
                       <h3 style="color:#2196f3;">Saksham Luthra</h3><span>Founder at XYZ</span>
                   </div>
                   
                   
               </div>
           </div>
       </section>
       <section id="contact">
           <div class="container">
               <h1>Get In Touch</h1>
               <div class="row">
                   <div class="col-md-6">
                       <form class="contact-form">
                           <div class="form-group">
                               <input type="text" class="form-control" placeholder="Your Name">
                           </div>
                           <div class="form-group">
                               <input type="number" class="form-control" placeholder="Contact No">
                           </div>
                           <div class="form-group">
                               <input type="email" class="form-control" placeholder="E-mail">
                           </div>
                           
                           <div class="form-group">
                               <textarea class="form-control" row="4" placeholder="Your Message"></textarea>
                           
                               
           </div>
                           <button type="submit" class="btn btn-primary"> Send Message</button>
                       </form>
                   </div>
                   
                   <div class="col-md-6 contact-info" style="font-size: 20px;">
                       <div class="follow"><b>Address:-</b>XYZ Road,Cyber Hub</div>
                       <div class="follow"><b></b>Gurgaon(122002)</div>
                       <div class="follow"><b></b>Haryana</div>
                       <div class="follow"><b>Contact No. :</b>+91-9050088323</div>
                       <div class="follow"><label><b>Connect socially Here-:</b></label><br>
                           <a href="#"><i class="fab fa-facebook" style="padding:10px"></i></a>
                           <a href="#"><i class="fab fa-twitter" style="padding:10px"></i></a>
                           <a href="#"><i class="fab fa-linkedin" style="padding:10px"></i></a>
                           <a href="#"><i class="fab fa-instagram" style="padding:10px"></i></a>
                       </div>
                   
               </div>
           </div>
       </section>
       <section id="footer">
           <div class="container">
               <p>Made With Love By Apex Bhiwani<i class="fas fa-heart"></i></p>
           </div>
       </section>
                
           
    </body>
</html>
