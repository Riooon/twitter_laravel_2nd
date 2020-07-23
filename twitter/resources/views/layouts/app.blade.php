<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Twitter</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js', true) }}" defer></script>
    <script src="{{ asset('js/profile.js', true) }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/reset.css', true) }}" rel="stylesheet">
    <link href="{{ asset('css/profile.css', true) }}" rel="stylesheet">
    <link href="{{ asset('css/follow.css', true) }}" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
</head>

<body>
    <div class="inner">
        
        <div class="left">
            <div class="icon"><i class="fab fa-twitter"></i></div>
            <ul class="list-entire">
                <li><i class="fas fa-home"></i>Home</li>
                <a href="{{ url('/explore') }}"><li><i class="fas fa-hashtag"></i>Explore</li></a>
                <li><i class="far fa-bell"></i>Notifications</li>
                <li><i class="far fa-envelope"></i>Messages</li>
                <li><i class="far fa-bookmark"></i>Bookmarks</li>
                <li><i class="far fa-list-alt"></i>Lists</li>
                <a href="{{ url('/') }}"><li><i class="fas fa-user-alt"></i>Profile</li></a>
                <li class="settings-action"><i class="fas fa-sliders-h"></i>Settings</li>
            </ul>
            
            <div class="tweet">
                <a href="#">Tweet</a>
            </div>
            
            <div class="popup">
                <div class="popup-form">
                    <form method="POST" action="{{ url('tweets') }}">
                        {{ csrf_field() }}
                        <div class="popup-top">
                            <i class="fas fa-times"></i>
                        </div>
                        <div class="popup-middle">
                            <img src="{{ asset('storage/img/'.Auth::user()->icon, true) }}">
                            <textarea name="text" id="tweeting" cols="30" rows="7" placeholder="What's happening?"></textarea>
                            <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
                        </div>
                        <div class="popup-bottom">
                            <div class="logo">
                                <i class="far fa-image"></i>
                                <i class="fab fa-github"></i>
                                <i class="fas fa-poll"></i>
                                <i class="far fa-smile"></i>
                                <i class="fas fa-business-time"></i>
                            </div>
                            <div class="cnt_area"><span class="now_cnt">0</span> / 140</div>
                            <input type="submit" value="Tweet" id="submit-tweet">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        @yield('content')
        
        <div class="right">
             <div class="settings">
                 <div class="title">
                    <i class="fas fa-times settings-end"></i>
                    <p>Settings</p>
                 </div>
    
                <form method="POST" action="{{ url('users/update') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <details>
                        <summary>Name</summary>
                        <input type="text" name="name" value="{{ Auth::user()->name }}">
                    </details>
                    <details>
                        <summary>Bio</summary>
                        <textarea class="bio" name="bio" cols="32" rows="2">{{ Auth::user()->bio }}</textarea>
                    </details>
                    <details>
                        <summary>Icon</summary>
                        <input type="file" name="icon" accept="image/*">
                    </details>
                    <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                    <input type="submit" value="Update" class="submit">
                </form>
                <!--<ul>-->
                <!--    <li><a class="logout" href="logout.php">Log out</a></li>-->
                <!--    <li><a class="deactivate" href="">Deactivate</a></li>-->
                <!--</ul>-->
                <div class="logout_frame">
                    <a class="logout" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
            
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    
    </div>
    
</body>
</html>
