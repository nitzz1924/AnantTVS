<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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

    public function changepassword(Request $request)
    {
        // dd($request->newpassword);
        $userdata = Auth::user();
        // dd($userdata);
        if (Hash::check($request->oldpassword, $userdata->password)) {
            $userdata->update([
                'password' => Hash::make($request->newpassword),
            ]);
            return redirect()->route('viewadminprofile')->with('success', 'Password Changed successfully..!!!!');
        } else {
            return redirect()->route('viewadminprofile')->with('error', 'Fail to reset try again...');
        }
    }

}
