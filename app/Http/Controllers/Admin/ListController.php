<?php
namespace App\Http\Controllers\Admin;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Hash;
use DB;
use Exception;
use Mail;
use App\Lists;


class ListController extends Controller
{
	private $_listlib = null;
	public function index(){
		//return view('admin.list_details.list_details');
    return view('admin.list.list_log');
	}
  public function list_details(){
    return view('admin.list_details.list_details');
  }
	public function add_number($id){
		return view('admin.list_details.add_number',compact('id'));
	}
  public function add_list(){
    return view('admin.list.add_list');
  }
  public function edit_list($id){
    $list =  $this->getList()->getSinglelist($id);
    //dd($list);
    return view('admin.list.edit_list',compact('list'));
  }
  public function saveList(Request $request){
       $validatedData = Validator::make($request->all(),[
        'list_name'     => 'required',
        'list_type'=>'required'
        ],[ 
          "list_name.required"     =>   'List Name is required',
          "list_type.required"      =>   'List Type is Required'
           ])->validate();    
        $data = $request->all();
      $user =  $this->getList()->saveList($data);
      if($user){
          $request->session()->flash('message', 'List Details Added successfully.');
          $request->session()->flash('message-type', 'success');
          return redirect()->route('list_log');       
      }
      else{
          $request->session()->flash('message', 'Something went wrong.');
          $request->session()->flash('message-type', 'danger');
          return redirect()->route('list_log');         
      }     
  }
        public function saveNumber(Request $request){
        $validatedData = Validator::make($request->all(),[
        'name'     => 'required',
        'phone_number'=> 'required',
        'comments'=>'required'
        ],[ 
          "name.required"     =>   'Name is required',
          "phone_number.required"	 => 'Phone number is required',
          "comments.required"      =>   'Comments is Required'
           ])->validate();  	
       	$data = $request->all();
  	 	$user =  $this->getList()->saveLeadnumber($data);
  	 	if($user){
	        $request->session()->flash('message', 'Lead Number Added successfully.');
	        $request->session()->flash('message-type', 'success');
	        return redirect()->route('list_log');  	 		
  	 	}
  	 	else{
	        $request->session()->flash('message', 'Something went wrong.');
	        $request->session()->flash('message-type', 'danger');
	        return redirect()->route('list_log');   	 		
  	 	}		
	}
  
    public function allLists(){
      return $this->getList()->allLists();
    }
    public function allLeads(){
      return $this->getList()->allLeads();
    } 
   public function edit_lead($id){
       $getnumber = $this->getList()->getLeadnumber($id);
	 
	  return view('admin.list_details.edit_number',compact('getnumber'));    	
    }
    public function updateLead(Request $request){
       $validatedData = Validator::make($request->all(),[
        'name'     => 'required',
        'phone_number'=> 'required|unique:users,mobile_no',
        'comments'=>'required'
        ],[ 
          "name.required"     =>   'Name is required',
          "phone_number.required"	 => 'Phone number is required',
          "comments.required"      =>   'Comments is Required'
           ])->validate();  	
       	$data = $request->all();
  	 	$user =  $this->getList()->updateLeadnumber($data);
  	 	if($user){
	        $request->session()->flash('message', 'Lead Number Updated successfully.');
	        $request->session()->flash('message-type', 'success');
	        return redirect()->route('list_log');  	 		
  	 	}
  	 	else{
	        $request->session()->flash('message', 'Something went wrong.');
	        $request->session()->flash('message-type', 'danger');
	        return redirect()->route('list_log');   	 		
  	 	}    	
    }
    
    public function updateList(Request $request){
       $validatedData = Validator::make($request->all(),[
        'list_name'     => 'required',
        'list_type'=> 'required',
        ],[ 
          "list_name.required"     =>   'Name is required',
          "list_type.required"	 => 'Phone number is required',
           ])->validate();  	
       	       // $data = $request->all();
                
      $updateList =   Lists::where('id',$request->id)
          ->update(['list_name' => $request->list_name,'list_type' => $request->list_type]);
                
  	 	if($updateList){
	        $request->session()->flash('message', 'List Updated successfully.');
	        $request->session()->flash('message-type', 'success');
	        return redirect()->route('list_log');  	 		
  	 	}
  	 	else{
	        $request->session()->flash('message', 'Something went wrong.');
	        $request->session()->flash('message-type', 'danger');
	        return redirect()->route('list_log');   	 		
  	 	}    	
    }
    
  	public function getList()
	{
		if(!($this->_listlib instanceof \App\Htstp\Library\Listnumber)){
			$this->_listlib = new \App\Http\Library\Listnumber();
		}
		return $this->_listlib;
	}
        
}