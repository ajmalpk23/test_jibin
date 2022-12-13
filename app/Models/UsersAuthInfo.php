<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersAuthInfo extends Model
{
    protected $table = 'user_table';
    protected $primaryKey = 'id';
    protected $guarded = [];
    use HasFactory;
}
