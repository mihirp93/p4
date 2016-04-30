<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
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
