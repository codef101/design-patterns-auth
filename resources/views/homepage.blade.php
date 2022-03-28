
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POP Bookstore</title>
    
    <!--swipes left and right-->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/home-page.css')}}">
   
</head>
<body>
    
<header class="header">    
@include('_shared.header')
</header>
<!------------------------------------------------------------------------------------>

<!--Login Form-->
<div class="login-form-container">

    <div id="close-login-btn" class="fas fa-times"></div>
	<h1> <?php $total_attempts=isset($_SESSION['login_attempt'])?$_SESSION['login_attempt']:0; ?> </h1>
<?php 



?>

    <form class="login"  method="post" action="{{url('/login')}}" >
    {{ csrf_field() }} 
        <h3>Sign In</h3>
		<p id="timeLeft"></p>
	<?php
		  if (isset($_GET["error"])&&$_GET["error"] == "wronglogin") {
            ?>
			
			<p class='error' style=''>Incorrect Login Information! (<?php echo $total_attempts; ?>)</p>     <?php
		} ?>	
        <span>Email</span>
        <input type="email" name="email" class="box" placeholder="Enter your email" id=""> <!--logEmail-->
        <span>Password</span>
        <input type="password" name="password" class="box" placeholder="Enter your password" id="myPassword"> <!--logPwd-->
        <div class="checkbox">
            <input type="checkbox" name="" id="show-password" onclick="showPassword()">
            <label for="show-password">Show password</label>
        </div>
        <input  type="submit" value="Sign In" class="btn" name="submit">
        <p>Forget password?&nbsp;<a class="forget_passwrod_btn" href="#">Click here</a></p>
        <p>Not a member?&nbsp;<a href="register">Create one here</a></p>
        <br/>
        <h3 style="font-size: 20px; text-align: center;">OR</h3>
        <br/>
        <p>Are you an admin?&nbsp;<a href="#" style="color: red; text-decoration: underline;">Sign in here</a></p>
    </form>
    
	<form action="login.php" method="POST" class="forget_pass" style="display:none">
        <h3>Reset Password</h3>
		<p id="timeLeft"></p>
				
        <span>Email</span>
        <input type="email" name="email" class="box" placeholder="Enter your email" id="" required> <!--logEmail-->
        <span>Password</span>
        <input type="password" name="password" class="box" placeholder="Enter your password" id="myPassword" required> <!--logPwd-->
		<span>Confirm Password</span>
         <input type="password" class="box" placeholder="Re-enter your password" name="cmpPassword" required>  <!--cmpPassword-->
				
        <input  type="submit" value="Reset" class="btn" name="forget_pass">
        <p>Go Back to Login?&nbsp;<a class="go_back_btn" href="#">Click here</a></p>
        <p>Not a member?&nbsp;<a href="register-page.php">Create one here</a></p>
        <br/>
        <h3 style="font-size: 20px; text-align: center;">OR</h3>
        <br/>
        <p>Are you an admin?&nbsp;<a href="#" style="color: red; text-decoration: underline;">Sign in here</a></p>
    </form>
	

</div>

<!------------------------------------------------------------------------------------>


    
<!--special news-->
<section class="home" id="home">

    <div class="row">

        <div class="content">
            <h3>Up to 75% off right now</h3>
            <p>Get your favorite books right now. These books are mostly recommended by our clients and we are doing special timed offers right now. 
                So, grab or regret!</p>
        </div>

        <div class="swiper books-slider">
            <div class="swiper-wrapper">
                <a href="books-collections.php" class="swiper-slide"><img src="{{asset('assets/img/book1.png')}}" alt=""/></a>
                <a href="books-collections.php" class="swiper-slide"><img src="{{asset('assets/img/book2.png')}}" alt=""/></a>
                <a href="books-collections.php" class="swiper-slide"><img src="{{asset('assets/img/book3.png')}}" alt=""/></a>
                <a href="books-collections.php" class="swiper-slide"><img src="{{asset('assets/img/book4.png')}}" alt=""></a>
                <a href="books-collections.php" class="swiper-slide"><img src="{{asset('assets/img/book5.png')}}" alt=""></a>
                <a href="books-collections.php" class="swiper-slide"><img src="{{asset('assets/img/book6.png')}}" alt=""></a>
            </div>
            <img src="{{asset('assets/img/stand.png')}}" class="stand" alt="">
        </div>

    </div>
    
