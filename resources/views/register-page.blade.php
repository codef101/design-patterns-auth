<?php session_start();?>
<html>
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
    <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/home-page.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/register-page.css')}}">
</head>

<body>
    <header class="header">
        @include('_shared.header')      
    </header>
<!------------------------------------------------------------------------------------>

<!--login form-->
<div class="login-form-container">
    @include('_shared.login') 
</div>
<!------------------------------------------------------------------------------------>
    
<!--Register Form-->

<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

<div class="wrapper" style="background-image: url('{{asset('assets/img/register-bg.jpg')}}');">
			<div class="inner">
                            <form action="{{url('/signup')}}" method="POST">
    {{ csrf_field() }} 
					<h3>User Registration</h3>
    <?php if (isset($_GET["error"]) && $_GET["error"] == "none"){?>
        <div class='error'>Register Successfully</div>
        <?php }?>
                                        <div class="form-wrapper">
						<label for="">Username</label>
                                                <input type="text" class="form-control" placeholder="Enter your username" name="name"  > <!--username-->
                                                @error('name')
                                                <p style="color:red;">{{ $message}}</p>
                                                @enderror
                                        </div>
					<div class="form-wrapper">
						<label for="">Email</label>
                                                <input type="text" class="form-control" placeholder="Enter your email" name="email"> <!--email-->
                                                @error('email')
                                                <p style="color:red;">{{ $message}}</p>
                                                @enderror
					</div>
					<div class="form-wrapper">
						<label for="">Password</label>
                                                <input type="password" class="form-control" placeholder="Enter your password" name="password" > <!--password-->
                                                @error('password')
                                                <p style="color:red;">{{ $message}}</p>
                                                @enderror
                                            </div>                       
					<div class="form-wrapper">
						<label for="">Confirm Password</label>
                                                <input type="password" class="form-control" placeholder="Re-enter your password" name="password_confirmation" >  <!--cmpPassword-->
                                                @error('password')
                                                <p style="color:red;">{{ $message}}</p>
                                                @enderror
                                            </div>
					<div class="checkbox">
                                            <label style="font-size:16px;">
                                                    <input type="checkbox" required> &nbsp;I accept the 
                                                    <a href="#" style="text-decoration: underline;">Terms of Use</a> & <a href="#" style="text-decoration: underline;">Privacy Policy</a>
						</label>
					</div>
                                        <button name="register">Register Now</button>
				</form>
			</div>
    
</div>


<!------------------------------------------------------------------------------------>

<!--Footer-->
<section class="footer">

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
            <img src="image/worldmap.png" class="map" alt="">
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
<!------------------------------------------------------------------------------------>

<script src="{{asset('assets/js/home-page.js')}}"></script>
</body>

</html>
