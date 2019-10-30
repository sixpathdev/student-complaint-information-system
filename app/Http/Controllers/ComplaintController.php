<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Complaint;
// use App\Student;
use Illuminate\Support\Facades\Auth;

class ComplaintController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $complaints = Complaint::where(
            [
                'reviewed' => !true,
                'student_id' => Auth::id()
            ]
        )->get();

        return view('allcomplaints', compact('complaints'));
    }

    public function create()
    {
        return view('createcomplaint');
    }

    public function show($id)
    {

        $complaint = Complaint::findOrFail($id);

        abort_if($complaint->student_id !== Auth::id(), 403);
        return view('showcomplaint', compact('complaint'));
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'title' => 'required|string|unique:complaints|max:40|min:5',
                'body' => 'required|string|min:5|max:255'
            ],
            [
                'title.exists' => 'These credentials do not match our records.',
            ]
        );

        $complaint = new Complaint();
        $student = Auth::user();

        $complaint->title = $request->input('title');
        $complaint->body = $request->input('body');
        $complaint->student_id = $student->id;
        $complaint->save();

        $request->session()->flash('status', 'Complaint created!');

        return redirect('/complaints');
    }

    public function edit(Complaint $complaint)
    {
        return view('editcomplaint', compact('complaint'));
    }

    public function update(Complaint $complaint)
    {
        $complaint->title = request('title');
        $complaint->body = request('body');
        $complaint->save();

        return redirect('/complaints')->with('status', 'Complaint updated');
    }

    public function delete(Complaint $complaint)
    {
        $complaint->delete();

        return redirect('/complaints')->with('status', 'Complaint successfully deleted.');
    }

    public function reviewedcomplaints(Complaint $complaint)
    {
        $reviewedcomplaints = $complaint->where(
            [
                'reviewed' => true,
                'student_id' => Auth::id()
            ]
        )->get();

        return view('reviewedcomplaints', compact('reviewedcomplaints'));
    }
}
