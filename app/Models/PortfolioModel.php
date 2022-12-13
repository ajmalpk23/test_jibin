<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioModel extends Model
{
    protected $table = 'portfolio_table';
    protected $primaryKey = 'portfolio_id';
    protected $guarded = [];
    use HasFactory;

    public function portfolioCategory()
    {
        return $this->hasMany(portfolioCatModel::class, 'cat_id', 'cat_id');
    }
}
