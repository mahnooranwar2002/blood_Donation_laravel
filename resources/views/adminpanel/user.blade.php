@include('adminpanel.includes.header')


    <div class="container">
       @include('adminpanel.includes.sidebar')

        <main class="main-content">
        @include('adminpanel.includes.info')

            <div class="table-container">
    <div class="table-header">
        <h3>User Management</h3>
        <button class="add-btn">+ Add New User</button>
    </div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Status</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody id="user-table">
            </tbody>
    </table>
</div>

          
            </div>
        </main>
    </div>

