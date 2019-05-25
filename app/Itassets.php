<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Itassets extends Model
{
     protected $fillable = [
        'label', 'description','type','status','purchase_date','purchase_owner'
    ];
}
