<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Complaint;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $allcomplaints = Complaint::all();

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
}
