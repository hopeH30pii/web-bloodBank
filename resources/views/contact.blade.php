
       @extends('temp')
       @section('css')
       <link rel="stylesheet" href="css/style.css">
       @endsection
   @section('main')
   <div class="container">
       
        
    <h1>Contact Us</h1>
    <p>You're Always Welcome To Contact & Share Your Point Of View</p>
    <div class="contact-box">
        
        <div class="contact-left">
            <h2>sent Request</h2>
            <form method="POST" action="/contact" >
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
             
                <label>Message</label>
                <textarea rows="10" placeholder="Your Message" id="message" name="message" value="{{old('symptoms')}}"></textarea>
                @error('message')<p class="error">{{$message}}</p>@enderror
                <button type="submit">Send</button>


            </form>
        </div>
        <div class="contact-right">
            <h2>Reach us</h2>
            <table>
                <tr>
                    <td>Email</td>
                    <td>erc@egyptianrc.org</td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td>+(20) 2 25985555</td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td>Abd El Razak El Sanhouri St., Nasr City, Cairo, 11371, Egypt</td>
                </tr>

            </table>

            <div class="wrapper">
                <h5>Social contact</h5>
        
                <div class="button">
                    <div class="icon">
                        <i class="fab fa-facebook-f"></i>
                    </div>
                </div>

                <div class="button">
                    <div class="icon">
                        <i class="fab fa-twitter"></i>
                    </div>
                </div>

                <div class="button">
                    <div class="icon">
                        <i class="fab fa-instagram"></i>
                    </div>
                </div>
            </div>



        </div>
    </div>

</div>
       @endsection
      

