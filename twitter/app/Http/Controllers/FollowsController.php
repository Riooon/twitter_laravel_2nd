<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Follow;
use App\User;
use Validator;

class FollowsController extends Controller
{
    //
    public function follow(Request $request){
        try {
            $follows = new Follow;
            $follows->is_followed = $request->is_followed;
            $follows->followed_by = $request->followed_by;
            $follows->save(); 
            return back();
        } catch (\Exception $e) {
            /** Do nothing */
            return back();
        }
    }

    public function following($following_id){
        $followings = Follow::join('users', 'follows.is_followed', '=', 'users.id')->where('followed_by', $following_id)->get();
        return view('following', compact('followings','following_id'));
    }
    public function followers($followers_id){
        $followers = Follow::join('users', 'follows.followed_by', '=', 'users.id')->where('is_followed', $followers_id)->get();
        return view('followers', compact('followers', 'followers_id'));
    }
}
