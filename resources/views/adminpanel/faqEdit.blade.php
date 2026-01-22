@include('adminpanel.includes.header')


    <div class="container">
       @include('adminpanel.includes.sidebar')

        <main class="main-content">
        @include('adminpanel.includes.info')

        <div class="form-container">
    <h3>Faq create</h3>
    <form id="blood-donor-form" action="{{route('faq-update',$editId->id)}}" method="POST">
        @csrf
        <div class="form-grids">
        
            <div class="input-groups">
                <label>Faq Question </label>
          <Textarea name="question">{{$editId->question}}</Textarea>
            </div>
            <div class="input-groups">
                <label>Faq Answer</label>
                <Textarea name="answer">{{$editId->answer}}</Textarea>
            </div>
      

        </div>
   
        <button type="submit" class="submit-btn" style="background: #e74c3c;">Save Changes</button>
    </form>
</div>