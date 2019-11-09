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


class AdminController extends Controller
{

  private $_userlib = null;

  public function index(){
    return view('admin.Login');
  }
    public function adminLogin(Request $request){
           $validatedData = Validator::make($request->all(),[
        
        'username' => 'required',
        'password' => 'required|min:6'
        ],[
         "username.required" => 'Email is  is required',
         "password.required" => 'Password is required'
      ])->validate();
          $username = $request->username;

          $login_type = filter_var($request->input('username'), FILTER_VALIDATE_EMAIL) ? 'email': 'em_id';
          $request->merge([ 
              $login_type => $request->input('username')
          ]);
 
            if(Auth::attempt($request->only($login_type, 'password'))) { 
              return redirect()->route('dashboard');
            }
            else
            {
              $request->session()->flash('message', 'Invalid email or password');
              $request->session()->flash('message-type', 'danger');
              return redirect()->back()->withInput($request->except("password"));    
            } 
    }  
    public function dashboard(){
        return view('admin.dashboard');
    } 
    public function getUser()
    {
      if(!($this->_userlib instanceof \App\Http\Library\User)){
        $this->_userlib = new \App\Http\Library\User();
      }
      return $this->_userlib;
    }

}
