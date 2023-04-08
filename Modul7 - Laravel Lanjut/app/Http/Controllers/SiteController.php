<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiteController extends Controller
{
    public function auth(Request $req)
    {
        if (Auth::attempt(['email' => $req->em, 'password' => $req->pwd])) {
            return redirect('/product');
        }
        return redirect('/auth')->with('msg', 'Email / password salah');
    }
}
