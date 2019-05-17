<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ShopStatus extends Model
{
    protected $table = 'shop_status';

    protected $fillable = [
        'name', 'isActive'
    ];

}
