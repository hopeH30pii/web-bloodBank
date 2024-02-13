<!DOCTYPE html>
<html lang = "en"> 
    <header>
        <meta charset="UTF-8">
        <meta http-equiv="x-UA-compatible" content="IE=edge">
        <meta name="viewport" contet="width=device-width,initial-scale=1.0" >
         <title> Home page </title>
         <link rel="stylesheet" href="css/temp.css">
         <link rel="stylesheet" href="css/all.min.css">
         <link rel="stylesheet" href="css/normalze.css">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
         <link rel="preconnect" href="https://fonts.googleapis.com">
         <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
         <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cairo:wght@700&display=swap">
    
         @yield('css')
    
    </header>
    <body>

        <!--header top-->
<div class="header-1">
    <div class="container-1">
          <div id="available">
              <h3 style="color:#A52A2A; padding-left:1em; padding-top:0.5em;" > Available 12 hours</h3>
          </div>
          @if(session('loggedIn'))
          <!-- Nav bar for logged in user -->
<nav class="navy">
      <ul >
      
              <li><a  href="#">{{ session('user')->name }}</a>
                  
              </li>
              <br>
              <li>
              <a href="/logout">Logout</a>                           
              </li>
           
      </ul>
  </nav>
  @else
  <!-- Nav bar for guest -->
<nav class="navy">
<ul>
  <li class="align-right"><a @class(['active'=>Request::is('login')]) href="/login">Login</a></li>
  <li><a @class(['active'=>Request::is('register')]) href="/register">Register</a></li>
  {{-- <li><a @class(['active'=>Request::is('Admin')]) href="/loginadmin">Admin</a></li> --}}
</ul>
</nav>
@endif
    </div>
</div>
<!--header top--> 
        
       <!-- start header-->
       <header>
           <div class="container">
               <div id="logo">
                   <h1> Blood Bank </h1>
               </div>
           <nav>
               <ul>
                   <li> <a href="/Home"> Home </a></li>
                   <li> <a href="/Services"> Services </a></li>
                   <li> <a href="/about"> About </a></li>
                   <li> <a href="/appointment"> Make Donation </a></li>
                   <li> <a href="/contact"> Contact US </a></li>
                   
               </ul>
           </nav>
       </div>
    </header>
       <!-- end header-->
       <br>
       <!--start landing section-->
     <main>
        @yield('main')
     </main>
       <!--end landing section-->

    </body>
    <footer class="footer">

        <div class="container" action="/Home">
            <div class="row">
                <div class="footer-col">
                    <h4>Company</h4>
                    <ul>
                        <li> <a href="/Home"> Home </a></li>
                        <li> <a href="/Services."> Services </a></li>
                        <li> <a href="/about"> About </a></li>
                        <li> <a href="/appointment"> Make Donation </a></li>
                        <li> <a href="/contact"> Contact US </a></li>
                    </ul>
    
                </div>
                <div class="footer-col">
                    <h4>Contact</h4>
                    <ul>
                        <li><label>Email</label><a href="#">erc@egyptianrc.org</a></li>
                        <li><label>Phone</label><a href="#"> +(20) 2 25985555</a></li>
                        <li><label>Address</label><a href="#"> Abd El Razak El Sanhouri St., Nasr City, Cairo, 11371,Egypt</a></li>
                    </ul>
    
                </div>
                <div class="footer-col">
                    <h4>Social Connect</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                       
                    </div>
    
                </div>
                <div class="outer-footer">
                  <p>copyright @copy; webcoding pro. All Rights Reserved</p> 
    
                </div>
    
               
                
            </div>
        </div>
    </footer>
</html>