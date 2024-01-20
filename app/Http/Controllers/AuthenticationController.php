<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Customer;
use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    public function loginuser(Request $request)
    {
        $credentials = $request->only('customerphoneno', 'password');
        $data = Customer::where('customerphoneno', '=', $credentials)->first();

        if ($data && Auth::guard('customer')->attempt($credentials)) {
            // dd("HELLO");
            // Authentication passed...
            return redirect()->route('viewuserpanelhome');
        }
        return redirect()->route('viewloginpage')->with('error', 'Invalid credentials');
    }

    public function logout()
    {
        \Session::flush();
        Auth::guard('customer')->logout();
        return redirect()->route('login');
    }
    public function logoutuserpanel()
    {
        \Session::flush();
        Auth::guard('customer')->logout();
        return redirect()->route('viewloginpage');
    }

}
