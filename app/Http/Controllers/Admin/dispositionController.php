<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Disposition;
use App\User;use DB;
use Validator;
use Yajra\DataTables\DataTables;
use Carbon\Carbon; 

class DispositionController extends Controller
{
    protected $_dispmodel = null;
    /*Start:This metthod used for list page display*/
      public function disposition(){
	  return view('admin.disposition.list_disposition');
	}
         /*End:This metthod used for list page display*/
        
         /*Start:This metthod used for list result display in ajax call*/
        public function dispositionList(Request $request) {
//            $data = Disposition::all();
            $data=DB::table('Disposition')
                    ->join('users', 'Disposition.user_id', '=', 'users.id')
                    ->select('Disposition.*', 'users.name AS user_name')
                    ->get();
                return Datatables::of($data)
                    ->editColumn('dispo_name', function ($data) {      
                      return $data->dispo_name;
                   })
                    ->editColumn('discription', function ($data) {      
                      return $data->discription;
                   })
                    ->editColumn('dispo_code', function ($data) {      
                      return $data->dispo_code;
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
                   
                   ->editColumn('call_back', function ($data) {      
                      return $data->call_back;
                   })
                  ->addColumn('action', function ($data) {         
                       return '<a style="margin-left:5px;" href="'. url('edit_disposition/').'/'.$data->id.'" title="Edit Task" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a><a href="'. url('delete_disposition/').'/'.$data->id.'" style="margin-left:5px;" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>';              
                   })
                ->escapeColumns([])
                   ->addIndexColumn()->make(true);
        }
         
        
          public function getleadModel(){
                    if(!($this->_dispmodel instanceof Disposition)){
                  $this->_dispmodel = new Disposition();
                }
                return $this->_dispmodel;
          }
          /*End:This metthod used for list result display in ajax call*/
          
          /*Start:This metthod used for add_disposition page display*/
          public function add_disposition(){
              
              $userRes=User::all();
                return view('admin.disposition.add_disposition',compact('userRes'));
            }
        /*End:This metthod used for add_disposition page display*/
            
            /*Start:This metthod used save details in table*/
         public function saveDisposition(Request $request){
                    $validatedData = Validator::make($request->all(),[
                     'dispo_name'     => 'required',
                     'discription'=>'required',
                     'dispo_code'=>'required',
                     'call_back'=>'required',
                     'status'=>'required',
                     'user_id'=>'required', 
                     ],[ 
                       "dispo_name.required"     =>   'dispo_name is required',
                       "discription.required"     =>   'discription is required',
                       "dispo_code.required"     =>   'dispo_code is required',
                       "call_back.required"     =>   'callback is required',
                       "status.required"     =>   'status is required',
                         "user_id.required"     =>   'User is required'
                        ])->validate();    
                     $data = $request->all();
                     unset($data['_token']);
                     
                    $disposition= Disposition::insert($data);
                   if($disposition){
                       $request->session()->flash('message', 'Disposition Added successfully.');
                       $request->session()->flash('message-type', 'success');
                       return redirect()->route('disposition');       
                   }else{
                       $request->session()->flash('message', 'Something went wrong.');
                       $request->session()->flash('message-type', 'danger');
                       return redirect()->route('disposition');         
                   }     
               }
               
               /*End:This metthod used save details in table*/
               
               
               /*Start:This metthod used for edit page display*/
               public function edit_disposition($id){
                $editRes =  Disposition::find($id);
                $userRes=User::all();
                return view('admin.disposition.edit_disposition',compact('editRes','userRes'));
               }
               /*End :This metthod used for edit page display*/
               /*Start:This metthod used for update details*/
               
               public function updateDisposition(Request $request){              
                        $validatedData = Validator::make($request->all(),[
                            'dispo_name'     => 'required',
                            'discription'=>'required',
                            'dispo_code'=>'required',
                            'call_back'=>'required',
                            'status'=>'required',
                            'user_id'=>'required'
                     ],[ 
                       "dispo_name.required"     =>   'dispo_name is required',
                       "discription.required"     =>   'discription is required',
                       "dispo_code.required"     =>   'dispo_code is required',
                       "call_back.required"     =>   'callback is required',
                       "status.required"     =>   'status is required',
                         "user_id.required"     =>   'User is required'
                        ])->validate();   	
                                 $updatedData = $request->all();
                     unset($updatedData['_token']);
                     unset($updatedData['id']);

                       $updateList =   Disposition::where('id',$request->id)
                           ->update($updatedData);

                                 if($updateList){
                                 $request->session()->flash('message', 'Data Updated successfully.');
                                 $request->session()->flash('message-type', 'success');
                                 return redirect()->route('disposition');  	 		
                                 }
                                 else{
                                 $request->session()->flash('message', 'Something went wrong.');
                                 $request->session()->flash('message-type', 'danger');
                                 return redirect()->route('disposition');   	 		
                                 }    	
                     }
                     /*End:This metthod used for update details*/
                    
                     /*Start:This metthod used for delete record*/
                     
          public function delete_disposition(Request $request,$id){
                 $getRes =  Disposition::find($id);
                 if($getRes){
                                $getRes->delete();
                                 $request->session()->flash('message', 'Recored deleted successfully.');
                                 $request->session()->flash('message-type', 'success');
                                 return redirect()->route('disposition');  	 		
                                 }else{
                                 $request->session()->flash('message', 'Something went wrong.');
                                 $request->session()->flash('message-type', 'danger');
                                 return redirect()->route('disposition');   	 		
                                 }
               }
                /*End:This metthod used for delete record*/
        
  
}
