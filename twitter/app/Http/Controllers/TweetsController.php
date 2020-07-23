<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Tweet;
use App\Follow;
use Validator;

class TweetsController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }
    //
    public function index(){
        $tweets = Tweet::orderBy('created_at', 'desc')->where('user_id', Auth::user()->id)->get();
        $following = Follow::where('followed_by', Auth::user()->id)->get();
        $followers = Follow::where('is_followed', Auth::user()->id)->get();
        return view('profile', compact('tweets', 'following', 'followers'));
    }
    
    //
    public function store(Request $request){
        //バリデーション
        $validator = Validator::make($request->all(), [
            'text' => 'required|max:140',
        ]);
    
        //バリデーション:エラー 
        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }
        //以下に登録処理を記述（Eloquentモデル）
        // Eloquent モデル
        $tweets = new Tweet;
        $tweets->user_id = $request->user_id;
        $tweets->text = $request->text;
        $tweets->tweeted_at = '2017-03-07 00:00:00';
        $tweets->save(); 
        return redirect('/');
    }
    
    public function destroy(Tweet $tweet){
        $tweet->delete();       //追加
        return redirect('/');  //追加
    }
    
    public function explore(){
        $tweets = Tweet::join('users', 'tweets.user_id', '=', 'users.id')
        ->where('user_id', '!=', Auth::user()->id)
        ->orderBy('tweets.created_at', 'desc')
        -> get();
        return view('explore', compact('tweets'));
    }
}