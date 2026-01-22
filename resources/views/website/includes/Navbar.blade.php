<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blood buddies</title>

    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.7.0/fonts/remixicon.css" rel="stylesheet"/>

   
</head>
<body>
    <header>
        <div class="container">
            <div class="nav">
                <img src="{{asset('images/logo.png')}}" alt="" />
                <nav>
                    <ul>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a href="{{route('about')}}">About</a></li>
                        <li><a href="{{route('website/faq')}}">Faq</a></li>
                        <li><a href="{{route('contact')}}">Contact</a></li>

                        @if($userData)
                        <li class="profile-dropdown">
                            <div class="profile-trigger" onclick="toggleProfileMenu()">
                                <button type="button" class="username-btn">
                                    {{ $userData->name }}
                                </button>
                                <i class="ri-arrow-down-s-line"></i>
                            </div>

                            <ul class="dropdown-menu" id="profileMenu">
                                <li><a href="{{ route('website-Userprofile') }}">View Profile</a></li>
                                 <li><a href="{{ route('website-bloodReq') }}">Request</a></li>
                         
                           <li><a href="{{ route('website-stausReq') }}"> Request Status</a></li>
                                <li><a href="{{ route('website-logout') }}" class="logout">Sign Out</a></li>
                            </ul>
                        </li>
                        @else
                        <li><a class="joinLink" href="{{route('website-Login')}}">Join Us</a></li> 
                        @endif
                    </ul>
                    <i class="ri-menu-4-fill"></i>
                </nav>
            </div>
        </div>
    </header>


