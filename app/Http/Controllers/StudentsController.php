<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Students;

class StudentsController extends Controller
{
    //

    //cadded by me
    protected $students;

    public function __construct()
    {
        $this->students = new Students();
    }

    public function index()
    {
        $response['students'] = $this->students->all();

        return view('pages.students')->with($response);
}
}
