<?php

namespace App\Http\Controllers;

use App\Complaint;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $allstudentscount = Student::count();

        $allcomplaintscount = Complaint::where(['reviewed' => true, 'student_id' => Auth::id()])->get();

        $reviewedcomplaints = count($allcomplaintscount);

        return view('home', compact(['allstudentscount', 'reviewedcomplaints']));
    }
}
