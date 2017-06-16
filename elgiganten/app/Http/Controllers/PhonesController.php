<?php

namespace App\Http\Controllers;

use App\phones;

class PhonesController extends Controller
{
      public function index()
      {

		$phones = phones::all();
			
		return view('phones.index', compact('phones'));
      }

      public function show($id)
      {
      	$phone = phones::find($id);
		
		return view('phones.show', compact('phone'));
      }
}

?>

