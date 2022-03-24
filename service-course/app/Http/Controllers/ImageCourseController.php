<?php

namespace App\Http\Controllers;


use App\Models\ImageCourse;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class ImageCourseController extends Controller
{
    public function create(Request $request)
    {
        $ruless = [
            'image' => 'required|url',
            'course_id' => 'required|integer'
        ];

        $data = $request->all();

        $validator = Validator::make($data, $ruless);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ], 400);
        }

        $courseId = $request->input('course_id');
        $course = Course::find($courseId);
        if (!$course){
            return response()->json([
                'status' => 'error',
                'message' => 'course not found'
            ], 404);
        }

        $imagecourse = ImageCourse::create($data);
        return response()->json([
            'status' => 'success',
            'data' => $imagecourse
        ]);
    }

    public function destroy($id)
    {
        $imagecourse = ImageCourse::find($id);

        if(!$imagecourse) {
            return response()->json([
                'status' => 'error',
                'message' => 'image course not found'
            ], 404);
        }

        $imagecourse->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'image course deleted'
        ]);
    }
    
}
