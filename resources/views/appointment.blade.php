
       @extends('temp')
       @section('css')
       <link rel="stylesheet" href="css/style.css">
       @endsection
   @section('main')
   <div class="one"> 
    <p><h1  style=" padding-left:80px; font-size:3em; cursor:pointer;  font-weight:lighter;">make your Appointment</h1></p>
   </div>
   <br>
   
   <!-- end header-->
           <div  class="contact-left" style="background-color:#fff" >
               <form class="app-form" method="POST" action="/appointment">
                   {{-- <h1>Make Appointment</h1> --}}
                   @csrf
                   @if (session('error'))
                   <p class="error">{{session('error')}}</p>   @endif
                   <div class="input-row">
                       <div class="input-group">
                           <label>Name</label>
                           <input  type="text" placeholder="Mohamed Mansour" name="name" id="name" value="{{old('name')}}">
                           @error ('name') <p class="error">{{$message}}</p> @enderror
                       </div>
                   </div>
                   <div class="input-row">
                       <div class="input-group">
                           <label>Blood Type</label>
                           <div class="select" >
                               <select required name="bloodt" id="bloodt" value="{{old('bloodt')}}">
                                   <option selected disabled>Select Your Blood type</option>
                                   <option value="A-">A-</option>
                                   <option value="A+">A+</option>
                                   <option value="B-">B-</option>
                                   <option value="B+">B+</option>
                                   <option value="AB">AB</option>
                                   <option value="O-">O-</option>
                                   <option value="O+">O+</option>
                               </select>
                           </div>
                           @error('bloodt')<p class="error">{{$message}}</p>  @enderror
                       </div>
                   </div>
                   <div class="input-row">
                       <div class="input-group">
                           <label>Phone</label>
                           <input type="text" placeholder=" ***********" name="phone" id="phone" value="{{old('phone')}}">
                           @error('phone')<p class="error">{{$message}}</p>@enderror
                       </div>
                   </div>
                   <div class="input-row">
                       <div class="input-group">
                           <label>Email</label>
                           <input  type="email" placeholder="Moh*******@gmail.com" name="email" id="email"value="{{old('email')}}">
                           @error('email')<p class="error">{{$message}}</p>@enderror
                       </div>
                   </div>
                   <div class="input-row">
                       <div class="input-group">
                           <label>Address</label>
                           <input required type="text" placeholder="Nasr ST Banha city" name="address" id="address"value="{{old('address')}}">
                           @error('address')<p class="error">{{$message}}</p>@enderror
                       </div>
                   </div>
   
                   <div class="input-row">
                       <div class="input-group">
                         <label>Symptoms</label>
                              <textarea rows="10" placeholder="Enter" name="symptoms" id="symptoms" value="{{old('symptoms')}}"></textarea>
                              @error('symptoms')<p class="error">{{$message}}</p>@enderror
                           </div>
                       </div>
                   <button type="submit">Send</button>
   
   
               </form>
           </div>
   
       </div>
   </div>
       @endsection
      

