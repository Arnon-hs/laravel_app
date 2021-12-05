<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    use HasFactory;

    protected $table = 'warehouses';
    protected $fillable = ['name', 'address', 'image'];

    public function balance()
    {
        return $this->hasMany(BalanceWarehouses::class);
    }
}
