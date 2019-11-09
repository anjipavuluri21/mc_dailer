<?php
namespace App\Http\Repository;
use DB;
use App\Notification;
abstract class RepositoryAbstract  
{
    
    #fetch data
    Protected function getData($table){  
       $data = DB::table($table)->get()->toArray(); 
       return $data;       
    }
    #add data
    Protected function save($table,$data){  
       $addData = DB::table($table)->insertGetId($data); 
       return $addData;       
    }
    #update data
    Protected function update($table,$data,$id){
       $updateData = DB::table($table)->where('id', $id)->update($data);
       return $updateData;
    }
    #delete data
    Protected function delete($table,$id){  
       $deleteData = DB::table($table)->where('id',$id)->delete();
       return $deleteData; 
    }

    public function common_notify($data){
      $notify = new Notification;
      if(isset($data['department_from'])){
        $notify->department_from = $data['department_from'];
      }
      if(isset($data['department_to'])){
        $notify->department_from = $data['department_to'];
      }   
      if(isset($data['department_to'])){
        $notify->department_from = $data['department_to'];
      }     
      if(isset($data['emp_id'])){
        $notify->emp_id = $data['emp_id'];
      }  
      $notify->common_id = $data['common_id'];
      $notify->notification_type = $data['notification_type'];
      $notify->message = $data['message'];
      $abc = $notify->save();

      return $abc;
    }  
    
}
