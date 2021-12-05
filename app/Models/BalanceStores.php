<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\Store;

class BalanceStores extends Model
{
    use HasFactory;

    protected $table = 'balance_stores';
    protected $fillable = ['product_id', 'store_id', 'count'];

    public function store()
    {
        return $this->belongsTo(Store::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
