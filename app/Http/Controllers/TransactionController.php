<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TransactionController extends Controller {

  ########################################################################################
  public function getProfile() {
  ########################################################################################
  # The purpose of this function is to retrieve user's data and pass it to a view
  # so that it can be displayed.

     # get the current user
     $user = \Auth::user();

     # get all transactions for the current user
     $transactions = \App\Transaction::where('user_id','=',$user->id)->get();

     # invoke the view with the retrieved data.
     return view('transaction.show')->with('user',$user)
                                    ->with('transactions',$transactions);
  }

  ########################################################################################
  public function getAdd() {
  ########################################################################################
  # The purpose of this function is to retrieve user's data and transaction
  # types data, which will be used to add new transactions.

      # get the current user
      $user = \Auth::user();

      # get types of transactions
      $types_for_dropdown = \App\Type::typesForDropdown();

      # invoke the view with the retrieved data.
      return view('transaction.add')->with('user',$user)
                                    ->with('types_for_dropdown',$types_for_dropdown);
  }
  # getAdd()

  ########################################################################################
  public function postAdd(Request $request) {
  ########################################################################################
  # The purpose of this function is to validate the transactional data entered by the
  # users and save it to the database.

      # validate data
      $this->validate($request, [
        'description' => 'required|max:255',
        'amount' => 'required|numeric|min:0.01',
        'date' => 'required|date',
        'type' => 'not_in:0',
      ]);

      # instantiate and set a transaction object and then save it to the database
      $transaction = new \App\Transaction();
      $transaction->trans_desc = $request->description;
      $transaction->trans_amount = $request->amount;
      $transaction->trans_date = $request->date;
      $transaction->type_id = $request->type;
      $transaction->user_id = \Auth::id();
      $transaction->save();

      # inform the user that the transaction was successfully added
      \Session::flash('message','Your transaction was added!');

      # redirect the user to profile page to avoid multiple postings
      return redirect('/profile');
  }
  # postAdd()

 ########################################################################################
 public function getEdit($id = null) {
 ########################################################################################
 # The purpose of this function is to retrieve the data for a transaction so that
 # it can be presented to the user for editing.

      # get the current user
      $user = \Auth::user();

      # get types of transactions
      $types_for_dropdown = \App\Type::typesForDropdown();

      # get the transactional data
      $transaction = \App\Transaction::where('user_id','=',$user->id)
                                      ->where('id', '=', $id)
                                      ->first();

      # inform the user if there is no such transaction
      if(is_null($transaction)) {
           \Session::flash('message','Transaction not found');
           return redirect('/profile');
      }

      # invoke the edit data with the retrieved data.
      return view('transaction.edit')->with('user',$user)
                                     ->with('types_for_dropdown',$types_for_dropdown)
                                     ->with('transaction',$transaction);

 }
 # getEdit()

 ########################################################################################
 public function postEdit(Request $request) {
 ########################################################################################
 # The purpose of this function is to validate the transactional data entered by the
 # users and save it to the database.

     # validate data
     $this->validate($request, [
      'description' => 'required|max:255',
      'amount' => 'required|numeric|min:0.01',
      'date' => 'required|date',
      'type' => 'not_in:0',
     ]);

     # instantiate a transaction object and save it to the database
     $transaction = \App\Transaction::find($request->id);
     $transaction->trans_desc = $request->description;
     $transaction->trans_amount = $request->amount;
     $transaction->trans_date = $request->date;
     $transaction->type_id = $request->type;
     $transaction->user_id = \Auth::id();
     $transaction->save();

     # inform the user that the transaction was successfully updated
     \Session::flash('message','Your transaction was successfully updated!');

     # redirect the user to profile page to avoid multiple postings
     return redirect('/profile');
  }
  # postEdit()

  ########################################################################################
  public function getConfirmDelete($id = null) {
  ########################################################################################
  # The purpose of this function is to present the transaction to the user so that
  # they can confirm the deletetion

      # get the current user
      $user = \Auth::user();

      # get the transactional data
      $transaction = \App\Transaction::find($id);

      # the transaction was not found. So, inform the user.
      if(is_null($transaction)) {
           \Session::flash('message','Transaction not found');
           return redirect('/profile');
      }

      # return the view with the retrieved data
      return view('transaction.delete')->with('user',$user)
                                       ->with('transaction', $transaction);
  }
  # getConfirmDelete()

  ########################################################################################
  public function getDelete($id = null) {
  ########################################################################################
  # The purpose of this function is to delete the desired transaction.

        # get the the transactional data.
        $transaction = \App\Transaction::find($id);

        # the transaction was not found. So, inform the user.
        if(is_null($transaction)) {
            \Session::flash('message','Transaction not found.');
            return redirect('/profile');
        }

        # delete the transaction
        $transaction->delete();

        # inform the user that the transaction was deleted
        \Session::flash('message','Transaction was deleted.');

        return redirect('/profile');
  }
  # getDelete()
}
