<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BalanceWarehouses extends Model
{
    use HasFactory;

    protected $table = 'balance_warehouses';
    protected $fillable = ['product_id', 'warehouses_id', 'count'];

    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
