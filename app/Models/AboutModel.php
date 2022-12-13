<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutModel extends Model
{
    protected $table = 'about_table';
    protected $primaryKey = 'about_id';
    protected $guarded = [];
    use HasFactory;
}
