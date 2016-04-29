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
        echo 'You are logged in as '. $user->name;
        echo "<br>";
        echo 'Your id is '. $user->id;
    }
    else {
      return redirect('/login');
    }
  }

  public function getAdd() {
      echo "Add transaction page(GET)";
  }

  public function postAdd() {
      echo "Add transaction page(POST)";
  }

  public function getEdit() {
      echo "Edit transaction page(GET)";
  }

  public function postEdit() {
      echo "Edit transaction page(POST)";
  }
}
