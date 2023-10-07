<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Models\sign_in;
use Illuminate\Http\Request;

class SignInController extends Controller
{
    public function showsignIn()
    {
        $sign_in_user = sign_in::all();
    
        return view('sign_in', ['sign_in_user' => $sign_in_user]); }
}