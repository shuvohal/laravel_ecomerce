<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    public function adminlogin()
    {
        return view('backend.admin.login');
    }

    public function adminloginform(Request $request)
    {
        $admin = Admin::where('email', $request->email)->first();

        if ($admin && \Hash::check($request->password, $admin->password)) {
            // Authentication passed
            // You can set session or redirect to admin dashboard
            return redirect()->route('admin.dashboard'); // Example redirect
        } else {
            // Authentication failed
            return redirect()->back()->withErrors(['Invalid credentials']);
        }
    }
}
