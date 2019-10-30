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
        // $allstudentscount = Student::count();

        $allcomplaintscount1 = Complaint::where('student_id', Auth::id())->get();

        $reviewedcomplaintscount = Complaint::where(['reviewed' => true, 'student_id' => Auth::id()])->get();

        $mycomplaints = count($allcomplaintscount1);
        $reviewedcomplaints = count($reviewedcomplaintscount);

        return view('home', compact(['mycomplaints', 'reviewedcomplaints']));
    }
}
