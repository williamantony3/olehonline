<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelProduct extends Model
{
    protected $table = 'products';
    public $primaryKey = 'ProductId';

    public function productType(){
        return $this->belongsTo('App\ModelProductType', 'ProductTypeId', 'ProductTypeId');
    }

    public function province(){
        return $this->belongsTo('App\ModelProvince', 'ProvinceId', 'ProvinceId');
    }
}