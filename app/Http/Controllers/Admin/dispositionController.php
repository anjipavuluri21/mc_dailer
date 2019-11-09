<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class dispositionController extends Controller
{
      public function disposition(){
		//return view('admin.list_details.list_details');
            return view('admin.disposition.list_disposition');
	}
        public function add_disposition(){
            return view('admin.disposition.add_disposition');
        }
}
