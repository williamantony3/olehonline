<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelTransactionHeader extends Model
{
    protected $table = 'transactionheaders';
    public $primaryKey = 'TransactionId';

    public function transactionDetails(){
        return $this->hasMany('App\ModelTransactionDetail', 'TransactionId', 'TransactionId');
    }
}
