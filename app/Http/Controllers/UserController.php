<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function addProduct($id)
    {
        $user = Auth::user();
        $user->products()->attach($id);
        return redirect()->route('home');
    }

    public function removeProduct($id)
    {
        $user = Auth::user();
        $user->products()->detach($id);
        return redirect()->route('home');
    }
}
