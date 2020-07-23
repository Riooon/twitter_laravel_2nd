<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Follow;
use Validator;

class UsersController extends Controller
{
    //
    public function update(Request $request){
    $users = User::find($request->id);
    $users->name = $request->name;
    
    if(!$request->file('icon')==NULL){
    $path = $request->file('icon')->store('public/img');
    $users->icon = basename($path);
    }
    
    $users->bio = $request->bio;
    $users->save();
    return redirect('/');
    }
    
    public function account(User $account){
        $tweets = User::join('tweets', 'tweets.user_id', '=', 'users.id')->orderBy('tweets.created_at', 'desc')->where('user_id', $account->id)->get();
        $following = Follow::join('users', 'follows.is_followed', '=', 'users.id')->where('followed_by', $account->id)->get()->count();
        $followers = Follow::join('users', 'follows.followed_by', '=', 'users.id')->where('is_followed', $account->id)->get()->count();
        
        return view('account', ['account' => $account, 'tweets' => $tweets, 'following' => $following, 'followers' => $followers]);
    }
}