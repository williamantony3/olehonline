<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelCustomer extends Model
{
    protected $table = 'customers';
    public $primaryKey = 'CustomerId';
}
