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


class UserController extends Controller
{
	  private $_userlib = null;

	  public function index(){
             return view('admin.users.users');
	  }
	  public function adduser(){
	  	return view('admin.users.add_user');
	  }
	  public function saveUser(Request $request){
        $validatedData = Validator::make($request->all(),[
        'name'     => 'required',
        'email'		=> 'required',
        'mobile_number'=> 'required|unique:users,mobile_no',
        'designation'=>'required', 
        'department'=>'required',
        'gender'=> 'required',
        'password'=> 'required',
        'user_type'=>'required'
        ],[ 
          "name.required"     =>   'Name is required',
          "email.required"	 => 'Email is required',
          "mobile_number.required"      =>   'Mobile Number Required',
          "designation.required"      =>   'Designation Required',
          "department.required"      =>   'Department Required',
          "gender.required"      =>   'Gender Required',
          "password.required"      =>   'Password is Required',
          "user_type.required"      =>   'User type is Required'
           ])->validate();  	
       	$data = $request->all();
  	 	$user =  $this->getUser()->saveUser($data);
  	 	if($user){
	        $request->session()->flash('message', 'User Added successfully.');
	        $request->session()->flash('message-type', 'success');
	        return redirect()->route('users');  	 		
  	 	}
  	 	else{
	        $request->session()->flash('message', 'Something went wrong.');
	        $request->session()->flash('message-type', 'danger');
	        return redirect()->route('users');   	 		
  	 	}
  	}
	public function editUser($id){
	 $getuser = $this->getUser()->getuser($id);
	 //dd($getuser);
	  return view('admin.users.edit_user',compact('getuser'));
	}
	public function updateUser(Request $request){
       $validatedData = Validator::make($request->all(),[
        'name'     => 'required',
        'mobile_no'=> 'required',
        'designation'=>'required', 
        'department'=>'required',
        'gender'=> 'required',
        'user_type'=>'required'
        ],[ 
          "name.required"     =>   'Name is required',
          "mobile_no.required"      =>   'Mobile Number Required',
          "designation.required"      =>   'Designation Required',
          "department.required"      =>   'Department Required',
          "gender.required"      =>   'Gender Required',
          "user_type.required"      =>   'User type is Required'
           ])->validate();  	
       	$data = $request->all();
  	 	$user =  $this->getUser()->updateUser($data);
  	 	if($user){
	        $request->session()->flash('message', 'User updated successfully.');
	        $request->session()->flash('message-type', 'success');
	        return redirect()->route('users');  	 		
  	 	}
  	 	else{
	        $request->session()->flash('message', 'Something went wrong.');
	        $request->session()->flash('message-type', 'danger');
	        return redirect()->route('users');   	 		
  	 	}		
	}
    public function allUser(){
      return $this->getUser()->allUser();
    }  
 
  	public function getUser()
	{
		if(!($this->_userlib instanceof \App\Http\Library\User)){
			$this->_userlib = new \App\Http\Library\User();
		}
		return $this->_userlib;
	}
}
?>