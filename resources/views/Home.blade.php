
       <!--start landing section-->

       @extends('temp')
       @section('css')
       <link rel="stylesheet" href="css/Home.css">
       @endsection
   @section('main')
       <div class="landing" >
        <div class="intro-text">
            @csrf
            @if(session('error'))<p class="error">{{session('error')}}</p> @endif
            <h1> Your health is our periority </h1>
          
            
        </div>
       </div>
       @endsection
      