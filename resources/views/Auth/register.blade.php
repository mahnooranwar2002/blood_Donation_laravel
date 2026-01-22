<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
</head>
<body>
  <main id="login_box">
<div class="loginBox">
    <div class="logo">
    <a href="/">
    <img src="{{ asset("images/logo-footer.png") }}" alt=""></a>
    </div>
<p> New here? Sign up to get started</p>
    <form action="{{ route('userCreate') }}" method="post">
        @csrf
          <div class="form-group">
            <input type="text" placeholder="Your Name" name="name">
          </div>
           <div class="form-group">
            <input type="text" placeholder="Your Email" name="email">
          </div>
             <div class="form-group">
            <input type="password" placeholder="Your password" name="password">
          </div>
          <button class="btn" type="submit">Register</button>
    </form>
   <div class="links">
        <a href="{{route('website-Login')}}">old user please login</a>
        <a href="{{route('website-register')}}">new user? please register your self</a>
       
        <a href="{{route('Forgotpassword')}}">Forget password?</a>
    </div>
</div>
  </main>
</body>
</html>