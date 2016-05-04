<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
      ###########################################################################
      public function transactions() {
      ###########################################################################
      # The purpose of this function is to define a one to many relationship
      # between the transaction types and transactions. Meaning, there can be
      # many transactions for a transaction type.
        return $this->hasMany('App\Transaction');
      }
      # transactions()

      ###########################################################################
      public static function typesForDropdown() {
      ###########################################################################
      # The purpose of this function is to retrieve all possible transaction
      # types.

        # Get all types
        $types = \App\Type::orderBy('id','ASC')->get();
        $types_for_dropdown = [];
        foreach($types as $type) {
            $types_for_dropdown[$type->id] = $type->trans_type;
        }
        return $types_for_dropdown;
      }

}
