@include('adminpanel.includes.header')

    <div class="container">
       @include('adminpanel.includes.sidebar')

        <main class="main-content">
        @include('adminpanel.includes.info')

            <div class="table-container">
    <div class="table-header">
        <h3>agent Management</h3>
        <a class="add-btn" href="{{ route("add-agent") }}">+ Add New  agent  </a>
    </div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Status</th>
                 <th>Blood Group</th>
                <th>Action</th>
            </tr>
        </thead>
  
</div>
<tbody>
    @foreach (  $agentDetails as $row )
    <tr>
           <td>
            {{ $row->id }}
        </td>
        <td>
            {{ $row->name }}
        </td>
          <td>
            @if( $row->status ==1 )
            <span>Activate</span>
            @else
              <span>Deactivate</span>
              @endif
        </td>
          <td>
            {{ $row->bloodGroup->group_name }}
        </td>
        
        <td>

                  
                    <a class="edit-btn"   href="{{ route("statusAgent",$row->id)}}">Status</a>
                    <a class="delete-btn"  href="{{ route("deleteAgent",$row->id)}}">Delete</a>
                </td>
    </tr>
        
    @endforeach
</tbody>
          
            </div>
        </main>
    </div>

