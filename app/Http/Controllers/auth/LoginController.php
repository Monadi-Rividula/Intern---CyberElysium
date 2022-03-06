<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function index()
    {
        return view('auth.login');
    }

    // public function store(Request $request)
    // {
    //     $this->validate($request, [
    //         'email' => 'required|email',
    //         'password' => 'required',
    //     ]);

    //     if (!auth()->attempt($request->only('email', 'password'))) {
    //         error_log('Email : '. $request->email);
    //         error_log('Password : '. $request->password);
    //         return back()->with('status', 'Invalid login details');
    //     }

    //     return redirect()->route('dashboard');
    // }

    public function store(Request $request)
    {
        $users = DB::table('users')
            ->where('email', $request->email)
            ->where('password', $request->password)
            ->get();
        
        if (count($users) === 0) {
            error_log('Email : '. $request->email);
            error_log('Password : '. $request->password);
            return back()->with('status', 'Invalid login details');
        }

        return redirect()->route('dashboard');
    }
}
