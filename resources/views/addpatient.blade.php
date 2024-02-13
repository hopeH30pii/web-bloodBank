<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Doctor-Dashboard</title>
        <link rel="stylesheet"href="css/addpatient.css" />
        <link rel="stylesheet" href="all.min.css">
        <style>
           .span1{
               color:gray;
           }
        </style>
    </head>
    <body>
        <div class="content">
        <div id="mysideNav" class="sideNav">
            <p class="logo">HIS<span class="menu">&#9776;</span></p>
            <p class="logo1"><span class="menu1">&#9776;</span></p>
            <a href="/HIS" href="../doctor dashboard.php" class="icon-a"><i class="fas fa-chart-line"></i>&nbsp;
                &nbsp;<span class="span">Dashboard</span></a>
                <a href="#" href="../appoinment/doctor dashboard.php" class="icon-a"><i class="far fa-calendar-check"></i>&nbsp;
                 &nbsp;<span class="span" >Appointment History</span></a>
                <a href="#" href="../addpatient/addpatient.php" class="icon-a"><i class="fas fa-user-injured"></i>&nbsp;
                &nbsp;<span class="span">Patients</span></a>
                <a href="#" href="../search/doctor dashboard.php" class="icon-a"><i class="fa fa-search icons"></i>&nbsp;
                &nbsp;<span class="span"> Search</span></a>
            

        </div>
        <div id="main">
    


            <div class="head">
                <div class="col-div-6">
        <p class="nav"> Hospital HIS</p>
        
        </div>
            
            <div class="col-div-6">
                
                
            <div class="profile">
        
                <img src="/img/patientt.png" class="pro-img" />
                <p>Add Donor <i class="fa fa-ellipsis-v dots" aria-hidden="true"></i></p>
                <div class="profile-div">
                    <p><i class="fa fa-user"></i> &nbsp;&nbsp;Profile</p>
                    <p><i class="fa fa-cogs"></i> &nbsp;&nbsp;Settings</p>
                    <p><i class="fa fa-power-off"></i> &nbsp;&nbsp;Log Out</p>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
       </div>
    
        <div class="clearfix"></div>
        <br/>
        <div class="sec">
            <p> <span class="hs">PATIENT</span> | ADD PATIENT</p>
        </div>
        <div  class ="content1" >
            <form method="POST" action="/addpatient">
                @csrf
                @if (session('error'))
                <p class="error">{{session('error')}}</p>   @endif
              <label for="fname">Patient First Name</label>
              <input type="text" id="fname" name="fname" placeholder="Your name.." value="{{old('fname')}}" required>
              @error('fname')<p class="error">{{$message}}</p>@enderror
          
              <label for="lname">Patient Last Name</label>
              <input type="text" id="lname" name="lname" placeholder="Your last name.." value="{{old('lname')}}" required>
              @error('lname')<p class="error">{{$message}}</p>@enderror
          
              <label for="gender" id="gender"><b>Gender</b></label><br><br>
              @error('gender')<p class="error">{{$message}}</p>@enderror
             <label class="miro-radiobutton">
            <input type="radio" value="m" name="gender" checked>
           <span class="span1" >Male</span>
          </label>
        <label class="miro-radiobutton">
          <input type="radio" value="f" name="gender">
          <span class="span1">Female</span>
         </label><br><br>
              <label for="email">Patient E-mail</label>
              <input type="text" id="email" name="email" placeholder="Your E-mail.." value="{{old('email')}}" required>
              @error('email')<p class="error">{{$message}}</p>@enderror

              <label for="address">Patient Address</label>
              <input type="text" id="address" name="address" placeholder="Your Address.." value="{{old('address')}}">
              @error('address')<p class="error">{{$message}}</p>@enderror
              <label for="email">Patient Age</label>
              <input type="text" id="age" name="age" placeholder="Your Age.." value="{{old('age')}}">
              @error('age')<p class="error">{{$message}}</p>@enderror
              <label for="email">Medical History </label><br>
              <input type="text" id="history" name="history" placeholder=" your History.." value="{{old('history')}}" required>
              @error('history')<p class="error">{{$message}}</p>@enderror

              <input type="submit" value="ADD">
            </form>
          </div>
          
          </body>
        
        

    </div>
    </div> 
    </body>
</html>