
       @extends('temp')
       @section('css')
       <link rel="stylesheet" href="css/BloodBank.css">
       @endsection
   @section('main')
   <div class="body">
    @csrf
    @if(session('error'))<p class="error">{{session('error')}}</p> @endif
       
    <div class="one"> 
      <p><h1  style="text-align:center; padding-right:80px; font-size:7em; cursor:pointer;  font-weight:lighter">About</h1></p>
     </div>
<p><img style="float:right; padding-right:20px;width: 40%; height: 220px;" src="/img/about.jpg" alt="Error" title="Blood Bank"></p>
  <div class="block"><p>
            We Health Care Centre, situated at Malad West, Mumbai, Maharashtra aim
to provide prompt, economical and reliable services of the safest blood and
other blood products like RBCs, platelets, etc. Offering the industry-leading,
advanced technology and well-equipped inventory, we make all types of
blood available for the patients and many hospitals. We contribute in saving
many lives in the time of need or in an emergency. We also offer complete
diagnostic services to our patients to fulfill all their needs under one roof
mainly pathology, radiology, whole body MRI, cardiac CT and various health
packages including all test at a minimal cost. Our aim is to deliver complete
service to our patients as their health is our priority.</p>

        </div>
   
 
            </div>
      
    </div>
       @endsection
      
