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
    # You may access the authenticated user via the Auth facade
    $user = \Auth::user();

    if($user) {
        echo date("Y-m-d");
        echo "<br>";
        echo 'You are logged in as '. $user->name;
        echo "<br>";
        echo 'Your id is '. $user->id;
        $transactions = \App\Transaction::where('user_id','=',$user->id)->get();
        # Loop through each book and update them
        foreach($transactions as $transaction) {
          echo "<br>";
           echo "<hr>";
           echo "Transaction id:  ";
           echo $transaction->id;
           echo "<br>";
           echo "Transaction Desc : ";
           echo $transaction->trans_desc;
           echo "<br>";
           echo "Transaction Amount: $";
           echo $transaction->trans_amount;
           echo "<br>";
           echo "Created : ";
           echo $transaction->created_at;
           echo "<br>";
           echo "Updated: ";
           echo $transaction->updated_at;
           echo "<br>";

        }
    }
    else {
      return redirect('/login');
    }
  }

  ########################################################################################
  public function getAdd() {
  ########################################################################################
      $types_for_dropdown = \App\Type::typesForDropdown();
      return view('Transaction.addForm')->with('types_for_dropdown',$types_for_dropdown);
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
