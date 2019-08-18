<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Baigiamasis</title>
    <link rel="stylesheet" href="css/vaida.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Tinos" rel="stylesheet">
</head>
<body>
<!--Social media sidebar-->
    <div id="icon-bar">
        <a href="https://www.facebook.com/vaida.gaileviciute" class="facebook"><i class="fa fa-facebook-square"></i></a> 
        <a href="https://www.instagram.com/" class="insta"><i class="fa fa-instagram"></i></a> 
        <a href="https://www.tripadvisor.com/" class="trip"><i class="fa fa-tripadvisor"></i></a> 
        <a href="https://www.linkedin.com/" class="linkedin"><i class="fa fa-linkedin"></i></a>
    </div>
    <!--Button that goes to the top on scroll-->
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

    <section id="home">
        <header>
            <nav>
                <ul class="mynav" id="myTopnav">
                    <li><a href="#home" class="active">HOME</a></li>
                    <li><a href="#about">ABOUT</a></li>
                    <li><a href="shop.php">SHOP</a></li>
                    <li><a href="activities.php" target = "_blank">ACTIVITIES</a></li>
                    <li><a href="market.php">MARKET</a></li>
                    <li><a href="#contact">CONTACT</a></li>
                    <li class="icon"><a href="javascript:void(0);" onclick="myFunction()"><i class="fa fa-bars"></i></li></a>
                </ul>
                <div class="clearfix"></div>
            </nav>
        </header> 
        <h1>Green <br> Garden</h1> 
        <h2 class = "myheader2"><img src="img/logo.jpg" alt="logo">The place for happy veggies and animals</h2>
    </section>  

    <section id="about">
    <!--About us info-->
        <div class="aboutus">
            <div class="idea">
                <p> <span>Green Garden</span> This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about your company. Talk about your team and what services you provide. Tell your visitors the story of how you came up with the idea for your business and what makes you different from your competitors. This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about your company. Talk about your team and what services you provide. Tell your visitors the story of how you came up with the idea for your business and what makes you different from your competitors. Open Saturday through Sunday.</p> 
            </div>
            <p class="dash"></p>
        </div>
        <!--Customer testimonial slides-->
        <div class="slideshow-container">
            <div class="mySlides">
                <img src="img/customer1.jpg" alt="customer">
                <q>"I'm a testimonial. Click to edit me and add text that says something nice about you and your services.”</q>
                <p class="customer">- Happy Customer</p>
            </div>
            <div class="mySlides">
                <img src="img/customer2.jpg" alt="customer">
                <q>"I'm a testimonial. Click to edit me and add text that says something nice about you and your services.”</q>
                <p class="customer">- Happy Customer</p>
            </div>
            <div class="mySlides">
                <img src="img/customer3.jpg" alt="customer">
                <q>"I'm a testimonial. Click to edit me and add text that says something nice about you and your services.”</q>
                <p class="customer">- Happy Customer</p>  
            </div>
            <div class="dot-container">
                <span class="dot" onclick="currentSlide(1)"></span> 
                <span class="dot" onclick="currentSlide(2)"></span> 
                <span class="dot" onclick="currentSlide(3)"></span> 
            </div>
        </div>
        <div class="story">
            <p class="dash2"></p>
            <div class="story1">
                <h1>Shop</h1>   
                <p><img class="marketpic" src="img/basket3.jpg"> This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about your company. Talk about your team and what services you provide. This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about your company. Talk about your team and what services you provide.<br><a href="shop.php">More info ></a></p>
            </div>
            <p class="dash2"></p>
            <div class="story1">
                <h1>Activities</h1>   
                <p><img class="marketpic" src="img/tour.jpg"> This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about your company. Talk about your team and what services you provide. This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about your company. Talk about your team and what services you provide.<br><a href="activities.php">More info ></a></p>
            </div>
            <p class="dash2"></p>
            <div class="story1">
                <h1>Market</h1>   
                <p><img class="marketpic" src="img/people2.jpg"> This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about your company. Talk about your team and what services you provide. This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about your company. Talk about your team and what services you provide.<br><a href="market.php">More info ></a></p>
            </div>
            <p class="dash2"></p>
        </div>
        <!--Photo gallery-->
        <div class="gallery1"> 
            <h1>Gallery</h1>
            <div class="photos">
                <div class="photos1">
                    <img src="img/flowers.jpg">   
                    <img src="img/apples.jpg">
                    <img src="img/aguonos.jpg">
                    <img src="img/farm.jpg">   
                    <img src="img/rugiai.jpg">
                    <img src="img/basket7.jpg">
                    <img src="img/sheeps.jpg">
                    <img src="img/child.jpg">
                    <img src="img/people1.jpg"> 
                    <img src="img/kanapes.jpg">
                    <img src="img/customer.jpg">
                    <img src="img/chickens.jpg">
                </div>
                <p>For more photos please follow us on our Instagram! <a href="https://www.instagram.com/" class="insta"><i class="fa fa-instagram"></i></a></p>
            </div> 
        </div>   
    </section>     
    
    <section id="contact">
        <div class="contactpage">
            <div class="form">
                <div class="form1a">
                    <h1>Keep In <br>Touch</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                </div>
            </div>
            <form class="form1">
                <h1>Our Team</h1>
                <div class=infosite1>
                    <div class="infosite">
                        <img src="img/team1.jpg" alt="team">
                        <h2>Fresh Baskets<br> Contact Laura</h2> 
                        <p>laura@greengarden.com <br> 123-456-7890</p>  
                    </div>
                    <div class="infosite">
                        <img src="img/team1.jpg" alt="team">
                        <h2>Weekend Market <br>Contact Lisa</h2> 
                        <p>lisa@greengarden.com <br> 123-456-7890</p>  
                    </div>
                    <div class="infosite">
                        <img src="img/team1.jpg" alt="team">
                        <h2>Events & Feasts <br>Contact Anna</h2> 
                        <p>anna@greengarden.com <br> 123-456-7890</p>  
                    </div>
                </div>
                <h1>General Inquiries</h1>
                <div class="formname">
                    <input type="text" class="name" placeholder="Name*">
                    <input type="text" class="email" placeholder="Email*">
                    <input type="text" class="subject" placeholder="Subject">
                    <input type="text" class="message" placeholder="Message">   
                    <button class="mybtn">Send</button>
                </div>  
            </form>
        </div>
    </section>  
    <section id="footer">
        <div class="bottom">
            <div class="form1">
                <h1><img src="img/logo.jpg" alt="logo"> Join Our Mailing List</h1>
                <p>Never miss an update</p>
                <input type="text" class="email" placeholder="Email*"> 
                <button class="send"> Subscribe now</button>  
                <ul> 
                    <li>Old Town str. 23 - 5, Klaipeda LT-96003</li>
                    <li>info@greengarden.com</li>
                    <li>Tel: +370 816 23235</li>
                    <li>c 2018 by Green Garden</li>
                    <li>Proudly created by <a href="https://www.facebook.com/vaida.gaileviciute">Vai2Ga</a></li>
                </ul>
            </div>
        </div>
    </section>

<script src="myScript1.js"></script> 
<script src="myScript2.js"></script> 
<script src="myScript.4.js"></script>

</body>
</html>