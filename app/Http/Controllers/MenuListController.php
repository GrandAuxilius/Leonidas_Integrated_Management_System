<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Models\menuList;
use Illuminate\Http\Request;

class MenuListController extends Controller
{
    public function showMenuList()
    {
        $menuList = menuList::all(); 
    
        return view('menuList', ['menuList' => $menuList]); 
    }
}
