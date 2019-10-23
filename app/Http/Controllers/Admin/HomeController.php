<?php

namespace App\Http\Controllers\Admin;

use App\Complaint;
use App\Http\Controllers\Controller;
use App\Student;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function index()
    {
        $allcomplaintscount = Complaint::count();

        $allstudentscount = Student::count();

        $reviewedcomplaints = Complaint::where('reviewed', true)->get();

        $reviewedcomplaints2 = count($reviewedcomplaints);

        return view('admin.home', compact(['allcomplaintscount', 'allstudentscount', 'reviewedcomplaints2']));
    }
}
