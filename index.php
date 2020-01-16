<?php


?>
<!DOCTYPE html>
<html>
   <head>
      <title>MY KITCHEN </title>
	  <meta charset="UTF-8">
	  <meta name="description" content="MY KITCHEN is a food order and delivery service 
    with the mission to bring affordable and healthy meals to as many people 
    as possible.">
    <link rel="stylesheet" type="text/css" href="style1.css">
	  <link rel="stylesheet" href="style.css">
	   <link rel="stylesheet" type="text/css" href="style3.css">
	
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	   
   </head>
   <body>
   <!---- NavigationBar (<img src="imgs/food1.png">) ---->
   <section id="nav-bar">
     <nav class="navbar navbar-expand-lg navbar-light ">
  <a class="navbar-brand" href="#home"><img src="imgs/food1.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#services">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#meals" >Gallery</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link " href="#menu" >Food Menu</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link " href="#" >Testimonials</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link " href="#" >Contact</a>
      </li>
    </ul>
  </div>
</nav> 
   </section>
   
   
   <!------slider------->
   <div id="slider">
      <div id="headerslider" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#headerslider" data-slide-to="0" class="active"></li>
    <li data-target="#headerslider" data-slide-to="1"></li>
    <li data-target="#headerslider" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="imgs/food7.jpg" class="d-block img-fluid" >
	  <div class="carousel-caption">
	  <h5>My Kitchen Is The Best</h5>
	  </div>
    </div>
    <div class="carousel-item">
      <img src="imgs/food7.jpg" class="d-block img-fluid" >
	  <div class="carousel-caption">
	  <h5>EAT WHAT U WANT</h5>
	  </div>
    </div>
    <div class="carousel-item">
      <img src="imgs/food7.jpg" class="d-block img-fluid" >
	  <div class="carousel-caption">
	  <h5>WE HAVE ALL YOU NEED</h5>
	  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#headerslider" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#headerslider" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
   
   </div>
   
   
   <!---------About--------->
   <section id="about">
      <div class="container">
         <div class="row">
            <div class="col-md-6">
            <h2>About Us</h2>
			<div class"about-content">
			My Kitchen is a well-known restaurant in Adama serving with a variety of crispy burgers, 
			sandwiches, and juice products. My kitchen restaurant was found by Mr. XXXX  in Adama,
			Ethiopia in 2010 G.C with a mission to introduce traditional and foreign food in Adama. 
			Since then My Kitchen has been growing and making more customers in Adama.
			</div>
			<button type="button" class="btn btn-primary">Read More>> </button>
			</div>
			<div class="col-md-6 skills-bar">
            
			<p>Burger</p>
			<div class="progress">
			<div class="progress-bar" style="width:90%;">90%</div>
			</div>
			
			<p>Pizza</p>
			<div class="progress">
			<div class="progress-bar" style="width:80%;">80%</div>
			</div>
			<p>Sandwich</p>
			<div class="progress">
			<div class="progress-bar" style="width:75%;">75%</div>
			</div>
			<p>Juice</p>
			<div class="progress">
			<div class="progress-bar" style="width:50%;">50%</div>
			
			</div>
	
			</div>
         </div>
      </div>
   
   
   </section>
   
   <!-------------services----->
   <section id="services">
      <div class="container">
         <h1>Our Services </h1>
            <div class="row services">
               <div class="col-md-3 text-center">
                  <div class="icon">
                     <i class="fas fa-flushed"></i>
                  </div>
				  <h3>Up to 365 days/year</h3>
				  <p> Never cook again! We really mean that. Our subscription 
                    plans include up to 365 days/year coverage. You can also 
                    choose to order more flexibly if that's your style. </p>
               </div>
			   <div class="col-md-3 text-center">
                  <div class="icon">
                     <i class="fas fa-flushed"></i>
                  </div>
				  <h3>Ready in few minutes</h3>
				  <p> You're only twenty minutes away from your delicious and 
                    super healthy meals delivered right to your home. 
                    We work with the best chefs in each town to ensure that 
                    you're 100% happy. </p>
               </div>
			   <div class="col-md-3 text-center">
                  <div class="icon">
                     <i class="fas fa-flushed"></i>
                  </div>
				  <h3>100% organic</h3>
				  <p> All our vegetables are fresh, organic and local. Animals 
                    are raised without added hormones or antibiotics. 
                    Good for your health, the environment, and it also 
                    tastes better! </p>
               </div>
			   <div class="col-md-3 text-center">
                  <div class="icon">
                     <i class="fas fa-flushed"></i>
                  </div>
				  <h3>Order anything</h3>
				  <p>We don't limit your creativity, which means you can order 
                    whatever you feel like. You can also choose from our menu 
                    containing many delicious meals. It's up to you! </p>
               </div>
   
            </div>
   
      </div>
   
   </section>
 
 <!--------------Team Members--------------->
 
 
 <!--------------Promo--------------->
 <section id="promo">
 <div class="container">
 <h2> Hello, we’re MY KITCHEN, your new premium food delivery service. 
                We know you’re always busy. No time for cooking. 
                So let us take care of that, we’re really good at it, 
                we promise!</h2> 
 <a href="login&R/login.php" class="btn btn-primary">Order Now</a>
 </div>
 
 </section>
 
