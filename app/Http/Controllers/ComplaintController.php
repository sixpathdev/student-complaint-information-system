<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Complaint;
use App\User;
use App\Student;

class ComplaintController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('createcomplaint');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|unique:complaints|max:40|min:5',
            'body' => 'required|string|min:5|max:255'
        ]);

        $complaint = new Complaint();

        $complaint->title = $request->input('title');
        $complaint->body = $request->input('body');
        $complaint->save();

        $request->session()->flash('status', 'Complaint created!');
        
        return redirect('home');
    }
}
