<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelProduct extends Model
{
    protected $table = 'products';
    public $primaryKey = 'ProductId';
}
