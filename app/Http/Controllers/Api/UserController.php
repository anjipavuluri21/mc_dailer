<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator,Hash;
use App\User;
use DB;
class UserController extends Controller
{
    public function test() {
//       echo Hash::make('123456');
        echo "welcome";
    }
    public function login(Request $request){
        $messages = [
            'password.required' => 'Please enter password',
//            'name.required' => 'Please enter name',
            'email.required'=>'Please enter email',
        ];
        /* validation request rules  */
        $rules = [
            'password' => 'required',
//            'name' => 'required',
            'email'=> 'required',
        ];  
         $validator = Validator::make($request->all(), $rules, $messages);
        
         if ($validator->fails()) {
            return response()->json(['success' => false, 'error' => $validator->messages()]);
        }
       
        $whereArray=array(
            'email'=>$request->email,
            //'password'=>Hash::make($request->password)
        );
        $user= User::where($whereArray)->first();
        // dd($user);
         // 1 is success, 2 is failure
        if($user){
        if( Hash::check($request->password,$user->password )) {
            return response()->json(['success' => true, 'message' => '1','result'=>$user]);
        }else{
            return response()->json(['success' => false, 'message' => '2']);
        }
     }else{
        return response()->json(['success' => false, 'message' => 'invalid credentials']);
       
     }
    }
 
    public function register(Request $request)
        {
            
            $messages = [
                'password.required' => 'Please enter password',
                'email.required' => 'Please enter email',
                'email.email' => 'Please enter valid email',
                'email.unique' => 'Entered email already exits',
                'name.required' => 'Please enter name',
                'date.required' => 'Please enter date',
                'mobile_no' => 'Enter mobile no',
                'comments' => 'Enter Comments',      
                'audio' => 'Audio file required',      
            ];
            /* validation request rules  */
            $rules = [
                'password' => '',
                'email' => '',
                'date' => '',
                'name' => '',
                'mobile_no' => 'required',
                'comments' => 'required',
                'audio' => '',
            ];
             $validator = Validator::make($request->all(), $rules, $messages);
            
             if ($validator->fails()) {
                return response()->json(['success' => false, 'error' => $validator->messages()]);
            }
         
             $file = $request->file('audio');
   
//      //Display File Name
//     $file->getClientOriginalName();
//     //Display File Extension
//     $file->getClientOriginalExtension();
//      //Display File Real Path
//      $file->getRealPath();
//      //Display File Size
//      $file->getSize();
//      //Display File Mime Type
//     $file->getMimeType();
   $fileName=$file->getClientOriginalName();
      //Move Uploaded File
      //$fileName = date("Ymd_His") . rand(0000, 9999) . '_mc_dailer';
      $destinationPath = 'uploads/audio';
      $file->move($destinationPath,$file->getClientOriginalName());
           
            $insertArray=array(
                'name'=>$request->name,
                'audio'=>$fileName,
//                'date'=>$request->date,
//                'email'=>$request->email,
                'mobile_no' =>$request->mobile_no,
                'comments' =>$request->comments,
//                'password'=>Hash::make($request->password),
                'type'=>2
                
            );
            $user= User::insert($insertArray);
            //$user= DB::table('users')->insert($insertArray);
            if($user){
                return response()->json(['success' => true, 'message' => 'user register successfully']);
            }else{
                return response()->json(['success' => false, 'message' => 'Internal server error']);
            }

        }
        public function profile($userId) {
            
            $user= User::find($userId);
            if($user){
                return response()->json(['success' => true, 'message' => 'user found' ,'result'=>$user]);
            }else{
                return response()->json(['success' => false, 'message' => 'no user found']);
            }
         }
        
         public function userlist(){
            $user= User::all();
            if($user){
                return response()->json(['success' => true, 'message' => 'user found' ,'result'=>$user,'audioPath'=>base_url().'uploads/audio/']);
            }else{
                return response()->json(['success' => false, 'message' => 'no user found']);
            }
         }
//         public function all_list(){
//             $user=User::all();
//             if($user){
//                 return responce()->json(['success' => true, 'message' => 'list found', 'result'=>$user]);
//             }else{
//                 return responce()->json(['success' => false, 'message' => 'no user found']);
//             }
//         }
         public function registerNew(Request $request)
        {
            
            $messages = [
                'email.required' => 'Please enter email',
//                'comments.required' => 'Please enter email',
                'name.required' => 'Please enter name',
		'mobile_no.required' => 'Please mobile_no ',
            ];
           
            /* validation request rules  */
            $rules = [
                 'email' => 'required',
                 'name' => 'required',
//		 'date' => 'required',
		 'mobile_no' => 'required',
            ];
             
             $validator = Validator::make($request->all(), $rules, $messages);
            
             if ($validator->fails()) {
                return response()->json(['success' => false, 'error' => $validator->messages()]);
            }
//            echo "welcome";
//            exit;
            $insertArray=array(
                
                'name'=>$request->name,
//                'comments'=>$request->comments,
                'mobile_no'=>$request->mobile_no,
                'email'=>$request->email,
//                'date'=>$request->date,
            );
            $user= User::create($insertArray);
            if($user){
                return response()->json(['success' => true, 'message' => 'user register successfully']);
            }else{
                return response()->json(['success' => false, 'message' => 'Internal server error']);
            }

        }
        
        public function data(Request $request)
        {
            
            $messages = [
//                'password.required' => 'Please enter password',
//                'email.required' => 'Please enter email',
//                'email.email' => 'Please enter valid email',
//                'email.unique' => 'Entered email already exits',
                'name.required' => 'Please enter name',
                'name.required' => 'Entered name already exits',
                'mobile_no' => 'Enter mobile no',
                'comments' => 'Enter Comments',      
            ];
            /* validation request rules  */
            $rules = [
//                'password' => 'required',
//                'email' => 'required|email|unique:users',
                'name' => 'required|unique:users',
                'mobile_no' => 'required',
                'comments' => 'required',
            ];
             $validator = Validator::make($request->all(), $rules, $messages);
            
             if ($validator->fails()) {
                return response()->json(['success' => false, 'error' => $validator->messages()]);
            }
         
            $insertArray=array(
                 
                'name'=>$request->name,
//                'email'=>$request->email,
                'mobile_no' =>$request->mobile_no,
                'comments' =>$request->comments,
//                'password'=>Hash::make($request->password)
                
            );
//           print_r($insertArray);exit;
            $user= User::create($insertArray);
            if($user){
                return response()->json(['success' => true, 'message' => 'user register successfully']);
            }else{
                return response()->json(['success' => false, 'message' => 'Internal server error']);
            }

        }
}