<!--------------menu--------------->

<section id="menu">
<div class="container">
<h1> Food Menu </h1>
<h3>Burgers</h3>
<div class="row">
<div class="col-md-3">
<div class="single-menu">
<div class="menu-head">
<h2>Special Burger</h2>
<p>100 ETB </P>

</div>
<div class="menu-contents">
<ul>
<li>
<i class="fa fa-check-circle"></i>contains meet
</li>
<li><i class="fa fa-check-circle"></i>contains meet</li>
<li><i class="fa fa-times-circle"></i>
10 min
</li>
</ul>
</div>
<div class="menu-button">
<a class="order-btn" href="login.php">Order Now</a>
</div>

</div>

</div>
<div class="col-md-3">
<div class="single-menu">
<div class="menu-head">
<h2>Special Burger</h2>
<p>100 ETB </P>

</div>
<div class="menu-contents">
<ul>
<li>
<i class="fa fa-check-circle"></i>contains meet
</li>
<li><i class="fa fa-check-circle"></i>contains meet</li>
<li><i class="fa fa-times-circle"></i>
10 min
</li>
</ul>
</div>
<div class="menu-button">
<a class="order-btn" href="">Order Now</a>
</div>

</div>

</div>
<div class="col-md-3">
<div class="single-menu">
<div class="menu-head">
<h2>Special Burger</h2>
<p>100 ETB </P>

</div>
<div class="menu-contents">
<ul>
<li>
<i class="fa fa-check-circle"></i>contains meet
</li>
<li><i class="fa fa-check-circle"></i>contains meet</li>
<li><i class="fa fa-times-circle"></i>
10 min
</li>
</ul>
</div>
<div class="menu-button">
<a class="order-btn" href="">Order Now</a>
</div>

</div>

</div>

<div class="col-md-3">
<div class="single-menu">
<div class="menu-head">
<h2>Special Burger</h2>
<p>100 ETB </P>

</div>
<div class="menu-contents">
<ul>
<li>
<i class="fa fa-check-circle"></i>contains meet
</li>
<li><i class="fa fa-check-circle"></i>contains meet</li>
<li><i class="fa fa-times-circle"></i>
10 min
</li>
</ul>
</div>
<div class="menu-button">
<a class="order-btn" href="">Order Now</a>
</div>

</div>

</div>
</div>
</div>

</section>

<!---------------------Gallery -----------> 
  <div class="container">
         <h1>Our Gallary </h1>
<section class="section-meals" id="meals">
        <ul class="meals-showcase clearfix">
            <li>
                <figure class="meal-photo">
                    <img src="imgs/food2.jpg" alt="Korean bibimbap with egg and vegetables">
                </figure>
            </li>
            <li>
                <figure class="meal-photo">
                    <img src="imgs/food3.jpg" alt="Simple italian pizza with cherry tomatoes">
                </figure>
            </li>
            <li>
                <figure class="meal-photo">
                    <img src="imgs/food4.jpg" alt="Chicken breast steak with vegetables">
                </figure>
            </li>
            <li>
                <figure class="meal-photo">
                    <img src="imgs/food5.jpg" alt="Autumn pumpkin soup">                      
                </figure>
            </li>
        </ul>
        <ul class="meals-showcase clearfix">
            <li>
                <figure class="meal-photo">
                    <img src="imgs/food6.jpg" alt="Paleo beef steak with vegetables">
                </figure>
            </li>
            <li>
                <figure class="meal-photo">
                    <img src="imgs/food5.jpg" alt="Healthy baguette with egg and vegetables">
                </figure>
            </li>
            <li>
                <figure class="meal-photo">
                    <img src="imgs/food4.jpg" alt="Burger with cheddar and bacon">                    
                </figure>
            </li>
            <li>
                <figure class="meal-photo">
                    <img src="imgs/food2.jpg" alt="Granola with cherries and strawberries">
                </figure>
            </li>
        </ul>
		<ul class="meals-showcase clearfix">
            <li>
                <figure class="meal-photo">
                    <img src="imgs/food3.jpg" alt="Korean bibimbap with egg and vegetables">
                </figure>
            </li>
            <li>
                <figure class="meal-photo">
                    <img src="imgs/food4.jpg" alt="Simple italian pizza with cherry tomatoes">
                </figure>
            </li>
            <li>
                <figure class="meal-photo">
                    <img src="imgs/food5.jpg" alt="Chicken breast steak with vegetables">
                </figure>
            </li>
            <li>
                <figure class="meal-photo">
                    <img src="imgs/food7.jpg" alt="Autumn pumpkin soup">                      
                </figure>
            </li>
        </ul>
		
    </section>