</section>
<!------------------------------------------------------------------------------------>

<!--special function-->
<section class="icons-container">

    <div class="icons">
        <i class="fas fa-shipping-fast"></i>
        <div class="content">
            <h3>Free shipping overseas</h3>
            <p>Order over 100$ worth of books</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-user-plus"></i>
        <div class="content">
            <h3>POP Membership Rewards</h3>
            <p>Be a part of our community for exclusive offers and rewards</p>
        </div>
    </div>

    <div class="icons" style="margin-left: 60px;">
        <i class="fas fa-redo-alt"></i>
        <div class="content">
            <h3>Easy Return</h3>
            <p>7 days return</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-headset"></i>
        <div class="content">
            <h3>Customer Support</h3>
            <p>Facing a problem? Contact Us Anytime</p>
        </div>
    </div>

</section>
<!------------------------------------------------------------------------------------>

<!--featured book-->
<section class="featured" id="featured">

    <h1 class="heading"> <span>Featured Books</span> </h1>

    <div class="swiper featured-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="books-collections.php" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="{{asset('assets/img/featured1.png')}}" alt="">
                </div>
                <div class="content">
                    <h3>George Orwell 1984</h3>
                    <div class="price">RM12.99</div>
                    <a href="#" class="btn">Add to Cart</a>
                </div>
            </div>
            
            <div class="swiper-slide box">
                <div class="icons">
                    <a href="{{url('books-collections')}}" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="{{asset('assets/img/featured2.png')}}" alt="">
                </div>
                <div class="content">
                    <h3>The Necklace</h3>
                    <div class="price">RM15.99</div>
                    <a href="#" class="btn">Add to Cart</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="{{url('books-collections')}}" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="{{asset('assets/img/featured3.png')}}" alt="">
                </div>
                <div class="content">
                    <h3>Red Clocks</h3>
                    <div class="price">RM20.99</div>
                    <a href="#" class="btn">Add to Cart</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="{{url('books-collections')}}" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="{{asset('assets/img/featured4.png')}}" alt="">
                </div>
                <div class="content">
                    <h3>Catch the Sparrow</h3>
                    <div class="price">RM8.99</div>
                    <a href="#" class="btn">Add to Cart</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="{{url('books-collections')}}" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="{{asset('assets/img/featured5.png')}}" alt="">
                </div>
                <div class="content">
                    <h3>The Dangerous Book of Heroes</h3>
                    <div class="price">RM29.99</div>
                    <a href="#" class="btn">Add to Cart</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="{{url('books-collections')}}" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="{{asset('assets/img/featured6.png')}}" alt="">
                </div>
                <div class="content">
                    <h3>Ghostbusters</h3>
                    <div class="price">RM24.99</div>
                    <a href="#" class="btn">Add to Cart</a>
                </div>
            </div>
           
            </div>

        </div>

    </div>

</section>

<!------------------------------------------------------------------------------------>

<!--newsletter-->

<section class="newsletter">

    <form action="{{url('/')}}" method="POST">
        <h3>Subscribe To Our Newsletter Now For Latest Updates</h3>
        <?php 
            $userEmail = "";
            if (isset($_POST['subscribe'])) {
                $userEmail = $_POST['subEmail'];
                if (filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
                    $subject = "Thanks for Subscribing to our newsletter - POP BOOKSTORE ";
                    $message = "Thanks for your subscription to our newsletter. You'll always receive latest updates from us. We won't share or sell your information.";
                    $sender = "From: seantan867@gmail.com";
                    
                    if (mail($userEmail, $subject, $message, $sender)) {
                        ?>
                            <div class="alert success" style="font-size: 15px; color: green">Thanks for subscribing us. 
                                A notification has been send to your email.</div>
                        <?php
                        $userEmail = "";
                    }
                    else {
                        ?>
                            <div class="alert fail" style="font-size: 15px; color: red;">Failed while sending to email.</div>
                        <?php
                    }
                        
                }
                else {
                    ?>
                    <div class="alert fail" style="font-size: 15px; color: red;"> <?php echo $userEmail ?> is not a valid email </div>
                    <?php
                }
            }
        ?>
        <input type="text" name="subEmail" placeholder="Enter your email here" class="box" required value=" <?php echo $userEmail ?> ">
        <input type="submit" value="subscribe" class="btn" name="subscribe">      
    </form>

