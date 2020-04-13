<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
use App\User;
use JWTAuth;


class TodoController extends Controller
{
    public function index()
    {
        $user = JWTAuth::parseToken()->authenticate();
        return Todo::where('user_id', $user->id)->get();
    }

    public function destroy($id) 
    {
        Todo::findOrFail($id)->delete();
    }
}
