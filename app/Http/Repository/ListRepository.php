<?php
namespace App\Http\Repository;
use DB;
use Auth;
use App\Lists;
use App\LeadNumber;

use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\DataTables;
use Carbon\Carbon; 

class ListRepository extends RepositoryAbstract{

	protected $_listmodel = null;
  protected $_leadmodel = null;

	public function saveLeadnumber($data){
	   $leadnumber = new LeadNumber();
     $leadnumber->list_id = $data['list_id'];
	   $leadnumber->name = $data['name'];
     $leadnumber->phone_number = $data['phone_number'];
	   $leadnumber->comments =$data['comments'];
      
      $leadnumber->save();
      return $leadnumber;
	}
  public function saveList($data){
      $lists = new Lists();
      $lists->list_name = $data['list_name'];
      $lists->list_type = $data['list_type'];
      
      $lists->save();
      return $lists;    
  }
  public function updateLeadnumber($data){
     $leadnumber = $this->getleadModel()->find($data['id']);
     $leadnumber->name = $data['name'];
     $leadnumber->phone_number = $data['phone_number'];
     $leadnumber->comments =$data['comments'];
      
    $leadnumber->save();
    return $leadnumber;    
  }
  public function allLists(){
    $data = $this->getlistModel()->get();

    return Datatables::of($data)
         ->editColumn('total_leads', function ($data) { 
            $total_leads = $this->getleadModel()->where('list_id',$data['id'])->count();        
            return $total_leads;           
        })
         ->editColumn('good_leads', function ($data) {         
            $total_leads = $this->getleadModel()->where('list_id',$data['id'])->count();        
            return $total_leads;          
        })
       ->addColumn('action', function ($data) {         
            return '<a href="'. url('list_details/').'/'.$data->id.'" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></a><a style="margin-left:5px;" href="'. url('edit_lead/').'/'.$data->id.'" title="Edit Task" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a><a href="#" style="margin-left:5px;" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>';              
        })
     ->escapeColumns([])
        ->addIndexColumn()->make(true);
  }
  public function getSinglelist($id){
    //$data = $this->getlistModel()->where()->('id',$id)->get();
    //return $data;
  }
  public function allLeads(){
    $data = $this->getleadModel()->get();

    return Datatables::of($data)
       ->addColumn('action', function ($data) {         
            return '<a href="'. url('edit_lead/').'/'.$data->id.'" title="Edit Task" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a><a href="#" style="margin-left:5px;" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>';              
        })
     ->escapeColumns([])
        ->addIndexColumn()->make(true);
  }
    public function getLeadnumber($id){
      $data = $this->getleadModel()->where('id',$id)->first();
      return $data;
    } 

    /*-----------------------------------------------------------------------------------*/
    /*-----------------------------------------------------------------------------------*/
    public function getlistModel(){

      if(!($this->_listmodel instanceof Lists)){
        $this->_listmodel = new Lists();
      }
      return $this->_listmodel;
    }

    public function getleadModel(){

      if(!($this->_leadmodel instanceof LeadNumber)){
        $this->_leadmodel = new LeadNumber();
      }
      return $this->_leadmodel;
    }
   
}