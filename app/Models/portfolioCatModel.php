<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class portfolioCatModel extends Model
{
    protected $table = 'portfolio_category_table';
    protected $primaryKey = 'cat_id';
    protected $guarded = [];
    use HasFactory;
}
