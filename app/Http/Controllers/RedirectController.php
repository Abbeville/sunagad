<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        // dd($user->hasRole('admin'));
        if ($user->hasRole('user')) {
            return redirect()->route('user.dashboard');
        }else{
            return redirect()->route('admin.dashboard');
        }
   }

   public function login()
   {
    return redirect()->route('admin');
   }
}
