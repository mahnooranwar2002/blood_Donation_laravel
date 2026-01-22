@include('adminpanel.includes.header')

    <div class="container">
       @include('adminpanel.includes.sidebar')

        <main class="main-content">
        @include('adminpanel.includes.info')

            <div class="table-container">
    <div class="table-header">
        <h3>Contact Management</h3>
 
    </div>
    <table>
        <thead>
            <tr>
    
                <th>Name</th>
                <th>Email</th>
                 <th>Msg</th>
                <th>Action</th>
            </tr>
        </thead>
  
</div>
<tbody>
    @foreach (  $contactInfo as $row )
    <tr>
        <td>
            {{ $row->name }}
        </td>
     
        <td>
            {{ $row->Email }}
        </td>
        <td>
            {{ $row->message }}
        </td>
        
        <td>

        
                  
                    <a class="delete-btn"  href="{{ route("deleteCon",$row->id)}}">Delete</a> 
                </td>
    </tr>
        
    @endforeach
</tbody>
          
            </div>
        </main>
    </div>

