<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    protected $table = 'stores';
    protected $fillable = ['name', 'address', 'image'];

    public function balance()
    {
        return $this->hasMany(BalanceStores::class);
    }
}
