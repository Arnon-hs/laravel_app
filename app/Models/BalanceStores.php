<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BalanceStores extends Model
{
    use HasFactory;

    protected $table = 'balance_stores';
    protected $fillable = ['product_id', 'store_id'];

    public function store()
    {
        return $this->belongsTo(Store::class);
    }
}
