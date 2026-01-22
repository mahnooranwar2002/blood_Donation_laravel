@include('adminpanel.includes.header')

    <div class="container">
       @include('adminpanel.includes.sidebar')

        <main class="main-content">
        @include('adminpanel.includes.info')

            <div class="table-container">
    <div class="table-header">
        <h3>Faq Management</h3>
        <a class="add-btn" href="{{ route("Admin-faq-create") }}">+ Add New  Faq  </a>
    </div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Question</th>
                <th>Answer</th>
              
                <th>Action</th>
            </tr>
        </thead>
  
</div>
<tbody>
    @foreach ($faqData as $row)
        <tr>
               <td>
               {{ $loop->iteration }}
            </td>
            <td>
                {{ $row->question }}
            </td>
               <td>
                {{ $row->answer }}
            </td>
            <td>
             <a href="{{ route('delFaq',$row->id) }}" class="delete-btn">Delete</a>
             <a href="{{ route("FaqEdit",$row->id) }}" class="edit-btn">Edit</a>
            </td>
        </tr>
    @endforeach
  
</tbody>
          
            </div>
        </main>
    </div>

