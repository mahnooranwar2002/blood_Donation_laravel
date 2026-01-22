@include('website.includes.Navbar')

<section class="page-header">
    <div class="bannerOverlay">
        <div class="container bannar_content">
            <h3>Request For Donation</h3>
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
        <form action="{{route("website-bloodRequest")}}" method="POST">
          @csrf
          <div class="form-group">
            <input type="text" placeholder="Your Name" value="{{$userData->name}}"  readonly>
          </div>
          <div class="form-group">
            <input type="email"  readonly placeholder="Your Email Address"  value="{{$userData->email}}" name="Email"> </div>

                <div class="form-group">
              
                <select name="bloodGroupid"  id="bloodGroup">
                    <option value="" hidden>Select Your blood Group</option>
                   @foreach($bloodGroups as $bloodGroup)
                 <option value="{{ $bloodGroup->id }}">{{$bloodGroup->group_name}}</option>
                      @endforeach
                      </select>
            </div>
      
  <div class="form-group">
            <textarea name="message" id="" rows="6" placeholder="Briefly your address..."></textarea>
          </div>
          
          <button type="submit" class="btn"> Request <i class="ri-contrast-drop-line"></i></button>
        </form>
        
    
      </div>
    </div>
  </div>


</section>
@include('website.includes.footer')