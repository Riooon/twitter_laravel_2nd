@extends('layouts.app')
@section('content')

<div class="center">
    
    <div class="center-top">
        <div class="arrow">
            <a href="javascript:history.back();"><i class="fas fa-arrow-left"></i>
        </div>
        <div class="names">
            <h4></h4>
        </div>
    </div>
    <div class="follows">
        <a href="#" class="on">Following</a>
        <a href="{{ url('/followers/'.$following_id) }}" class="off">Followers</a>
    </div>

    @if (count($followings) > 0)
        @foreach ($followings as $following)
        <div class='account_card'>
            <a href=''><img src="{{ asset('storage/img/'.$following->icon, true) }}"></a>
            <div class='info'>
                <div class='top'>
                    <div class='names'>
                        <a href=""><h4>{{ $following->name }}</h4></a>
                    </div>
                </div>
                <div class='bottom'>
                <p>{{ $following->bio }}</p>
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