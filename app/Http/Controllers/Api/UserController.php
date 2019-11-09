<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator,Hash;
use App\User;

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
                'name.required' => 'Entered name already exits',
                'mobile_no' => 'Enter mobile no',
                'comments' => 'Enter Comments',      
            ];
            /* validation request rules  */
            $rules = [
                'password' => '',
                'email' => '',
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
                'email'=>$request->email,
                'mobile_no' =>$request->mobile_no,
                'comments' =>$request->comments,
                'password'=>Hash::make($request->password)
                
            );
//           print_r($insertArray);exit;
            $user= User::create($insertArray);
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
                return response()->json(['success' => true, 'message' => 'user found' ,'result'=>$user]);
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
//                'email.required' => 'Please enter email',
                'comments.required' => 'Please enter email',
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
                'comments'=>$request->comments,
                'mobile_no'=>$request->mobile_no,
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
