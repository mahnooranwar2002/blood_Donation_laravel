@include('agentpanel.includes.header')


    <div class="container">
       @include('agentpanel.includes.sidebar')

        <main class="main-content">
        @include('agentpanel.includes.info')

  <div class="form-container">
     <div class="row">
<p  style="margin:19px; color:red"> <strong>Blood Group:</strong> 
        {{ $data->bloodGroup ? $data->bloodGroup->group_name : 'Not Assigned' }}
    </p>
      <div class="right-wrapper">
        <form  id="blood-donor-form" action="{{route("agent-Updateprofile")}}" method="POST">
          @csrf
          <div class="form-grid">
          <div class="input-group">
            <input type="text" placeholder="Your Name" value="{{$data->name}}" name="name">
          </div>
          <div class="input-group">
            <input type="email" name="email" readonly placeholder="Your Email Address"  value="{{$data->email}}" name="Email"> </div>
          <div class="input-group">
            <input type="email" readonly placeholder="Your Email Password" name="password">
          </div>
          <button type="submit" class="submit-btn"> Update profile <i class="ri-user-follow-line"></i></button>
          </div>
        </form>
        
    
      </div>
    </div>
  </div>


</section>
