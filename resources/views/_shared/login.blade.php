
<div id="close-login-btn" class="fas fa-times"></div>
	<h1> <?php $total_attempts=isset($_SESSION['login_attempt'])?$_SESSION['login_attempt']:0; ?> </h1>


    <form class="login"  method="post" action="{{url('/login')}}" >
    {{ csrf_field() }} 
        <h3>Sign In</h3>
		<p id="timeLeft"></p>
        <?php if (isset($_GET["error"])&&$_GET["error"] == "wronglogin") {
            ?>			
			<p class='error' style=''>Incorrect Login Information! (<?php echo $total_attempts; ?>)</p>  
        <?php } ?>
        <span>Email</span>
        <input type="email" name="email" class="box" placeholder="Enter your email" id=""> 
                        @error('email')
                            <p style="color:red;">{{ $message}}</p>
                        @enderror
        <!--logEmail-->
        <span>Password</span>
        <input type="password" name="password" class="box" placeholder="Enter your password" id="myPassword"> 
                 @error('password')
                    <p style="color:red;">{{ $message}}</p>
                 @enderror
        <!--logPwd-->
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