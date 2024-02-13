<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="Utf-8">
        <meta name="description" content="register">
        <title>register Page</title>
        <link rel="stylesheet" href="/css/register.css">


    </head>
    <body> 
        <div class="register-form">
            <form method="post" action="/registeradmin"> 
                @csrf

                @if(session('error')) <p class="error">{{session('error') }}</p> @endif
                <img src="/img/login.png" alt="user" width="100px">
                <h2>Register</h2>
                <input type="text" placeholder="Username" required name="name" id="name">
                @error('name')<p class="error">{{$message}}</p> @enderror
                <input type="email" placeholder="Email" required name="email" id="email">
                @error('email')<p class="error">{{$message}}</p> @enderror
                <input type="password" placeholder="Password" required name="password" id="password" >
                @error('password')<p class="error">{{$message}}</p> @enderror
                
                <input type="submit" value="register">
                <p><a href="/loginadmin" class="iconbtn">Login</a></p>


            </form>
        </div>


    </body>
</html>