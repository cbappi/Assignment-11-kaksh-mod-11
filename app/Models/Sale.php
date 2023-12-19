<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;
    protected $fillable = ['sell_date','product_name', 'unit_price', 'sell_quantity','sell_amount'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
