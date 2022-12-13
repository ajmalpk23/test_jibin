<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InterestesModel extends Model
{
    protected $table = 'interest_table';
    protected $primaryKey = 'interest_id';
    protected $guarded = [];
    use HasFactory;
}
