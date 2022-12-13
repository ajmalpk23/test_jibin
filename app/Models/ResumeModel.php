<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResumeModel extends Model
{
    protected $table = 'resume_table';
    protected $primaryKey = 'resume_id';
    protected $guarded = [];
    use HasFactory;
}
