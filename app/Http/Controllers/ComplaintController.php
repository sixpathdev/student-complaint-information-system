<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Complaint;
use App\User;
use App\Student;
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
        $complaints = Complaint::where('student_id', Auth::id())->get();

        return view('allcomplaints', compact('complaints'));

    }

    public function create()
    {
        return view('createcomplaint');
    }

    public function show(Complaint $id)
    {

        $complaint = Complaint::findOrFail($id);

        return view('showcomplaint', compact('complaint'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|unique:complaints|max:40|min:5',
            'body' => 'required|string|min:5|max:255'
        ]);

        $complaint = new Complaint();
        $student = Auth::user();

        $complaint->title = $request->input('title');
        $complaint->body = $request->input('body');
        $complaint->student_id = $student->id;
        $complaint->save();

        $request->session()->flash('status', 'Complaint created!');

        return redirect('home');
    }
}
