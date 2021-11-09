<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    public function __construct(){
        $this->middleware([
           'auth',
           'privilege:admin'
        ]);
   }

   public function index()
   {
        return view('pages.admin.dashboard');
   }
}
