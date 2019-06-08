<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'products';

    public $primatyKey = 'item_id';

    public $itemstamps = true;


}
