<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Complaint;
use App\Student;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $allcomplaints = Complaint::where('reviewed', !true)->get();

        return view('admin.getallcomplaints', compact('allcomplaints'));
    }

    public function show($id)
    {

        $complaint = Complaint::findOrFail($id);

        return view('admin.showcomplaint', compact('complaint'));
    }

    public function update(Complaint $complaint)
    {
        $complaint->update([
            'reviewed' => request()->has('reviewed')
        ]);

        return back();
    }

    public function showreviewed(Complaint $complaint)
    {
        $reviewedcomplaints = $complaint->where('reviewed', true)->get();

        return view('admin.reviewedcomplaints', compact('reviewedcomplaints'));
    }

    public function getstudents(Student $student)
    {
        $allstudents = $student::all();

        return view('admin.allstudents', compact('allstudents'));
    }

    public function delete(Complaint $complaint)
    {
        $complaint->delete();

        return redirect('admin/complaints/reviewed')->with('status', 'Complaint successfully deleted.');
    }
}
