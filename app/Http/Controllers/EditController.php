<?php

namespace App\Http\Controllers;

use App\Models\BuyVehicle;
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

    public function editbuyvehicle($id)
    {
        $vehicle = BuyVehicle::where('vehicle_id', '=', $id)->get();
        return view('editbuyvehicle', compact('vehicle'));
    }

    public function updatedocuments(Request $request)
    {
        // dd($request->all());
        $imagePath = null;
        $imagePathinvoice = null;
        $imagePathinsurance = null;

        //Images Uploading
        if ($request->hasFile('uploadrc')) {
            $image = $request->file('uploadrc');
            $imagePath = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imagePath);
        }
        if ($request->hasFile('uploadinvoice')) {
            $image = $request->file('uploadinvoice');
            $imagePathinvoice = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imagePathinvoice);
        }
        if ($request->hasFile('uploadinsurance')) {
            $image = $request->file('uploadinsurance');
            $imagePathinsurance = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imagePathinsurance);
        }
        try {
            BuyVehicle::where('vehicle_id', $request->vehicleid)->update([
                'rcnumber' => $request->rcnumber,
                'rcimage' => $imagePath,
                'invoicenumber' => $request->invoicenumber,
                'invoiceimage' => $imagePathinvoice,
                'insuranceid' => $request->insuranceid,
                'insuranceimage' => $imagePathinsurance,
            ]);
            return back()->with('success', "Updated..!!!");
        } catch (\Exception $e) {
            return back()->with('error', "Not Updated.! Try Again..");
        }
    }
}
