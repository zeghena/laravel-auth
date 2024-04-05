<?php 

namespace App\Http\Controllers\MyTests;

use App\Http\Controllers\Controller;

class MyTestController extends Controller {
  public function index()
  {
     
     return view('guest.test');
  }
}