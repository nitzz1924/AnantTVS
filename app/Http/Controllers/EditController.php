<?php

namespace App\Http\Controllers;

use App\Models\BuyVehicle;
use App\Models\Vehicle;
use App\Models\Master;
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
        $vehicle = BuyVehicle::where('id', '=', $id)->get();
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

    //Delete Particular Customer
    public function deleteparticularcustomer($id)
    {
        $customers = Customer::find($id);
        $customers->delete();
        return redirect()->route('viewallcustomers')->with('success', "Customer Deleted..!!!");
    }
    //Delete Particular Vehicle
    public function deleteparticularvehicle($id)
    {
        $vehicles = Vehicle::find($id);
        // dd($vehicles);
        $vehicles->delete();
        return redirect()->route('viewvehicles')->with('success', "Vehicle Deleted..!!!");
    }

    public function editvehicle($id)
    {
        // $imagePath = null;
        // if ($request->hasFile('uploadrc')) {
        //     $image = $request->file('uploadrc');
        //     $imagePath = time() . '.' . $image->getClientOriginalExtension();
        //     $image->move(public_path('uploads'), $imagePath);
        // }
        $vehicles = Vehicle::where('id', '=', $id)->get();
        $masterdata = Master::where('type', '=', 'Vehicle')->get();
        $masterdatacolor = Master::where('type', '=', 'color')->get();
        // dd($vehicles);
        return view('editaddedvehicle', compact('vehicles','masterdatacolor'));
    }

    public function updatevehicle(Request $request)
    {
        // dd($request->all());
        $imagePath = null;
        if ($request->hasFile('bannerimage')) {
            $image = $request->file('bannerimage');
            $imagePath = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path("uploads/vehicle/"), $imagePath);
        }

        // Mutiple image upload
        $image = array();
        if($files = $request->file('image')){
            foreach ($files as $file) {
                $image_name = md5(rand(1000, 10000));
                $extension = strtolower($file->getClientOriginalExtension());
                $image_fullname = $image_name.'.'.$extension;
                $uploaded_path = "public/uploads/vehicle/";
                $image_url = $uploaded_path.$image_fullname;
                $file->move($uploaded_path, $image_fullname);
                $image[] = $image_url;
            }
        }
        $vehiclesdata = Vehicle::find($request->vehicleid);
        $slideimgs = count($image) > 0 ? implode(',', $image) : null;

        $allstrings = $slideimgs == null
            ? ($vehiclesdata->image ?? null)
            : ($vehiclesdata->image == null
                ? $slideimgs
                : $slideimgs . ',' . $vehiclesdata->image);
        try{

            Vehicle::where('id',$request->vehicleid)->update([
                'name'=>$request->name,
                'modelno'=>$request->modelno,
                'price'=>$request->price,
                'discription'=>$request->discription,
                'color'=>$request->colors,
                'bannerimage' => $imagePath==null?$request->pbannerimg:$imagePath,
                'image' => $allstrings,
            ]);
            return back()->with('success', 'Vehicle Updated..!!');
        }catch (\Exception $v) {
            return redirect()->route('vieweditaddedvehicle')->with('error', 'Not Updated Try Again...');
        }
    }


}
