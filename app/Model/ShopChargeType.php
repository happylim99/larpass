<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ShopChargeType extends Model
{
    protected $table = 'shop_charge_types';

    protected $fillable = [
        'name', 'description', 'code', 'status'
    ];
}
