@include('adminpanel.includes.header')

<div class="container">
    @include('adminpanel.includes.sidebar')

    <main class="main-content">
        @include('adminpanel.includes.info')

        <div class="table-container">
            <div class="table-header">
                <h3>Donation Request Management</h3>
            </div>

            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Receiver Name</th>
                        <th>Blood Group</th>
                        <th>Address</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($requestDonation as $row)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $row->Users->name }}</td>

                            <td>

                                {{ $row->bloodGroup->group_name }}

                            </td>

                            <td>{{ $row->address }}</td>

<td>
 <form class="Myform" action="{{ route("blood_Srtatus",$row->id)}}" method="POST">
    @csrf
    <select name="status"  style="padding: 5px; border-radius: 4px; cursor: pointer;">
        <option value="pending" {{ $row->status == 'pending' ? 'selected' : '' }}>Pending</option>
        <option value="approved" {{ $row->status == 'approved' ? 'selected' : '' }}>Approved</option>
        <option value="Done" {{ $row->status == 'Done' ? 'selected' : '' }}>Done</option>
        <option value="rejected" {{ $row->status == 'rejected' ? 'selected' : '' }}>Rejected</option>
    </select>
    <button type="submit" class="edit-btn">Save</button>
</form>
</td>
                            <td>
                              <a href="{{ route('reqDonation',$row->id) }}" class="delete-btn">Delete</a>
                               
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
</div>
