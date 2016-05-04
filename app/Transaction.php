<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
     protected $fillable = ['trans_desc','trans_amount','trans_date','type_id','user_id'];

     ###########################################################################
     public function type() {
     ###########################################################################
     # The purpose of this function is to define a one to many relationship
     # between the transaction types and transactions. Meaning, transactions
     # belong to only one transaction type.
        return $this->belongsTo('App\Type');
     }
     # type()
}
