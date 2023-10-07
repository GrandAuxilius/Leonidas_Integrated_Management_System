<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Models\staffUsers;
use Illuminate\Http\Request;

class staffUsersController extends Controller
{
    public function showStaffUsers()
    {
        $staffUsers = staffUsers::all(); // Assuming you have an Eloquent model named Branch
    
        return view('staffUsers', ['staffUsers' => $staffUsers]); // Pass the branches to the view
    }
}
