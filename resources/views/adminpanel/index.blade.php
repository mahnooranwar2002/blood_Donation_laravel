@include('adminpanel.includes.header')


    <div class="container">
       @include('adminpanel.includes.sidebar')

        <main class="main-content">
        @include('adminpanel.includes.info')

            <div class="cards">
                <div class="card">
                    <h3>Total Users</h3>
                    <p>{{$dataUser->where("Role",0)->count()}}</p>
                </div>
                <div class="card">
                    <h3>Admin</h3>
                     <p>{{$dataUser->where("Role",1)->count()}}</p>
                </div>
                <div class="card">
                    <h3>blood Group</h3>
                    <p>{{$dataBlood->count()}}</p>
                </div>
                  <div class="card">
                    <h3>Agent</h3>
                    <p>{{$agentData->count()}}</p>
                </div>
                  <div class="card">
                    <h3>Donation Request</h3>
                    <p>{{$reqData->count()}}</p>
                </div>
                
             
                   <div class="card">
                    <h3>Contact </h3>
                    <p>{{$contactData->count()}}</p>
                </div>
            </div>

      <div class="cards chartdiv">
                @include('adminpanel.charts')
            </div>
            </div>
         
        </main>
    </div>

