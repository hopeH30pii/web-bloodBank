{{-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href='https://fonts.googleapis.com/css?family=Lato:300,400|Montserrat:700' rel='stylesheet' type='text/css'>
	<script src="https://kit.fontawesome.com/f5887f9b2d.js" crossorigin="anonymous"></script>
  
	<link rel="stylesheet" href="/css/ThankSignup.css">
    <title>complete signup</title>
    <style>
                table, th, td{
                    border: 1px solid black;
                }
                th, td {
                          padding: 10px;
                        }
                        
                        
                </style>
</head>
<body>
@if(session('loggedIn'))    
    <div class="contain">
        <div class="congrats">
        <div class="one">
			<a href="/logout" class="button">Log out</a>
		</div>
            
            
            <div class="text">
              
                <h2>Appointments</h2>

                
                <table>
                <TABLE ALIGN="Center">
                    <tr>
                    
                        <th>Name</th>
                        <th>bloodType</th> 
                        <th>phone</th>
                        <th>email</th>
                        <th>address</th>
                        <th>symptoms</th>
                       
                        
                          
                         
                    </tr>
                    @foreach($apps as $key => $value)
                    <!--$users is imported from another file,
                    with this function: users = users::all()-->
                    <tr>
                    
                        <td> {{ session('value')->name }}<br></td>
                        <td> {{ session('value')->bloodt }}<br></td>
                        <td> {{ session('value')->phone }}<br></td>
                        <td> {{ session('value')->email}}<br></td>
                        <td> {{ session('value')->address }}<br></td>
                        <td> {{ session('value')->symptoms }}<br></td>
                         
                        
                        
                    </tr>
                    @endforeach
                </table>
                 
                
               
                            
                        
                    </div>
                    
            </div>
        </div>
    </div>    
</div>
@endif
</body>
    </html> --}}

    






















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/show.css">
    <link rel="stylesheet" href="/css/all.min.css">
    <link rel="stylesheet" href="/css/normalize.css">
    <title>Allappointments</title>
</head>
<body>
    <h1>My Appointments</h1>
    
    <table class="box">
        <thead>
            <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Blood Type</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Address</th>
        <th>Symptoms</th>
      
    </tr>
    </thead>
        <tbody>
            @foreach ( $apps as $app)
            <tr>
     
            <td>{{$app->id}}</td>
        
    
            <td>{{$app->name}}</td>
 
      
            <td>{{$app->bloodt}}</td>
     
        
            <td>{{$app->phone}}</td>
        
        
            <td>{{$app->email}}</td>
        
            <td>{{$app->address}}</td>
    
            <td>{{$app->symptoms}}</td>
            </tr>
            @endforeach
        </tbody>
       
    </table>
      
    
</body>
</html>