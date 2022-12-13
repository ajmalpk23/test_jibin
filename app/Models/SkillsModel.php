<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkillsModel extends Model
{
    protected $table = 'skill_table';
    protected $primaryKey = 'skill_id';
    protected $guarded = [];
    use HasFactory;
}
