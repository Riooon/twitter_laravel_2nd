@extends('layouts.app')
@section('content')

<div class="center">
    <div class="center-fixed">
        <div class="arrow">
            <a href="javascript:history.back();"><i class="fas fa-arrow-left"></i></a>
        </div>
    </div>
    <div class="center-profile">
        <div class="center-background">
            <img src="{{ asset('storage/img/twitter_bg.jpg', true) }}">
        </div>
        <div class="center-pic">
            <img src="{{ asset('storage/img/'.Auth::user()->icon, true) }}">
            <a href="#" class="settings-action">Edit profile</a>
        </div>
        <div class="profile-box">
            <div class="profile-name">
                <h3>{{ Auth::user()->name }}</h3>
            </div>
            <div class="profile-tagline">
                <p>{{ Auth::user()->bio }}</p>
            </div>
            <div class="profile-info">
                <ul>
                    <li><i class="fas fa-map-marker-alt"></i>Tokyo-to, Japan</li>
                    <li><i class="fas fa-link"></i>link.co.jp</li>
                    <li><i class="fas fa-golf-ball"></i>Date of Birth</li>
                    <li><i class="far fa-calendar-alt"></i>The moment you joined</li>
                </ul>
            </div>
            <div class="profile-follows">
                <a href="{{ url('/following/'.Auth::user()->id) }}"><h4><span>{{ count($following) }}</span> following</h4></a>
                <a href="{{ url('/followers/'.Auth::user()->id) }}"><h4><span>{{ count($followers) }}</span> followers</h4></a>
            </div>
        </div>
        
        <div class="tweet-list">
            <ul>
                <li>Tweets</li>
                <li>Tweets & replies</li>
                <li>Media</li>
                <li>Likes</li>
            </ul>
            @if (count($tweets) > 0)
                @foreach ($tweets as $tweet)
                <div class='tweet-card'>
                    <div class='picture'>
                        <img src="{{ asset('storage/img/'.Auth::user()->icon, true) }}">
                    </div>
                    <div class='text'>
                        <div class='info'>
                            <h4>{{ Auth::user()->name }}</h4>
                        </div>
                            <div class='description'>{{ $tweet->text }}</div>
                        <div class='reaction'>
                            <i class='far fa-comment'></i>
                            <i class='fas fa-retweet'></i>
                            <i class='far fa-heart'></i>
                            <i class='fas fa-external-link-alt'></i>
                            <i class='far fa-chart-bar'></i>
                        </div>
                    </div>
                </div>
                @endforeach
            @endif
        </div>
    </div>
</div>

    <!-- バリデーションエラーの表示に使用-->
    @include('common.errors')
    <!-- バリデーションエラーの表示に使用-->
@endsection