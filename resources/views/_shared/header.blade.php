<div class="header-1">
        <a href="{{url('/')}}" class="logo"><img src="{{asset('assets/img/logo.png')}}" alt="" style="width: 25%; height: 25%;"></a>
        
<!--search form-->
        <form action="" class="search-form">
            <input type="search" name="" placeholder="Search books here . . . . . ." id="search-box">
            <label for="search-box" class="fas fa-search"></label>
        </form>
<!------------------------------------------------------------------------------------>

<!--favorite/cart/profile icon-->
        <div class="icons">
            <div id="search-btn" class="fas fa-search"></div>
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-shopping-cart"></a>            

            @if(isset($layout))
                @if($layout=='profile')          
             <a title="Go To Profile" href="{{url('/profile-page')}}"><i class="fas fa-user"></i></a>
             <p id="login-btn"></p>
             @endif
            @else            
            <div id="login-btn" class="fas fa-user"></div>
            @endif
           
        </div>
    </div>
<!------------------------------------------------------------------------------------>

<!--nav bar-->
    <div class="header-2">
        <ul class="navbar">
            <li><i class="fa fa fa-home"></i><a href="{{url('/')}}" style="color: white">Home</a></li>
            <li><i class="fa fa-newspaper"></i><a href="{{url('/#featured')}}" style="color: white;">Featured</a></li>
            <li><i class="fa fa fa-book"></i><a href="{{url('/#arrivals')}}" style="color: white;">New Arrivals</a></li>
            <li><i class="fa fa-search"></i><a href="{{url('/#reviews')}}" style="color: white;">Reviews</a></li>
            <li><i class="fa fa-blog"></i><a href="{{url('/#blogs')}}" style="color: white;">Blogs</a></li>
            <li><i class="fab fa-stack-overflow"></i><a href="{{url('/booking')}}" style="color: white;">Books</a></li>
            <li><i class="fas fa-users"></i><a href="/#" style="color: white;">Membership</a></li>
            <li><i class="fas fa-gift"></i><a href="/#" style="color: white;">Rewards</a></li>
        </ul>
    </div>