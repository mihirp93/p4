<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
     protected $fillable = ['trans_desc','trans_amount','trans_date','type_id','user_id'];
}
