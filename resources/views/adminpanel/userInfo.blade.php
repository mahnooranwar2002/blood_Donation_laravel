@include('adminpanel.includes.header')

    <div class="container">
       @include('adminpanel.includes.sidebar')

        <main class="main-content">
        @include('adminpanel.includes.info')

            <div class="table-container">
    <div class="table-header">
        <h3>Users Management</h3>
   
    </div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                 <th>Email</th>
                <th>Status</th>
            
                <th>Action</th>
            </tr>
        </thead>
  
</div>
<tbody>
    @foreach (  $userInfo as $row )
    <tr>
           <td>
            {{ $row->id }}
        </td>
        <td>
            {{ $row->name }}
        </td>
           <td>
            {{ $row->email }}
        </td>
          <td>
            @if( $row->status ==1 )
            <span>Activate</span>
            @else
              <span>Deactivate</span>
              @endif
        </td>
        
        
        <td>

                  
                    <a class="edit-btn"   href="{{ route("statusUser",$row->id)}}">Status</a>
                    <a class="delete-btn"  href="{{ route("deleteUser",$row->id)}}">Delete</a>
                </td>
    </tr>
        
    @endforeach
</tbody>
          
            </div>
        </main>
    </div>

