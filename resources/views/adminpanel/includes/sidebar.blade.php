<nav class="sidebar">
            <h2>Blood Buddies</h2>
            <ul>
                <li><a href="{{route('adminIndex')}}" ><i class="fas fa-home"></i> Dashboard</a></li>
                <li><a href="{{route("showBloodGroup")}}"><i class="fa-solid fa-layer-group"></i> Blood Group</a></li>
                <li><a href="{{route("agentdetails")}}"><i class="fa-solid fa-user-secret"></i> Agents</a></li>
                  <li><a href="{{route("user_info")}}"><i class="fa-solid fa-user"></i> Users</a></li>
                  <li><a href="{{route('blood_req')}}"><i class="fa-solid fa-droplet"></i> Donation Request</a> </a>
                  </li>
                      <li><a href="{{route("Admin-faq")}}"><i class="fa-solid fa-circle-question"></i> Faq</a></li>
                <li><a href="{{route("Contact-Info")}}"><i class="fa-solid fa-address-book"></i> Contact</a></li>
              
                <li><a href="{{route("admin-profile")}}"><i class="fa-solid fa-address-card"></i>Profile</a></li>
                <!-- <li><a href="#" class="logout"><i class="fas fa-sign-out-alt"></i> Logout</a></li> -->
                 <li>
                  <a href="{{route("Admin-logout")}}"><i class="fa-solid fa-arrow-right-from-bracket"></i>logout</a>
                 </li>
            </ul>
        </nav>
