<?php
namespace App\Http\Repository;
use DB;
use Auth;
use App\Department;
use App\User;
use App\TaskAssign;
use App\TicketAssign;
use App\Designation;
use App\Task;
use App\Ticket;
use App\Hardware;
use App\Software;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\DataTables;
use Carbon\Carbon; 

class UserRepository extends RepositoryAbstract{

	protected $_usermodel = null;

	public function saveUser($data){
	   $user = new User();
	   $user->name = $data['name'];
     $user->email = $data['email'];
	   $user->mobile_no =$data['mobile_number'];
     $user->designation =$data['designation'];
     $user->department =$data['department'];
     $user->gender =$data['gender'];
     $user->password = Hash::make($data['password']);
	   $user->type = $data['user_type'];
      
    $user->save();
    return $user;
	}
  public function updateUser($data){
     $user = $this->getuserModel()->find($data['id']);
     $user->name = $data['name'];
     $user->mobile_no =$data['mobile_no'];
     $user->designation =$data['designation'];
     $user->department =$data['department'];
     $user->gender =$data['gender'];
     $user->type = $data['user_type'];
      
    $user->save();
    return $user;    
  }
  public function allUser(){
    $data = $this->getuserModel()->where('is_delete',0)->get();

    return Datatables::of($data)
       ->editColumn('user_type', function ($data) {         
            if($data->type == 1){
              $type = "Admin";
            } 
            elseif ($data->type == 2) {
              $type = "User";
           }         
           return $type;
        })
       ->editColumn('gender', function ($data) {         
            if($data->gender == 1){
              $type = "Male";
            } 
            elseif ($data->gender == 2) {
              $type = "Female";
           }         
           return $type;
        })
       ->addColumn('action', function ($data) {         
           // return '<audio controls><source src="uploads/audio/'.$data->audio.'" type="audio/mpeg"></audio><a href="'. url('edit_user/').'/'.$data->id.'" title="Edit Task" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a><a href="#" style="margin-left:5px;" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>';              
            return '<a href="'. url('edit_user/').'/'.$data->id.'" title="Edit Task" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a><a href="#" style="margin-left:5px;" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>';              
        })
     ->escapeColumns([])
        ->addIndexColumn()->make(true);
  }
    public function getuser($id){
      $data = $this->getuserModel()->where('id',$id)->first();
      return $data;
    } 

    /*-----------------------------------------------------------------------------------*/
    /*-----------------------------------------------------------------------------------*/

    public function getuserModel(){

      if(!($this->_usermodel instanceof User)){
        $this->_usermodel = new User();
      }
      return $this->_usermodel;
    }
   
}