@extends('layouts.app')
@section('content')

<div class="center">
    @if (count($tweets) > 0)
        @foreach ($tweets as $tweet)
        <div class='tweet-card'>
            <div class='picture'>
                <a href="{{ url('account/'.$tweet->user_id) }}"><img src="{{ asset('storage/img/'.$tweet->icon, true) }}"></a>
            </div>
            <div class='text'>
                <div class='info'>
                    <a href="{{ url('account/'.$tweet->user_id) }}"><h4>{{ $tweet->name }}</h4></a>
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



    <!-- バリデーションエラーの表示に使用-->
    @include('common.errors')
    <!-- バリデーションエラーの表示に使用-->
@endsection