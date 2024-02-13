<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/BloodBank.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Services</title> 
    
 </head>
 <body>
  <!-- start header-->
  <header>
    <!--header top-->
<div class="header-1">
    <div class="container-1">
          <div id="available">
              <!-- <h3> Available 12 hours</h3>-->
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
  <li><a @class(['active'=>Request::is('register')]) href="/patient">Register</a></li>
</ul>
</nav>
@endif
    </div>
</div>
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
@csrf
@if(session('error'))<p class="error">{{session('error')}}</p> @endif
  <div class="one"> 
     <p><h1  style="text-align:center; padding-right:80px; font-size:7em; cursor:pointer;  font-weight:lighter">Services</h1></p>
    </div>
    
    <div class="row">
    <div class="gallery">
      <a target="_blank" href="/img/img1.png">
        <img src="/img/img1.png" alt="error" >
      </a>
      <div class="desc"><h1> Diagnostic Test </h1>
          <p > What is diagnostic test and example?
            Diagnostic assessment examples include pre-assessment tests that give you a snapshot of or diagnose knowledge to screen students. For instance, if a teacher wants to start a lesson on two-digit multiplication with young pupils, they can use diagnostic assessment to make sure the lesson is delivered well </p></div>
    </div>
    
    <div class="gallery">
      <a target="_blank" href="/img/img2.webp">
        <img src="/img/img2.webp" alt="error" >
      </a>
      <div class="desc"><h1> Provision of platelets </h1>
          <p> Platelets are tiny cells in your blood that form clots and stop bleeding. For millions of Americans, they are essential to surviving and fighting cancer, chronic diseases, and traumatic injuries. Every 15 seconds someone needs platelets. Platelets must be used within five days and new donors are needed every day. That’s why we need you.</p></div>
    </div>
    
    <div class="gallery">
      <a target="_blank" href="/img/img3.jpg">
        <img src="/img/img3.jpg" alt="error" >
      </a>
      <div class="desc"><h1>Blood Donation </h1>
          <p> Blood donation is a voluntary procedure that can help save lives.<br> There are several types of blood donation.<br> Each type helps meet different medical need</p></div>
    </div>
  </div>
  <div class="row">
    <div class="gallery">
      <a target="_blank" href="/img/img4.png">
        <img src="/img/img4.png" alt="error">
      </a>
      <div class="desc"><h1>Blood Storage </h1>
        <p>Blood is an excellent culture medium for bacterial growth; <br>therefore it is stored in approved refrigerators at 2-6°C,<br> where it has a shelf life of 35 days from donation.<br> There are legal requirements for temperature regulation<br> and alarm systems for storage of blood.</p></div>
    </div>
    <div class="gallery">
      <a target="_blank" href="/img/serve_.jpeg">
        <img src="/img/serve_.jpeg" alt="error" >
      </a>
      <div class="desc"><h1>Safety Risks</h1>
        <p>Recipient Safety
          Risks for a person receiving blood can be divided into several categories, which include reactions due to incompatible blood types, allergic reactions, and infections in the donated blood. By strictly adhering to standardized procedures, these risks have been reduced to a minimum.</p></div>
    </div>
    <div class="gallery">
      <a target="_blank" href="/img/serve6.jpeg">
        <img src="/img/serve6.jpeg" alt="error" >
      </a>
      <div class="desc"><h1>Blood Type And Matching </h1>
        <p>Blood Type Matching
          On their surface, red cells have inherited chemical structures called antigens that can cause a person’s immune system to make antibodies against them. Humans have 35 major groups or families of these antigens, as well as other minor groups, but consideration of two, the ABO group and the RhD group, is very important to ensure that a transfusion recipient receives compatible blood. The presence of antigens within these groups is what determines a person’s blood type. Blood types are referred to as Type A, Type B, Type AB (which has both A and B antigens), or Type O (which has neither A or B antigens) followed by positive or negative, which indicates the presence of the RhD antigen. Persons who are RhD negative have no RhD antigens</p></div>
    </div>
  </div>
    <br><br><br>
    
   
 </body>
 <footer class="footer">

  <div class="container">
      <div class="row">
          <div class="footer-col">
              <h4>Company</h4>
              <ul>
                  <li> <a href="/Home"> Home </a></li>
                  <li> <a href="/Services"> Services </a></li>
                  <li> <a href="/about"> About </a></li>
                  <li> <a href="/appointment"> Make Donation </a></li>
                  <li> <a href="/contact"> Contact US </a></li>
              </ul>

          </div>
          <div class="footer-col">
              <h4>Contact</h4>
              <ul>
                  <li><label >Email</label><a href="#">erc@egyptianrc.org</a></li>
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
</div>
</footer>
</html>