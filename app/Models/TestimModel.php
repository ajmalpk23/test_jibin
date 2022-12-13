<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestimModel extends Model
{
    protected $table = 'testimonials_table';
    protected $primaryKey = 'testimonials_id';
    protected $guarded = [];
    use HasFactory;
}
