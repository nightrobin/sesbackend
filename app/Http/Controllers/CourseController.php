<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function list()
    {
        return response()->json([
            'status_code' => 'SUCCESS',
            'message' => Course::all()
        ]);
    }

    public function detail($course_code)
    {
        $model = Course::where(['course_code'=>$course_code])->first();
        if(!$model){
            $obj = new \stdClass;
            $obj->course_code = "course_code is not found";

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