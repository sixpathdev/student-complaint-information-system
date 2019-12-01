<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    public function showRegForm()
    {
        return view('adminreg', [
            'title' => 'Admin Register',
            'registerRoute' => 'admin.register',
        ]);
    }

    public function register(Request $request)
    {
        $this->validator($request);

        // request()->validate([
        //     'name' => ['required', 'string', 'min:4', 'max:50',],
        //     'email' => ['required', 'email', 'string', 'min:4', 'max:80', 'unique:admins'],
        //     'staffId' => ['required', 'string', 'min:5', 'max:7', 'unique:admins'],
        //     'password' => ['required', 'string', 'min:4', 'max:50',],
        //     'phone' => ['required', 'string', 'min:11', 'max:11', 'unique:admins'],
        // ]);

        $uri = $request->path();

        if ($uri == 'admin/register') {

            $admin = new Admin();

            $admin->name = $request->input('name');
            $admin->email = $request->input('email');
            $admin->staffId = $request->input('staffid');
            $admin->password = Hash::make($request->input('name'));
            $admin->phone = $request->input('phone');
            $admin->save();

            $request->session()->flash('message', 'Admin successfully registered!.');

            return redirect('/admin/login');
        }

        //Authentication failed...
        return $this->registrationFailed();
    }

    private function validator(Request $request)
    {
        //validation rules.
        $rules = [
            'name' => 'required|string|min:4|max:50',
            'email'    => 'required|unique:admins|email|min:5|max:90',
            'password' => 'required|string|min:4|max:255',
            'staffid' => 'required|unique:admins|string|min:5|max:10',
            'phone' => 'required|unique:admins|string|min:11|max:11'
        ];
        //custom validation error messages.
        // $messages = [
        //     'email.exists' => 'This email already exist',
        //     'staffid.exists' => 'This staff id already exist',
        //     'phone.exists' => 'This phone number already exist',
        // ];
        //validate the request.
        // $request->validate($rules, $messages);
        $request->validate($rules);
    }

    private function registrationFailed()
    {
        return redirect()
            ->back()
            ->withInput()
            ->with('error', 'Registration failed, please try again!');
    }
}
