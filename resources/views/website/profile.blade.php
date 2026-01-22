@include('website.includes.Navbar')

<section class="page-header">
    <div class="bannerOverlay">
        <div class="container bannar_content">
            <h3>User Profile</h3>
        </div>
    </div>

</section>
      <section class="Contatus">
  <div class="container" id="heading">
    <h2>Edit profile </h2> 
        <span class="heading-separator-horizontal"></span>
    
  
  </div>

  <div class="container contactFromSec">
     <div class="row">
      <div class="left-wrapper">
    <img src="{{asset('images/proleImg.jpg')}}" alt="">   
    </div>
      <div class="right-wrapper">
        <form action="{{route("website-UserprofileEdited")}}" method="POST">
          @csrf
          <div class="form-group">
            <input type="text" placeholder="Your Name" value="{{$userData->name}}" name="name">
          </div>
          <div class="form-group">
            <input type="email" name="email" readonly placeholder="Your Email Address"  value="{{$userData->email}}" name="Email"> </div>
          <div class="form-group">
            <input type="email" readonly placeholder="Your Email Password" name="password">
          </div>
          <button type="submit" class="btn"> Update profile <i class="ri-user-follow-line"></i></button>
        </form>
        
    
      </div>
    </div>
  </div>


</section>
@include('website.includes.footer')