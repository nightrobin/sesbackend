<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Models\User;
use Exception;

class UserController extends Controller
{
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required|string|min:1|max:255',
            'first_name' => 'required|string|min:1|max:255',
            'middle_name' => 'string|max:255|nullable',
            'last_name' => 'required|string|min:1|max:255',
            'is_student' => 'int|min:0|max:1',
            'year_level' => 'int|min:1|max:5'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status_code' => 'FAILED',
                'message' => $validator->errors()
            ]);
        }
       
        $user = new User;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->first_name = $request->first_name;
        $user->middle_name = $request->middle_name;
        $user->last_name = $request->last_name;
        $user->is_student = $request->is_student;
        $user->year_level = $request->year_level;
        
        $date = date_create(now());
        $id = User::max('id');
        
        if (is_null($id)){
            $id = 1;
        }
        else{
            $id++;
        }
        $user->student_number = date_format($date,"Y-") . str_pad($id, 5, '0', STR_PAD_LEFT);
        
        try{
            $user->save();
        }
        catch(Exception $e){
            return response()->json([
                'status_code' => 'FAILED',
                'message' => $e->getMessage()
            ]); 
        }

        return response()->json([
            'status_code' => 'SUCCESS',
            'message' => $user
        ]); 
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required|string|min:1|max:255',
            'first_name' => 'required|string|min:1|max:255',
            'middle_name' => 'string|max:255|nullable',
            'last_name' => 'required|string|min:1|max:255',
            'is_student' => 'int|min:0|max:1',
            'year_level' => 'int|min:1|max:5',
            'student_number' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status_code' => 'FAILED',
                'message' => $validator->errors()
            ]);
        }
        
        $datetime = now();
       
        $user = User::where(['student_number'=>$request->student_number])->first();
        if(!$user){
            $obj = new \stdClass;
            $obj->student_number = "student_number field is not found";

            return response()->json([
                'status_code' => 'FAILED',
                'message' => $obj
            ]);
        }

        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->first_name = $request->first_name;
        $user->middle_name = $request->middle_name;
        $user->last_name = $request->last_name;
        $user->is_student = $request->is_student;
        $user->year_level = $request->year_level;
        $user->updated_at = $datetime;

        try{
            $user->save();
        }
        catch(Exception $e){
            return response()->json([
                'status_code' => 'FAILED',
                'message' => $e->getMessage()
            ]); 
        }

        return response()->json([
            'status_code' => 'SUCCESS',
            'message' => $user
        ]); 
    }

    public function read($student_number)
    {
        $user = User::where(['student_number'=>$student_number])->first();
        if(!$user){
            $obj = new \stdClass;
            $obj->student_number = "student_number field is not found";

            return response()->json([
                'status_code' => 'FAILED',
                'message' => $obj
            ]);
        }

        return response()->json([
            'status_code' => 'SUCCESS',
            'message' => $user
        ]); 
    }

    public function delete($student_number)
    {
        $user = User::where(['student_number'=>$student_number])->first();
        if(!$user){
            $obj = new \stdClass;
            $obj->student_number = "student_number field is not found";

            return response()->json([
                'status_code' => 'FAILED',
                'message' => $obj
            ]);
        }

        $user->delete();
        
        return response()->json([
            'status_code' => 'SUCCESS',
            'message' => $user
        ]); 
    }
}