</div>
</section>

<!---------------------------Testimonials------------------>

<section class="section-testimonials">
        <div class="row">
            <h2>Our customers can't live without us</h2>
        </div>
        <div class="row">
            <div class="col span-1-of-3">
                <blockquote>
                    MY KITCHEN is just awesome! I just launched a startup 
                    which leaves me with no time for cooking, so MY KITCHEN
                    is a life-saver. Now that I got used to it, I couldn't 
                    live without my daily meals!
                    <cite><img src="imgs/food5.jpg" alt="Customer">Dechasa Shimelis</cite>
                </blockquote>
            </div>
            <div class="col span-1-of-3">
                <blockquote>
                    Inexpensive, healthy and great-tasting meals, delivered 
                    right to my home. We have lots of food delivery here in 
                    Adama, but no one comes even close to MY KITCHEN. Me and my 
                    family are so in love!
                    <cite><img src="imgs/food4.jpg" alt="Customer">Dawit Dereje</cite>
                </blockquote>
            </div>
            <div class="col span-1-of-3">
                <blockquote>
                    I was looking for a quick and easy food delivery service 
                    in Adama. I tried a lot of them and ended up with 
                    MY KITCHEN. Best food delivery service in Adama. 
                    Keep up the great work!
                    <cite><img src="imgs/food6.jpg" alt="Customer">Anasimos Tesifaye</cite>
                </blockquote>
            </div>
        </div>
    </section>
	
	
	<!-------------------------contact us -------------------->
	
	<div class="container">
	<section class="section-form">
        <div class="row">
            <h2>We're happy to hear from you</h2>
        </div>
        <div class="row">
            <form mthod="post" action="#" class="contact-form">
                <div class="row">
                    <div class="col span-1-of-3">
                        <label for="name">Name</label>
                    </div>
                    <div class="col span-2-of-3">
                        <input type="text" name="name" id="name" placeholder="Your name" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col span-1-of-3">
                        <label for="email">Email</label>
                    </div>
                    <div class="col span-2-of-3">
                        <input type="email" name="email" id="email" placeholder="Your email" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col span-1-of-3">
                        <label for="find-us">How did you find us?</label>
                    </div>
                    <div class="col span-2-of-3">
                        <select name="find-us" id="find-us">
                            <option value="friends" selected>Friends</option>
                            <option value="search">Search Engine</option>
                            <option value="ad">Advertisement</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col span-1-of-3">
                        <label for="">Newsletter?</label>
                    </div>
                    <div class="col span-2-of-3">
                        <input type="checkbox" name="news" id="news" checked> Yes, please.
                    </div>
                </div>
                <div class="row">
                    <div class="col span-1-of-3">
                        <label for="">Drop us a line</label>
                    </div>
                    <div class="col span-2-of-3">
                        <textarea name="message" placeholder="Your message"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col span-1-of-3">
                        <label for="">&nbsp;</label>
                    </div>
                    <div class="col span-2-of-3">
                        <input type="submit" value="Send it!">
                    </div>
                </div>
            </form>
        </div>
    </section>

</div>


  
   </body>
   
   
   <footer>
        <div class="row">
            <div class="col span-1-of-2">
                <ul class="footer-nav">
				    <li><a href="#">Home</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">Testimonials</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
            
        </div>
        <div class="row">
            <p>
                Copyright &copy; 2020 MY KITCHEN. All rights reserved.
            </p>
        </div>
    </footer>

</html>