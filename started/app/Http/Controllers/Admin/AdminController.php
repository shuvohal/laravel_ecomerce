<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function adminlogin()
    {
        return view('backend.admin.login');
    }

    public function adminloginform(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $admin = Admin::where('email', $request->email)->first();

        if ($admin && Hash::check($request->password, $admin->password)) {
            // Authentication passed: set simple session flag and redirect
            session()->put('ADMIN_LOGIN', true);
            session()->put('ADMIN_ID', $admin->id);
            return redirect()->route('admin.dashboard');
        }

        // Authentication failed — redirect back with error message
        return redirect()->back()
            ->withErrors(['credentials' => 'Invalid email or password'])
            ->withInput();
    }

    public function dashboard()
    {
        return view('backend.home.index');
    }
}