</section>

<!------------------------------------------------------------------------------------>

<!--new arrivals-->

<section class="arrivals" id="arrivals">

    <h1 class="heading"> <span>New Arrivals</span> </h1>

    <div class="swiper arrivals-slider">

        <div class="swiper-wrapper">

            <a href="{{url('books-collections')}}" class="swiper-slide box">
                <div class="image">
                    <img src="{{asset('assets/img/book1.png')}}" alt="">
                </div>
                <div class="content">
                    <h3>Percy Jackson and The Lightning Thief</h3>
                    <div class="price">RM20.99 <span>RM25.99</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </a>

            <a href="{{url('books-collections')}}" class="swiper-slide box">
                <div class="image">
                    <img src="{{asset('assets/img/book2.png')}}" alt="">
                </div>
                <div class="content">
                    <h3>The Throne of Fire</h3>
                    <div class="price">RM23.99 <span>RM30.99</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </a>

            <a href="{{url('books-collections')}}" class="swiper-slide box">
                <div class="image">
                    <img src="{{asset('assets/img/book3.png')}}" alt="">
                </div>
                <div class="content">
                    <h3>Untamed</h3>
                    <div class="price">RM9.99 <span>RM16.99</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </a>

        </div>

    </div>

    <div class="swiper arrivals-slider">

        <div class="swiper-wrapper">
            
            <a href="{{url('books-collections')}}" class="swiper-slide box">
                <div class="image">
                    <img src="{{asset('assets/img/book4.png')}}" alt="">
                </div>
                <div class="content">
                    <h3>To Best the Boys</h3>
                    <div class="price">RM15.99 <span>RM30.99</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

            <a href="{{url('books-collections')}}" class="swiper-slide box">
                <div class="image">
                    <img src="{{asset('assets/img/book5.png')}}" alt="">
                </div>
                <div class="content">
                    <h3>Big Magic</h3>
                    <div class="price">RM18.99 <span>RM27.99</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </a>

            <a href="{{url('books-collections')}}" class="swiper-slide box">
                <div class="image">
                    <img src="{{asset('assets/img/book6.png')}}" alt="">
                </div>
                <div class="content">
                    <h3>Daisy and The Crimson Rose</h3>
                    <div class="price">RM25.99 <span>RM34.99</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </a>
            
        </div>

    </div>

</section>
<!------------------------------------------------------------------------------------>

<!--special deal-->
<section class="deal">

    <div class="content">
        <h3>Book of The Day</h3>
        <h1>Up to 50% Off</h1>
        <h2 style="text-decoration: line-through;">Original Price: RM20.99</h2>
        <h2>Now: RM10.99</h2>
        <a href="#" class="btn">Buy Now</a>
    </div>

    <div class="image">
        <img src="{{asset('assets/img/deal-img.jpg')}}" alt=""/>
    </div>

</section>
<!------------------------------------------------------------------------------------>

<!--review-->

<section class="reviews" id="reviews">

    <h1 class="heading"> <span>Our Client's Reviews</span> </h1>

    <div class="swiper reviews-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="{{asset('assets/img/review1.png')}}" alt="">
                <h3>Brook</h3>
                <p>This website has been user friendly to me all the time. I can find all the books I wanted to find. Definitely recommended. Cheers :D </p>
                <br/><br/>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="{{asset('assets/img/review2.png')}}" alt="">
                <h3>Alan Walker</h3>
                <p>As a music producer, sometimes I would like to read books regarding music in my free time. 
                    This is where I came across with this website. I can find the music books I wanted to find.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="{{asset('assets/img/review3.png')}}"} alt="">
                <h3>Ong</h3>
                <p>Overall this website has been doing good so far. Just sometimes I couldn't find the books I wanted to find since the variety of books is not that wide. 
                    Hope this can be improved in the future.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<!------------------------------------------------------------------------------------>

