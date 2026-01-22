<footer>
      <div class="container">
      <div class="footer-para">
        <div class="left-wrapper">
          <img src="{{asset('images/logo-footer.png')}}" alt="">
        </div>
        <div class="right-wrapper">
          <p>We are world largest and trustful blood donation center. We have been working since 1973 with a prestigious vision to helping patient to provide blood. We are working all over the world, organizing blood donation campaign to grow awareness among the people to donate blood.</p>
        </div>
      </div>
      <div class="row">
       <div class="footer_item">
       <h3>Contact US</h3>
       <p>
        <i class="ri-mail-send-line"></i>
        <a href="">email@gmail.com</a>
       </p>
       <p>
        <i class="ri-map-pin-add-line"></i>
        <a href="">Road-2,3/A East Shibgonj
          Sylhet-3100, Bangladesh</a>
       </p>
       <p>
        <i class="ri-phone-line"></i>
        <a href=""> 033 50312-358</a>
       </p>


       </div>
       <div class="footer_item">
        <h3>Support Links</h3>
        <ul>
          <li><a href="">Home</a></li>
          <li><a href="">About</a></li>
          <li><a href="">Services</a></li>
          <li><a href="">Contact</a></li>
        </ul>
 
 
        </div>
       
      </div>
      </div>
    </footer>
  </main>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/gsap.min.js" integrity="sha512-NcZdtrT77bJr4STcmsGAESr06BYGE8woZdSdEgqnpyqac7sugNO+Tr4bGwGF3MsnEkGKhU2KL2xh6Ec+BqsaHA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
       <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
 
          <script>
        function toggleProfileMenu() {
            var menu = document.getElementById("profileMenu");
            menu.classList.toggle("show");
        }

        // Click bahar ho to menu band ho jaye
        window.onclick = function(event) {
            if (!event.target.closest('.profile-dropdown')) {
                var menu = document.getElementById("profileMenu");
                if (menu && menu.classList.contains('show')) {
                    menu.classList.remove('show');
                }
            }
        }
    </script>
</body>
</html>