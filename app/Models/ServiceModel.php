<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceModel extends Model
{
    protected $table = 'service_table';
    protected $primaryKey = 'service_id';
    protected $guarded = [];
    use HasFactory;
}
