<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcademicController extends Controller
{
      public function pptt()
    {
        return view('academic.pptt');
    }
     public function academic()
    {
        return view('academic.academic');
    }
      public function cna()
    {
        return view('academic.cna');
    }
    public function programs()
    {
        return view('academic.programs');
    }
    public function orthopedics()
    {
        return view('academic.orthopedics');
    }
    public function packages()
    {
        return view('academic.packages');
    }
     public function nursing()
    {
        return view('academic.nursing');
    }
}