<!--blog-->

<section class="blogs" id="blogs">

    <h1 class="heading"> <span>Our Blogs</span> </h1>

    <div class="swiper blogs-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <div class="image">
                    <img src="{{asset('assets/img/blog1.jpg')}}" alt="">
                </div>
                <div class="content">
                    <h3>Book Is The Chicken Soup of Our Soul</h3>
                    <p>Reading books teach us the way of the life. Helping us to calm our soul and mind at the same time.</p>
                    <a href="#" class="btn">Read More</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="image">
                    <img src="{{asset('assets/img/blog2.jpg')}}" alt="">
                </div>
                <div class="content">
                    <h3>Finding Yourself In Books</h3>
                    <p>Find your true-self by reading more books. Books can help you to find your inner-self that we are unconscious of.</p>
                    <a href="#" class="btn">Read More</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="image">
                    <img src="{{asset('assets/img/blog3.jpg')}}" alt="">
                </div>
                <div class="content">
                    <h3>Aspire To Inspire Before We Expire</h3>
                    <p>Reading books guide us to aspire something. When we aspired, then we can inspire. Do this before we expired and regret it.</p>
                    <a href="#" class="btn">Read More</a>
                </div>
            </div>

        </div>

    </div>

</section>
<!------------------------------------------------------------------------------------>

<!--Footer-->
<section class="footer" >

    <div class="box-container">

        <div class="box">
            <h3>Our Location</h3>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Malaysia </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> USA </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Japan </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Germany </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Singapore </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Russia </a>
        </div>

        <div class="box">
            <h3>Quick Links</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> Events </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Special Offer </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Write For Us </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Book Publishing </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Book Collections </a>
        </div>

        <div class="box">
            <h3>About Us</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> Our Story </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Our Services </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Payment Methods </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Privacy Policy </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Terms & Conditions </a>
        </div>

        <div class="box">
            <h3>Contact Us</h3>
            <a href="#"> <i class="fas fa-phone"></i> +60 176388500 </a>
            <a href="#"> <i class="fas fa-envelope"></i> seantan867@gmail.com </a>
            <a href="#"> <i class="fas fa-comments"></i> Live Chat </a>
            <img src="{{asset('assets/img/worldmap.png')}}" class="map" alt="">
        </div>
        
    </div>

    <div class="share">
        <h style="font-size: 30px;">Follow Us On &nbsp;</h>
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
    </div>

    <div class="credit"> created by <span>Team 2</span> | All Rights Reserved! </div>

</section>
<?php 
	
    if (isset($_GET["error"])) { ?>
		<script>
		
		/*login form*/
let loginForm1 = document.querySelector('.login-form-container');


  loginForm1.classList.toggle('active');

		</script>
	<?php 
       
    }
?>
<!------------------------------------------------------------------------------------>

<!-- when page load animation  -->
<div class="loader-container">
    <img src="{{asset('assets/img/loader-img.gif')}}" alt="">
</div>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="{{asset('assets/js/home-page.js')}}"></script>

<!-- php javascript link  -->
<!--------------------------->
<script>
 
 

	
	 <?php if($total_attempts >=3){ 
			$_SESSION['login_attempt']=0;
	 ?>
	
    document.getElementsByName("submit")[0].disabled = true;
	var countdownNum = 30;
        incTimer();
    setTimeout(function(){  
        var element = document.getElementsByName("submit")[0] ;
        element.disabled = false;
    }, 30000);
	
	  

        function incTimer(){
        setTimeout (function(){
            if(countdownNum != 0){
            countdownNum--;
            document.getElementById('timeLeft').innerHTML = 'Login Disabled for: ' + countdownNum + ' seconds';
            incTimer();
            } else {
            document.getElementById('timeLeft').innerHTML = 'Ready!';
            }
        },1000);
        }
	 <?php } ?>

 
       
    </script>


</body>
</html>