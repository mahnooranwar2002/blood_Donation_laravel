@include('adminpanel.includes.header')


    <div class="container">
       @include('adminpanel.includes.sidebar')

        <main class="main-content">
        @include('adminpanel.includes.info')

        <div class="form-container">
    <h3>Blood Group Registration</h3>
    <form id="blood-donor-form" action="{{route('addAgent')}}" method="POST">
        @csrf
        <div class="form-grid">
        
            <div class="input-group">
                <label>Name </label>
            <input type="text" name="name">
            </div>
            <div class="input-group">
                <label>Email</label>
                  <input type="email" name="email">
            </div>
      

        </div>
         <div class="form-grid">
        
            <div class="input-group">
                <label>Password </label>
            <input type="text" name="password">
            </div>
    <div class="input-group">
    <label>Select District (Karachi)</label>
    <select name="location" id="bloodGroup">
        <option value="">Select District</option>
        <option value="karachi_central">Karachi Central (Markazi)</option>
        <option value="karachi_east">Karachi East (Sharqi)</option>
        <option value="karachi_south">Karachi South (Janubi)</option>
        <option value="karachi_west">Karachi West (Gharbi)</option>
        <option value="keamari">Keamari</option>
        <option value="korangi">Korangi</option>
        <option value="malir">Malir</option>
    </select>
</div>
      

        </div>
          <div class="form-grid">
        
            <div class="input-group">
                <label>Status </label>
                 <select id="bloodGroup" required name="status">
                    <option value="">Select status</option>
                    <option value=1>Activate</option>
                    <option value=0>InActivate</option>
                    
                </select>
            </div>
            <div class="input-group">
                <label>Blood Group</label>
                <select name="bllodGroup_id"  id="bloodGroup">
                    <option value="" hidden>Select Your blood Group</option>
                   @foreach($bloodGroups as $bloodGroup)
                 <option value="{{ $bloodGroup->id }}">{{$bloodGroup->group_name}}</option>
                      @endforeach
                      </select>
            </div>
      

        </div>
        <button type="submit" class="submit-btn" style="background: #e74c3c;">Save Changes</button>
    </form>
</div>

   

