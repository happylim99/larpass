<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $table = 'shops';

    protected $fillable = [
        'owner_id', 'name', 'description', 'bank_id', 'bank_account_no', 'shop_charge_type_id', 'charge_value', 'rating', 'status'
    ];

}
