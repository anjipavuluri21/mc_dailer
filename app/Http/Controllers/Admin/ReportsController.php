<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Yajra\DataTables\DataTables;
use Carbon\Carbon; 

class ReportsController extends Controller
{
    public function reports(){
        return view('admin.reports.list_reports');
    }
    public function lead_status_report(){
     return view('admin.reports.lead_status');
    }
    public function lead_status_list(){
        $data=DB::table('Disposition')
                    ->join('users', 'Disposition.user_id', '=', 'users.id')
                    ->select('*','Disposition.comments As desp_comments','Disposition.created_at As date')
                    ->get();
        return Datatables::of($data)
                    ->editColumn('date', function ($data) {   
                       if($data->date == ""){
                           $data->date="NA";
                       } else{
                          $data->date=$data->date;
                       }
                      return $data->date;
                   })
                    ->editColumn('name', function ($data) {      
                      return $data->name;
                   })
                    ->editColumn('mobile_no', function ($data) {      
                      return $data->mobile_no;
                   })
                    ->editColumn('name', function ($data) {      
                      return $data->name;
                   })
                    ->editColumn('mobile_no', function ($data) {      
                      return $data->mobile_no;
                   })
                    ->editColumn('dispo_name', function ($data) {      
                      return $data->dispo_name;
                   })
                    ->editColumn('status', function ($data) {         
                       if($data->status == 1){
                         $type = "Connected";
                       } 
                       elseif ($data->status == 2) {
                         $type = "Not Connected";
                      }         
                      return $type;
                   })
                   ->editColumn('assign_status', function ($data) {         
                       if($data->assign_status == 1){
                         $type_1 = "Assined";
                       } 
                       elseif ($data->assign_status == 2) {
                         $type_1 = "Not Assined";
                      } else{
                         $type_1 = "NA"; 
                      }        
                      return $type_1;
                   })
                   
                   ->editColumn('desp_comments', function ($data) {
                       if($data->desp_comments == ""){
                           $data->desp_comments="NA";
                       }
                      return $data->desp_comments;
                   })
//                  ->addColumn('action', function ($data) {         
//                       return '<a style="margin-left:5px;" href="'. url('edit_disposition/').'/'.$data->id.'" title="Edit Task" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a><a href="'. url('delete_disposition/').'/'.$data->id.'" style="margin-left:5px;" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>';              
//                   })
                ->escapeColumns([])
                   ->addIndexColumn()->make(true);
    }
    public function dialstatus_report(){

        return view('admin.reports.dialstatus');
    }
        public function agent_report(){

        return view('admin.reports.agent_performance');
    }
     public function download_report(){

        return view('admin.reports.download');
    }
}
