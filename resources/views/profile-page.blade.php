<?php session_start();?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Profile Page</title>

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="{{asset('assets/css/profile-page.css')}}" rel='stylesheet'>
    
     
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
        <img class="icon" src="{{asset('assets/img/logo.png')}}" style="height: 8 0%; width: 30%">
        <div class="logo_name"><a href="{{url('/')}}" style="text-decoration: none; color: white;">&nbsp;&nbsp;POP<br/>&nbsp;&nbsp;Bookstore</a></div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
          <i class='bx bx-search' ></i>
         <input type="text" placeholder="Search...">
         <span class="tooltip">Search</span>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
         <span class="tooltip">Dashboard</span>
      </li>
      <li>
       <a href="#">
         <i class='bx bx-user' ></i>
         <span class="links_name">Profile</span>
       </a>
       <span class="tooltip">Profile</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-cart-alt' ></i>
         <span class="links_name">Order History</span>
       </a>
       <span class="tooltip">Order</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-heart' ></i>
         <span class="links_name">Favorites</span>
       </a>
       <span class="tooltip">Favorites</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-cog' ></i>
         <span class="links_name">Setting</span>
       </a>
       <span class="tooltip">Setting</span>
     </li>
     <li class="profile">
         <div class="profile-details">
             <img src="{{asset('assets/img/profile-icon.jpg')}}" alt="profileImg">
           <div class="name_job">
             <div class="name">{{ Auth::user()->name }}</div> <!---Display Username from logged in user--->
             <div class="job">{{Auth::user()->email}}</div> <!---Display Email from logged in user--->
           </div>
         </div>
         <span class="log_out"><a href="{{url('logout')}}"><i class="bx bx-log-out"></i></a></span>
     </li>
    </ul>
  </div>
  <section class="home-section">
      <div class="text">Dashboard Here.</div>
  </section>
  <script src="{{asset('assets/js/profile-page.js')}}"></script>
    
</body>
</html>
