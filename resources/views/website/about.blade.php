@include('website.includes.Navbar')

<section class="page-header">
    <div class="bannerOverlay">
        <div class="container bannar_content">
            <h3>About Us</h3>
        </div>
    </div>

</section>
<section class="aboutSec container">
       
       <div class="left-wrapper">
<h2>Who We Are?</h2>
<span class="heading-separator-horizontal"></span>
<p>Blood Buddies is for public donation center with blood donation members in the changing health care system.</p>
<ul>
<li>Specialist blood donors and clinical supervision.</li>
<li>Increasing communication with our members</li>
<li>High quality assessment, diagnosis and treatment.</li>
<li>  Examine critically to ensure alignment.</li>
<li>The extra care of a multi-disciplinary team.</li>
</ul>       
</div>
<div class="right-wrapper">
<img src="{{asset('images/donationPicture.jpg')}}" alt="">
</div>

</section>
<section class="VolunterSec">
      <div class="heading">
  <h2>The volunteers who give their time and talents help to fulfill our mission.</h2>
  <a href="" class="btn">become volunter</a>
</div>
    </section>
  
   <div class="ourAchiement container">
    <h2>OUR ACHIEVEMENTS</h2>
    <span class="heading-separator-horizontal"></span>
    <div class="counter-section">
      <div class="container">
        <div class="row">
          <div class="card">
            <i class="ri-heart-pulse-fill"></i>
            <span>2578</span>
            <h4>Success Smile</h4>
          </div>
 <div class="card">
           <i class="ri-stethoscope-fill"></i>
            <span>300</span>
            <h4>Happy Donors</h4>
          </div>   <div class="card">
         <i class="ri-group-fill"></i>
            <span>2578</span>
            <h4>Happy Recipient</h4>
          </div>   <div class="card">
         <i class="ri-building-4-line"></i>
            <span>1364</span>
            <h4>Total Awards</h4>
          </div>
        </div>
      </div>
    </div>
   </div>
   <div class="testimonialSec">
    <div class="container">
      <div class="heading">
        <h4>Awesome Words From Members</h4>
        <span class="heading-separator-horizontal"></span>
        <h2>WHAT OUR DONORS SAY</h2>
       
      </div>
      <div class="testimonial-row">
     <div class="left-wrapper">
       <div class="testimonial-layout">
        <h3>Recipient Opinion</h3>
        <p class="testimony-text">
          I wish I could tell you my donor how grateful I am for your selfless act.You gave me new life. We may be coworkers or schoolmates or just two in the same community.I'm very grateful to you.  
      </p>
      <img src="{{asset('images/user_3.jpg')}}" alt="">
      <h6>Logan Munson</h6>
      <span>CTO, Fulcrum Design, USA</span>
       </div>
     </div>
     <div class="right-wrapper">
      <img src="{{asset('images/testimony_feat_img.jpg')}}" alt="">
     </div>
      </div>
    </div>
  </div>
  <section class="container cta-Section">


    <div class="container heading">
      <h2>We have been helping people since 40 years</h2>
      <p>You can give blood at any of our blood donation venues all over the world. We have total sixty thousands donor centers and visit thousands of other venues on various occasions.</p>
      <a href="" class="btn">Become Volunter</a>
    </div>
  </section>

@include('website.includes.footer')