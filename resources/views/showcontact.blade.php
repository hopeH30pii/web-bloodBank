<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/show.css">
    <link rel="stylesheet" href="/css/all.min.css">
    <link rel="stylesheet" href="/css/normalize.css">
    <title>Allcontacts</title>
</head>
<body>
    <h1>My Cotancts</h1>

    <table class="box">
        <thead>
            <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Address</th>
        <th>Message</th>
      
    </tr>
    </thead>
        <tbody>
            @foreach ( $cons as $con)
            <tr>
     
            <td>{{$con->id}}</td>
        
    
            <td>{{$con->name}}</td>
     
        
            <td>{{$con->phone}}</td>
        
        
            <td>{{$con->email}}</td>
        
            <td>{{$con->address}}</td>
    
            <td>{{$con->message}}</td>
            </tr>
            @endforeach
        </tbody>
       
    </table>
   
</body>
</html>

