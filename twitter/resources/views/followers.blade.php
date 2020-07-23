@extends('layouts.app')
@section('content')

<div class="center">
    
    <div class="center-top">
        <div class="arrow">
            <a href="javascript:history.back();"><i class="fas fa-arrow-left"></i>
        </div>
        <div class="names">
            <h4>{{ Auth::user()->name }}</h4>
        </div>
    </div>
    <div class="follows">
        <a href="{{ url('/following/'.$followers_id) }}" class="off">Following</a>
        <a href="#" class="on">Followers</a>
    </div>

    @if (count($followers) > 0)
        @foreach ($followers as $follower)
        <div class='account_card'>
            <a href=''><img src="{{ asset('storage/img/'.$follower->icon, true) }}"></a>
            <div class='info'>
                <div class='top'>
                    <div class='names'>
                        <a href=""><h4>{{ $follower->name }}</h4></a>
                    </div>
                </div>
                <div class='bottom'>
                <p>{{ $follower->bio }}</p>
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