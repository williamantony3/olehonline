<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelCart extends Model
{
    protected $table = 'carts';
    public $primaryKey = 'CartId';
    
    public function product(){
        return $this->belongsTo('App\ModelProduct', 'ProductId', 'ProductId');
    }
}
