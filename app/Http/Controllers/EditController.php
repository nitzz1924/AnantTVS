<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class EditController extends Controller
{
    public function editcustomer($id)
    {
        $customer = Customer::find($id);
        return view('editcustomer', compact('customer'));
    }

    public function updatecustomer(Request $request)
    {
        // dd($request->all());
        try {
            Customer::where('id', $request->customerid)->update([
                'customername' => $request->customername,
                'customerphoneno' => $request->customerphoneno,
                'customeremailaddress' => $request->customeremailaddress,
                'customercity' => $request->customercity,
                'customerstate' => $request->customerstate,
                'customercountry' => $request->customercountry,
                'customeraddress' => $request->customeraddress,
            ]);
            return redirect()->route('viewallcustomers')->with('success', "Updated..!!!");
        } catch (\Exception $e) {
            return redirect()->route('editcustomer')->with('error', 'Customer Not Updated..Try Again.....');
        }
    }
}
