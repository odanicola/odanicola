<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\BrandGallery;

class MBrandPortfolio extends Model
{
    protected $table = 'm_brand_portfolio';
    protected $primaryKey = 'id';

    public function gallery() {
        return $this->hasMany(BrandGallery::class, 'portfolio_id');
    }
}
