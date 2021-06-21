<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Enrollment;
use App\Models\EnrollmentSubject;
use App\Models\Subject;
use App\Models\User;

use Exception;

class EnrollmentController extends Controller
{
    public function list()
    {
        return response()->json([
            'status_code' => 'SUCCESS',
            'message' => Enrollment::all()
        ]);
    }

    public function detail($control_number)
    {
        $model = Enrollment::where(['control_number'=>$control_number])->first();
        if(!$model){
            $obj = new \stdClass;
            $obj->control_number = "control_number is not found";

            return response()->json([
                'status_code' => 'FAILED',
                'message' => $obj
            ]);
        }

        return response()->json([
            'status_code' => 'SUCCESS',
            'message' => $model
        ]);
    }

    public function create(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'student_number' => 'required',
            'course_code' => 'required',
            'subjects' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status_code' => 'FAILED',
                'message' => $validator->errors()
            ]);
        }
       
        $user = User::where(['student_number'=>$request->student_number])->first();
        if(!$user){
            $obj = new \stdClass;
            $obj->student_number = "student_number field is not found";

            return response()->json([
                'status_code' => 'FAILED',
                'message' => $obj
            ]);
        }

     

        $header = new Enrollment();
        $header->student_number = $user->student_number;
        $header->student_type = "New";
        $header->year_level = 1;

        $date = date_create(now());
        $id = Enrollment::max('id');
        
        if (is_null($id)){
            $id = 1;
        }
        else{
            $id++;
        }
        $header->control_number = date_format($date,"Ym") . str_pad($id, 5, '0', STR_PAD_LEFT);
        $header->course_code = $request->course_code;
        $header->type = "B";

        try{
            $header->save();

            $subjects = $request->subjects;
            // $subjects = json_decode($request->subjects, true);
            foreach($subjects as $key => $value) {
                $subj = new EnrollmentSubject;
                $subj->enrollment_header_id = $header->id;
                $subj->subject_code = $value;
                $subj->save();
            }
        }
        catch(Exception $e){
            return response()->json([
                'status_code' => 'FAILED',
                'message' => $e->getMessage()
            ]); 
        }

        return response()->json([
            'status_code' => 'SUCCESS',
            'message' => $header
        ]); 
    }

    public function update(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'control_number' => 'required',
            'enrollment_status' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status_code' => 'FAILED',
                'message' => $validator->errors()
            ]);
        }
       
        $header = Enrollment::where(['control_number'=>$request->control_number])->first();
        if(!$header){
            $obj = new \stdClass;
            $obj->control_number = "control_number is not found";

            return response()->json([
                'status_code' => 'FAILED',
                'message' => $obj
            ]);
        }

        $header->enrollment_status = $request->enrollment_status;

        try{
            $header->save();
        }
        catch(Exception $e){
            return response()->json([
                'status_code' => 'FAILED',
                'message' => $e->getMessage()
            ]); 
        }

        return response()->json([
            'status_code' => 'SUCCESS',
            'message' => $header
        ]); 
    }

    public function subjects($control_number)
    {
        $header = Enrollment::where(['control_number'=>$control_number])->first();
        if(!$header){
            $obj = new \stdClass;
            $obj->control_number = "control_number is not found";

            return response()->json([
                'status_code' => 'FAILED',
                'message' => $obj
            ]);
        }

        $subjects = EnrollmentSubject::where(['enrollment_header_id'=>$header->id])->get();
        if(!$header){
            $obj = new \stdClass;
            $obj->subjects = "subjects are not found for this control_number";

            return response()->json([
                'status_code' => 'FAILED',
                'message' => $obj
            ]);
        }


        return response()->json([
            'status_code' => 'SUCCESS',
            'message' => $subjects
        ]);
    }

    
    public function findread($student_number)
    {
        $model = Enrollment::where(['student_number'=>$student_number])->first();
        // dd($student_number);
        if(!$model){
            $obj = new \stdClass;
            $obj->student_number = "student_number is not found in enrollment";

            return response()->json([
                'status_code' => 'FAILED',
                'message' => $obj
            ]);
        }

        return response()->json([
            'status_code' => 'SUCCESS',
            'message' => $model
        ]);
    }
}

/*
Route::post('/enrollment/update', [EnrollmentController::class, 'update']);
*/