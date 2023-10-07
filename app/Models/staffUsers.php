<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class staffUsers extends Model
{
    use HasFactory;
    protected $table = 'staffUsers';
    protected $primaryKey = 'staffUserID';

    protected $fillable = [
        'firstname',
        'lastname',
        'role',
        'phone',
        'email',
        'password',
        'profile',
        'accountStatus'
    ];
}
