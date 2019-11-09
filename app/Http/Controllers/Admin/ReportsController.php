<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReportsController extends Controller
{
    public function reports(){
        return view('admin.reports.list_reports');
    }
//    public function display_report(){
//
//        return view('admin.reports.lead_status');
//    }
}
