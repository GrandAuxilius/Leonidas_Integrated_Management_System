<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menuList extends Model
{
    use HasFactory;
    protected $table = 'menuList';
    protected $primaryKey = 'menuID';

    protected $fillable = [
        'menuName',
        'menuCategory',
        'price',
        'menuStatus',

    ];
}
