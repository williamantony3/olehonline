<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelProductType extends Model
{
    protected $table = "producttypes";
    public $primaryKey = "ProductTypeId";

    public function products(){
        return $this->hasMany('App\ModelProduct', 'ProductTypeId', 'ProductTypeId');
    }
}
