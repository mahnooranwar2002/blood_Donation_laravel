@include('adminpanel.includes.header')


    <div class="container">
       @include('adminpanel.includes.sidebar')

        <main class="main-content">
        @include('adminpanel.includes.info')

        <div class="form-container">
    <h3>Blood Group Registration</h3>
    <form id="blood-donor-form" action="{{route('AddGroup')}}" method="POST">
        @csrf
        <div class="form-grid">
        
            <div class="input-group">
                <label>Blood Group</label>
                <select id="bloodGroup" required name="group_name" require>
                    <option value="">Select Group</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                </select>
            </div>
            <div class="input-group">
                <label>status</label>
                <select id="bloodGroup" required name="status">
                    <option value="">Select status</option>
                    <option value="A">Activate</option>
                    <option value="N">Negative</option>
                    
                </select>
            </div>
      

        </div>
        <button type="submit" class="submit-btn" style="background: #e74c3c;">Save Changes</button>
    </form>
</div>
        </main>
    </div>

