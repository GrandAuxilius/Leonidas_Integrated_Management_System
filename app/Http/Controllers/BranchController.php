<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Models\Branch;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function showBranches()
    {
        $branches = Branch::all(); // Assuming you have an Eloquent model named Branch
    
        return view('branch', ['branches' => $branches]); // Pass the branches to the view
    }
}