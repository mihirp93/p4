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
      echo "Profile page(GET)";
  }

  public function getAddBook() {
      echo "Add book page(GET)";
  }

  public function postAddBook() {
      echo "Add book page(POST)";
  }

  public function getEditBook() {
      echo "Edit book page(GET)";
  }

  public function postEditBook() {
      echo "Edit book page(POST)";
  }
}
