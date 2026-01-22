<!-- includes the Navbar -->
@include('website.includes.Navbar')

<section class="section-bannar">
        <div class="container bannar-content">
          <h2>Donate blood and get real blessings.</h2>
          <h3>
            Blood is the most precious gift that anyone can give to another
            person. Donating blood not only saves the life also save donor's
            lives
          </h3>
          <a href="" class="btn">Donate Today</a>
        </div>
      </section>


      <section class="section_process">
        <div class="container">
          <div class="heading">
            <h2>DONATION PROCESS</h2>
            <span class="heading-separator-horizontal"></span>
            <h4>
              The donation process from the time you arrive center until the
              time you leave
            </h4>
          </div>
          <div class="process-row">
            <div class="process-card">
              <div class="img-container">
                <img src="{{asset('images/process_1.jpg')}}" alt="Registration" />
                <div class="step-number">1</div>
              </div>
              <h3>REGISTRATION</h3>
              <p>
                You need to complete a very simple registration form. Which
                contains all required contact information to enter in the
                donation process.
              </p>
            </div>

            <div class="process-card">
              <div class="img-container">
                <img src="{{asset('images/process_2.jpg')}}" alt="Screening" />
                <div class="step-number">2</div>
              </div>
              <h3>SCREENING</h3>
              <p>
                A drop of blood from your finger will take for simple test to
                ensure that your blood iron levels are proper enough for
                donation process.
              </p>
            </div>

            <div class="process-card">
              <div class="img-container">
                <img src="{{asset('images/process_3.jpg')}}" alt="Donation" />
                <div class="step-number">3</div>
              </div>
              <h3>DONATION</h3>
              <p>
                After ensuring and passed screening test successfully you will
                be directed to a donor bed for donation. It will take only 6-10
                minutes.
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="femaleheart">
        <div class="from">
          <div class="from_detail">
            <h3>Contact Form</h3>
            <div class="inner_from">
              <div class="form-group">
                <input type="text" placeholder="Name" />
                <input type="text" placeholder="Email" />
              </div>
           
              <textarea
                name=""
                id=""
                rows="8"
                placeholder="Write a message"
              ></textarea>
              <input type="submit" class="btn" />
            </div>
          </div>
        </div>
      </section>
      <section class="Information_sec">
        <div class="heading">
          <h4>Good To Know</h4>
          <span class="heading-separator-horizontal"></span>
          <h2>Helpful Information</h2>
          <ul>
            <li>Maintain a healthy iron level by eating iron rich foods.</li>
            <li>Drink an extra 16 oz. of water prior to your donation.</li>
            <li>Avoid alcohol consumption before your blood donation.</li>
            <li>Remember to bring the donor card or national ID/Passport.</li>
            <li>
              Finally, Try to get a good night sound sleep after donation.
            </li>
          </ul>
        </div>
      </section>

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
      <section class="container cta-Section">


        <div class="container heading">
          <h2>We have been helping people since 40 years</h2>
          <p>You can give blood at any of our blood donation venues all over the world. We have total sixty thousands donor centers and visit thousands of other venues on various occasions.</p>
          <a href="" class="btn">Become Volunter</a>
        </div>
      </section>
    
<!-- includes the footer -->
      @include('website.includes.footer')
