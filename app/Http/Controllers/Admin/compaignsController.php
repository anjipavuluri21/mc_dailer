<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CompaignsController extends Controller
{
    public function compaign(){
        return view('admin.compaigns.list_compaigns');
    }
     public function addcompaign(){
//        echo "123";
//        exit;
//         
        return view('admin.compaigns.add_compaigns');
    }
}
