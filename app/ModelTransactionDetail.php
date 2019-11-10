<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelTransactionDetail extends Model
{
    protected $table = "transactiondetails";
    public $primaryKey = 'TransactionDetailId';
}
