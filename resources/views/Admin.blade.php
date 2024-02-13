<!DOCTYPE html>
<html lang = "en"> 
    <header>
        <meta charset="UTF-8">
        <meta http-equiv="x-UA-compatible" content="IE=edge">
        <meta name="viewport" contet="width=device-width,initial-scale=1.0" >
         <title> Admin page </title>
         <link rel="stylesheet" href="/css/Admin.css">
         <link rel="stylesheet" href="/css/all.min.css">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
    </header>
    <body>

 <!--  -->
<div class="header-1">
    @if (session('success_message'))
    <p class="success">{{session('success_message')}}</p>
    @endif
    <div class="container-1">
        <div id="logo">
         
            @if(session('loggedInAsAdmin'))
        <!-- Nav bar for logged in user -->
<nav class="navy">
    <ul >
    
            <li><a  href="#">{{ session('user')->name }}</a>
                
            </li>
            <br>
            <li>
            <a href="/Adminlogout">Logout</a>                           
            </li>
         
    </ul>
</nav>
@endif
            <h1> Blood Bank DataBase </h1>
        </div>
        
    </div>
</div>
<br>
<br>
       <header>
        
            @csrf
            @if(session('error'))<p class="error">{{session('error')}}</p> @endif
              
      
    </header>
    
       <br>
       <!--content  -->
      <div class="buttons"> 
        <button class="btn btn--primary btn--block"><a href="/myappointment">Appointments</button>
        <button class="btn btn--secondary btn--block"><a href="/mycontact">contacts</button>
      </div>


    </body>
    
   
</html>