<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Students;

// use Illuminate\Contracts\Session\Session as SessionSession;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
// use Session;


class StudentsController extends Controller
{
    //cadded by me
    protected $students;

    public function __construct()
    {
        $this->students = new Students();
    }

    // Display Student data in the student form
    public function index()
    {
        $response['students'] = $this->students->all();

        return view('pages.students')->with($response);
    }


    // Viwe Remoce funtion
    public function vewRecords($stu_id)
    {
        $response['students'] = $this->students->find($stu_id);

        return view('pages.student_manage')->with($response);
    }

    public function add()
    {
        return view('pages.add_student');
    }

    // Add student funtion
    public function save(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'address' => 'required',
            'school' => 'required',
            'phone' => 'required',
            'age' => 'required',
            'nic' => 'required',
            'status' => 'required',
        ]);

        // dd($request->all());
        if ($validator->fails()) {
            Session::forget('message');
            return redirect()->back()->withInput()->withErrors($validator);
        } else {
            $this->students->create($request->all());
            return redirect()->back()->with('message', 'Student added successfully');
        }
    }

    public function delete($stu_id){

        $student = $this->students->find($stu_id);
        $student->delete();
        return redirect()->back();
        // return viwe('pages.edit_student')->with($response);
    }


    public function edit($stu_id){

        $response['students'] = $this->students->find($stu_id);
        return view('pages.edit_student')->with($response);
    }


    public function update(Request $request, $student_id){

        $student = $this->students->find($student_id);

        $student->update(array_merge($student->toArray(), $request->toArray()));
        return redirect('students');

    }
}
