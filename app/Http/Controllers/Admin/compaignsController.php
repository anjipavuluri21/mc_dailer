<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use DB;
use App\Compaigns;
use App\Lists;
use Yajra\DataTables\DataTables;
use Carbon\Carbon;





class CompaignsController extends Controller
{
     protected $_compaignsmodel = null;
    public function compaign(){
        return view('admin.compaigns.list_compaigns');
    }
//     public function addcompaign(){
//
//        return view('admin.compaigns.add_compaigns');
//    }
    /*Start: This metthod used for Compaign result display in ajax call*/
        public function compaignList(Request $request) {
           
//            $data = Compaigns::all();
            $data = DB::table('Compaigns')
            ->join('lists', 'Compaigns.list', '=', 'lists.id')
           
            ->select('Compaigns.*', 'lists.list_name AS list')
            ->get();
            
//            dd($data);
         //   print_r($data);
         //   exit; 
                return Datatables::of($data)
                    ->editColumn('compaign_name', function ($data) {      
                      return $data->compaign_name;
                   })
                    ->editColumn('discription', function ($data) {      
                      return $data->discription;
                   })
                   
                    ->editColumn('status', function ($data) {         
                       if($data->status == 1){
                         $type = "Active";
                       } 
                       elseif ($data->status == 2) {
                         $type = "Inactive";
                      }         
                      return $type;
                   })
                   ->editColumn('max_leads', function ($data) {      
                      return $data->max_leads;
                   })
                   
                   ->editColumn('list', function ($data) {      
                      return $data->list;
                   })
                   
                  ->addColumn('action', function ($data) {         
                       return '<a style="margin-left:5px;" href="'. url('edit_compaigns/').'/'.$data->id.'" title="Edit Task" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a><a href="'. url('delete_compaigns/').'/'.$data->id.'" style="margin-left:5px;" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>';              
                   })
                ->escapeColumns([])
                   ->addIndexColumn()->make(true);
        }
         
        
//          public function getleadModel(){
//                    if(!($this->_compaignsmodel instanceof Compaigns)){
//                  $this->_compaignsmodel = new Campaigns();
//                }
//                return $this->_compaignsmodel;
//          }
          /*End:This metthod used for Compaign result display in ajax call*/
          
          
          /*Start:This metthod used for add_compaigns page display*/
          public function add_compaign(){
                $listRes =  Lists::all();
                return view('admin.compaigns.add_compaigns',compact('listRes'));
            }
        /*End:This metthod used for add_compaigns page display*/
            
            /*Start:This metthod used save details in table*/
         public function saveCompaigns(Request $request){
             
                    $validatedData = Validator::make($request->all(),[
                     'compaign_name'     => 'required',
                     'discription'=>'required',
                     'max_leads'=>'required',
                     'details'=>'required',
                     'status'=>'required',
                     'list'=>'required',
                     ],[ 
                       "compaign_name.required"     =>   'campaign_name is required',
                       "discription.required"     =>   'discription is required',
                       "max_leads.required"     =>   'max_leads is required',
                       "details.required"     =>   'details is required',
                       "status.required"     =>   'status is required',
                         "list.required"     =>   'List is required',
                        ])->validate();    
                     $data = $request->all();
                     $data['updated_at']=date("Y-m-d h:i:s");
                     
                     unset($data['_token']);
//                    $compaigns= Compaigns::insert($data);
                    $compaigns= Compaigns::insert($data);
                   if($compaigns){
                       $request->session()->flash('message', 'compaigns Added successfully.');
                       $request->session()->flash('message-type', 'success');
                       return redirect()->route('compaign');       
                   }else{
                       $request->session()->flash('message', 'Something went wrong.');
                       $request->session()->flash('message-type', 'danger');
                       return redirect()->route('compaign');      
                   }     
               }
               
               /*End:This metthod used save details in table*/


            /*Start:This metthod used for edit page display*/

               public function edit_compaigns($id) {
                $editRes =  Compaigns::find($id);
                $listRes =  Lists::all();
                return view('admin.compaigns.edit_compaigns',compact('editRes','listRes'));
               }
               /*End :This metthod used for edit page display*/
               
               /*Start:This metthod used for update details*/
               
               public function updateCompaign(Request $request){
                        $validatedData = Validator::make($request->all(),[
                            'compaign_name'     => 'required',
                            'discription'=>'required',
                            'max_leads'=>'required',
//                            'details'=>'required',
                            'status'=>'required',
                            'list'=>'required'
                     ],[ 
                       "compaign_name.required"     =>   'campaign_name is required',
                       "discription.required"     =>   'discription is required',
                       "max_leads.required"     =>   'max_leads is required',
//                       "details.required"     =>   'details is required',
                       "status.required"     =>   'status is required',
                         "list.required"     =>   'List is required'
                        ])->validate();   	
                                 $updatedData = $request->all();
                     unset($updatedData['_token']);
                     unset($updatedData['id']);

                       $updateList =   Compaigns::where('id',$request->id)
                           ->update($updatedData);

                                 if($updateList){
                                 $request->session()->flash('message', 'Data Updated successfully.');
                                 $request->session()->flash('message-type', 'success');
                                 return redirect()->route('compaign');  	 		
                                 }
                                 else{
                                 $request->session()->flash('message', 'Something went wrong.');
                                 $request->session()->flash('message-type', 'danger');
                                 return redirect()->route('compaign');   	 		
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
