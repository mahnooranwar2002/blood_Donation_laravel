
@include('website.includes.Navbar')

<section class="page-header">
    <div class="bannerOverlay">
        <div class="container bannar_content">
            <h3>Request Status</h3>
        </div>
    </div>

</section>
@if($requestDonation && $requestDonation->count() > 0)
<div class="container">
    <div class="custom-table-container">
        <table class="custom-table">
            <thead>
                <tr>
                   
                    <th>Group Name</th>
                    <th>Request Date</th>
                    <th>Status</th>
                 
                </tr>
            </thead>
            <tbody>
                @foreach($requestDonation as $row)
                <tr>
                
                    <td>{{ $row->bloodGroup->group_name}}</td>
                    <td>{{ $row->created_at->format('d/m/Y') }}</td>
                    <td>
                        {{-- Logic for status --}}
                        @if($row->status == 'pending')
                            <span class="status-pill status-pending">In Review</span>
                        @elseif($row->status == 'approved')
                            <span class="status-pill status-completed">Success</span>
                        @else
                            <span class="status-pill status-cancel">Rejected</span>
                        @endif
                    </td>
                  
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@else
   <div class="containers text-center py-5">
       <p>No donation requests found.</p>
   </div>
@endif
@include('website.includes.footer')
<style>
    .custom-table-container {
        margin: 40px 0;
        background: #fff;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    }
    .custom-table {
        width: 100%;
        border-collapse: collapse;
    }
    .custom-table thead {
        background: #2c3e50; /* Dark color */
        color: #ffffff;
    }
    .custom-table th, .custom-table td {
        padding: 15px 20px;
        text-align: left;
        border-bottom: 1px solid #f0f0f0;
    }
    .custom-table tbody tr:hover {
        background-color: #f8f9fa;
        transition: 0.3s;
    }
    /* Status Styling */
    .status-pill {
        padding: 5px 12px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 600;
        text-transform: uppercase;
    }
    .status-pending { background: #fff3cd; color: #856404; }
    .status-completed { background: #d4edda; color: #155724; }
    .status-cancel { background: #f8d7da; color: #721c24; }
    .containers p{
        margin: 10px 0px;
        text-align: center;
        font-size: 30px;
        color: #555555;
        
    }
</style>