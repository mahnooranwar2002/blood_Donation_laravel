@include('website.includes.Navbar')

<section class="page-header">
        <div class="bannerOverlay">

       
        <div class="container bannar_content">
          <h3>Contact Us</h3>
        </div>
    </div>
      </section>

      <section class="Contatus">
  <div class="container" id="heading">
    <h2>Contact us</h2> 
        <span class="heading-separator-horizontal"></span>
    
   <div class="info_row">
    <ul>
        <li>
            <span>
             <i class="ri-home-heart-fill"></i>
            </span>
            <address>
                3100 C/A Mouchak,Sylhet,UK
            </address>
        </li>
           <li>
            <span>
         <i class="ri-phone-line"></i>
            </span>
            <a href="#">
               03350312358
            </a>
        </li>
           <li>
            <span>
             <i class="ri-mail-ai-line"></i>
            </span>
          <a href="#">infodomain@gmail.com</a>
        </li>
           <li>
            <span>
           <i class="ri-global-line"></i>
            </span>
           <a href="#">www.domain.com</a>
        </li>

    </ul>
   </div>
  </div>

  <div class="container contactFromSec">
     <div class="row">
      <div class="left-wrapper">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.864547125779!2d67.11206537529776!3d24.90260154357016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb339b315dd62cd%3A0x4814990e74e37937!2sRJ%20Mall%20Karachi!5e0!3m2!1sen!2s!4v1766826116886!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="right-wrapper">
        <form action="{{route("createcontact")}}" method="POST">
          @csrf
          <div class="form-group">
            <input type="text" placeholder="Your Name" name="name">
          </div>
          <div class="form-group">
            <input type="email" placeholder="Your Email Address" name="Email"> </div>
          <div class="form-group">
            <textarea name="message" id="" rows="6" placeholder="Briefly describe your project goals..."></textarea>
          </div>
          <button type="submit" class="btn"> Send Message <i class="ri-send-plane-fill"></i></button>
        </form>
        
    
      </div>
    </div>
  </div>


</section>

@include('website.includes.footer')