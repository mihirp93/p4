<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TransactionController extends Controller {
  public function getRegister() {
      echo "Register page (GET)";
  }

  public function postRegister() {
      echo "Register page(POST)";
  }

  public function getProfile() {
     # get the current user
     $user = \Auth::user();

     # get all transactions for the current user
     $transactions = \App\Transaction::where('user_id','=',$user->id)->get();

    return view('Transaction.show')->with('user',$user)
                                   ->with('transactions',$transactions);

  }

  ########################################################################################
  public function getAdd() {
  ########################################################################################
      # get the current user
      $user = \Auth::user();
      $types_for_dropdown = \App\Type::typesForDropdown();

      return view('Transaction.add')->with('user',$user)
                                    ->with('types_for_dropdown',$types_for_dropdown);
  }
  # getAdd()

  ########################################################################################
  public function postAdd(Request $request) {
  ########################################################################################
      $this->validate($request, [
        'trans_desc' => 'required|max:255',
        'trans_amount' => 'required|numeric|min:0.01',
        'trans_date' => 'required|date',
        'type_id' => 'not_in:0',
      ]);

      # Mass Assignment
      $data = $request->only('trans_desc','trans_amount','type_id');
      $data['user_id'] = \Auth::id();
      $transaction = \App\Transaction::create($data);

      return redirect('/profile');

  }
  # postAdd()

  public function getEdit() {
      echo "Edit transaction page(GET)";
  }

  public function postEdit() {
      echo "Edit transaction page(POST)";
  }
}
