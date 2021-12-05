<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BalanceWarehouses extends Model
{
    use HasFactory;

    protected $table = 'balance_warehouse';
    protected $fillable = ['product_id', 'warehouse_id'];

    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class);
    }
}
