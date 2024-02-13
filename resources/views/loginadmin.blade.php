<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="Utf-8">
    <meta name="description" content="login">
    <title>Login Page</title>
    <link rel="stylesheet" href="css/login.css">


</head>

<body>
    <header>
       
       
    </header>
    <div class="login-form">
    <form method="post" action="/loginadmin">
      
        @csrf
        @if (session('error'))
        <p class="error">{{session('error')}}</p>   @endif
        <img src="img/login.png" alt="user" width="100px">
        <h2>Login</h2>
        <input type="text" placeholder="Email" required name="email" id="email" value="{{old('email')}}">
        @error('email')<p class="error">{{$message}}</p> @enderror
        <input type="password" id="password" name="password" value="{{old('password')}}" placeholder="Password" required>
        @error('password')<p class="error">{{$message}}</p> @enderror
        @if(session('error'))<p class="error">{{session('error')}}</p> @endif
        <input type="submit" value="login">
       

    </form>
    </div>
    <!-- <a style="padding-top: 15px padding-left: 15px" class="align-left" href="/registeradmin" class="iconbtn">click here to add new admin</a> -->
</body>

</html>