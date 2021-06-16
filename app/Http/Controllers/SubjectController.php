<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;

class SubjectController extends Controller
{
    public function list()
    {
        return response()->json([
            'status_code' => 'SUCCESS',
            'message' => Subject::all()
        ]);
    }

    public function detail($subject_code)
    {
        $model = Subject::where(['subject_code'=>$subject_code])->first();
        if(!$model){
            $obj = new \stdClass;
            $obj->subject_code = "subject_code is not found";

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
