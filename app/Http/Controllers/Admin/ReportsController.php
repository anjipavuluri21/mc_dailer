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
    public function dail_status_list(){
        $data=DB::table('Disposition')
                    ->leftJoin('users', 'Disposition.user_id', '=', 'users.id')
                    ->select('*','Disposition.comments As desp_comments','Disposition.created_at As date','disposition.user_id As attempts')
//                    ->groupBy('Disposition.user_id')
                    ->get();
//        dd($data);
        return Datatables::of($data)
                 ->editColumn('attempts', function ($data) {   
                       if($data->attempts == "" || $data->attempts == "NULL" ){
                           $data->attempts="1";
                       } else{
                          $data->attempts=$data->attempts;
                       }
                      return $data->attempts;
                   })
                    ->editColumn('date', function ($data) {  
                       if($data->date == ""){
                           $data->date="NA";
                       } else{
                          $data->date=$data->date; 
                       }
                      return $data->date;
                   })
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
                    ->editColumn('status', function ($data) {         
                       if($data->status == 1){
                         $type = "Connected";
                       } 
                       elseif ($data->status == 2) {
                         $type = "Not Connected";
                      }         
                      return $type;
                   })
                    ->editColumn('dispo_name', function ($data) {      
                      return $data->dispo_name;
                   })
                   
                   ->editColumn('audio', function ($data) {
                       if($data->audio == ""){
                           $data->audio="NA";
                       }
//                      return $data->audio;
//                      return '<a style="margin-left:5px;" href="'. "base_url().'uploads/audio/'".'/'.$data->audio.'" title="Play Audio" class="btn btn-sm btn-primary"><i class="fa fa-play"></i>' .$data->audio. '<a/>';
                      return '<audio controls><source src="'.'uploads/audio/'.$data->audio.'" type="audio/mpeg"><i class="fa fa-play"></i>' .$data->audio.'</audio>';
                   })
                  ->addColumn('download', function ($data) {  
                      
                       return '<a style="margin-left:5px;" href="'.'uploads/audio/'.$data->audio.'" title="Download Audio" class="btn btn-sm btn-primary" download><i class="fa fa-download"></i></a>';              
                   })
                   
                ->escapeColumns([])
                   ->addIndexColumn()->make(true);
    } 
        public function agent_report(){ 

        return view('admin.reports.agent_performance');
    }
     public function download_report(){

        return view('admin.reports.download');
    }
}
