@include('adminpanel.includes.header')

    <div class="container">
       @include('adminpanel.includes.sidebar')

        <main class="main-content">
        @include('adminpanel.includes.info')

            <div class="table-container">
    <div class="table-header">
        <h3>Blood Group Management</h3>
        <a class="add-btn" href="{{ route("bloodAdded") }}">+ Add New  Group </a>
    </div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Status</th>
              
                <th>Action</th>
            </tr>
        </thead>
        <tbody id="user-table">
            @foreach($bloodGroups as $bloodGroup)
            <tr>    
                <td>{{ $bloodGroup->id }}</td>
                <td>{{ $bloodGroup->group_name }}</td>
                <td>@if( $bloodGroup->status == "A")
                    Active
                    @else
                    Inactive
                    @endif
                </td>
                
                <td>

                  
                    <a class="edit-btn"   href="{{ route("statusBloodupdate",$bloodGroup->id)}}">Status</a>
                    <a class="delete-btn"  href="{{ route("deletedBloodGroup",$bloodGroup->id)}}">Delete</a>
                </td>
            </tr>
            @endforeach
            </tbody>
    </table>
</div>

          
            </div>
        </main>
    </div>

