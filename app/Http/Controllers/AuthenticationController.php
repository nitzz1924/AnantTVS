<?php

namespace App\Http\Controllers;
use App\Models\Lead;
use App\Models\MakeRequest;
use App\Models\TestRide;
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

    public function verifyotp(Request $request)
    {
      //dd($request->all());
        $reqdata = [$request->otp1,$request->otp2,$request->otp3,$request->otp4,$request->otp5,$request->otp6];
        $optnumber = implode($reqdata);

        $leaddata = Lead::where('id', $request->id)->where('randomno', $optnumber)->first();
        if($leaddata){
            $leaddata->update([
                'verifystatus' => "1",
            ]);
            return back()->with('success','Thank you we will reach you soon');
        }else{
            return back()->with('failure','Enter Valid Details..!!!!!!!!');
        }
    }
    public function verifytestrideotp(Request $request)
    {
        // dd($request->all());
        $reqdata = [$request->otptest1,$request->otptest2,$request->otptest3,$request->otptest4,$request->otptest5,$request->otptest6];
        $optnumber = implode($reqdata);

        $testridedata = TestRide::where('id', $request->testid)->where('randomno', $optnumber)->first();
        if($testridedata){
            $testridedata->update([
                'verifystatus' => "1",
            ]);
            return back()->with('successtest','Thank you we will reach you soon');
        }else{
            return back()->with('failuretest','Invalid Details..!!!!!!!!');
        }
    }
    public function verifymakerequestotp(Request $request)
    {
        // dd($request->all());
        $reqdata = [$request->otpreq1,$request->otpreq2,$request->otpreq3,$request->otpreq4,$request->otpreq5,$request->otpreq6];
        $optnumber = implode($reqdata);

        $testridedata = MakeRequest::where('id', $request->makerequestid)->where('randomno', $optnumber)->first();
        if($testridedata){
            $testridedata->update([
                'verifystatus' => "1",
            ]);
            return back()->with('successmakerequest','Thank you we will reach you soon');
        }else{
            return back()->with('failuremakerequest','Invalid Details..!!!!!!!!');
        }
    }
}
