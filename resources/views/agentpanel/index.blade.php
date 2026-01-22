@include('agentpanel.includes.header')


    <div class="container">
       @include('agentpanel.includes.sidebar')

        <main class="main-content">
        @include('agentpanel.includes.info')

            <div class="cards">
                <div class="card">
                    <h3>Total Request</h3>
                    <p>{{$reqCount->count()}}</p>
                </div>
              
               
            </div>

          
            </div>
        </main>
    </div>