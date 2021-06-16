<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\College;
use App\Models\Course;

class CollegeController extends Controller
{
    public function list()
    {
        return response()->json([
            'status_code' => 'SUCCESS',
            'message' => College::all()
        ]);
    }

    public function detail($college_code)
    {
        $model = College::where(['college_code'=>$college_code])->first();
        if(!$model){
            $obj = new \stdClass;
            $obj->college_code = "college_code is not found";

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

    public function courses($college_code)
    {
        $model = Course::where(['college_code'=>$college_code])->get();

        if(!$model){
            $obj = new \stdClass;
            $obj->college_code = "college_code have no courses";

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