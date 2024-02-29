<?php

namespace App\Http\Controllers;

use App\Models\BuyVehicle;
use App\Models\Customer;
use App\Models\Lead;
use App\Models\Vehicle;
use App\Models\TestRide;
use App\Models\MakeRequest;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function createvehicle(Request $req)
    {
        // dd($req->all());
        try {
            $req->validate([
                'name' => 'required',
                'type' => 'required',
                'modelno' => 'required',
                'price' => 'required',
                'color' => 'required',
            ]);

            $data = new Vehicle;
            $data->name = $req->name;
            $data->type = $req->type;
            $data->modelno = $req->modelno;
            $data->price = $req->price;
            $data->color = $req->color;
            $data->discription = $req->discription;
            $data->status = 1;

             //Single Image Upload
            if ($req->hasFile('bannerimage')) {
                $bannerimage = $req->file('bannerimage');
                $bannerimagePath = time() . '.' . $bannerimage->getClientOriginalExtension();
                $bannerimage->move(public_path("uploads/vehicle/"), $bannerimagePath);
                $data->bannerimage = $bannerimagePath;
            }

            //Mutiple Image Upload
            $image = array();
            if ($files = $req->file('image')) {
                foreach ($files as $file) {
                    $image_name = md5(rand(1000, 10000));
                    $extension = strtolower($file->getClientOriginalExtension());
                    $image_fullname = $image_name . '.' . $extension;
                    $uploaded_path = "uploads/vehicle/";    //for live server add 'public/uploads/vehicle/'
                    $image_url = $uploaded_path . $image_fullname;
                    $file->move($uploaded_path, $image_fullname);
                    $image[] = $image_url;
                }
            }
            $data->image = count($image) > 0 ? implode(',', $image) : null;
            $data->save();
            return back()->with('success', 'Vehicle Inserted Successfully..!!!!');
        } catch (\Exception $v) {
            return redirect()->route('viewaddvehicle')->with('error', 'Vehicle Not Inserted Try Again...');
        }
    }

    public function updatestatus(Request $req)
    {
        $id = $req->input('id');
        $status = $req->input('status');
        $data = Vehicle::find($id);
        $data->status = $status;
        $data->save();
        return response()->json(['message' => 'Status updated successfully']);
    }

    public function updatenumberplatestatus(Request $req)
    {

        $id = $req->record_id;
        $status = $req->status;
        $data = BuyVehicle::find($id);
        if (!$data) {
            return response()->json(['error' => 'Record not found'], 404);
        }
        // Update the status
        $data->numberplatestatus = $status;
        $data->save();
        return response()->json(['message' => 'Number Plate Status updated']);
    }

    public function createcustomer(Request $req)
    {
        // dd($req->all());
        try {
            $req->validate([
                'customername' => 'required',
                'customerphoneno' => 'required',
                'customeremailaddress' => 'required|email|unique:customers',
                'customercity' => 'required',
                'customerstate' => 'required',
                'customercountry' => 'required',
                'customeraddress' => 'required',
            ]);

            Customer::create([
                'customername' => $req->customername,
                'customerphoneno' => $req->customerphoneno,
                'customeremailaddress' => $req->customeremailaddress,
                'customercity' => $req->customercity,
                'customerstate' => $req->customerstate,
                'customercountry' => $req->customercountry,
                'customeraddress' => $req->customeraddress,
                'password' => bcrypt('12345678'),
            ]);
            return back()->with('success', 'Customer Added Successfully..!!!!');
        } catch (\Exception $c) {
            //  return redirect()->route('viewaddcustomer')->with('error', $c->getMessage());
            return redirect()->route('viewaddcustomer')->with('error', 'Customer Not Added Try Again...');
        }
    }

    public function filtervehicle($selectedtype)
    {
        $vehicle = Vehicle::where('type', $selectedtype)->get();
        return response()->json(['vehicle' => $vehicle]);
    }

    public function createbuyvehicle(Request $req)
    {

        try {
            $req->validate([
                'chassisnumber' => 'unique:buy_vehicles',
                'rcnumber' => 'unique:buy_vehicles',
            ]);
            $imagePath = null;
            $imagePathinvoice = null;
            $imagePathinsurance = null;

            //Images Uploading
            if ($req->hasFile('uploadrc')) {
                $image = $req->file('uploadrc');
                $imagePath = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads'), $imagePath);
            }
            if ($req->hasFile('uploadinvoice')) {
                $image = $req->file('uploadinvoice');
                $imagePathinvoice = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads'), $imagePathinvoice);
            }
            if ($req->hasFile('uploadinsurance')) {
                $image = $req->file('uploadinsurance');
                $imagePathinsurance = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads'), $imagePathinsurance);
            }

            BuyVehicle::create([
                'customer_id' => $req->customerid,
                'vehicle_id' => $req->vehicle,
                'vehicletype' => $req->type,
                'chassisnumber' => $req->chassisnumber,
                'color' => $req->color,
                'rcnumber' => $req->rcnumber,
                'invoicenumber' => $req->invoicenumber,
                'insuranceid' => $req->insuranceid,
                'rcimage' => $imagePath,
                'invoiceimage' => $imagePathinvoice,
                'insuranceimage' => $imagePathinsurance,
                'numberplatestatus' => null,
            ]);
            return redirect()->route('viewallcustomers')->with('success', 'Vechile Buyed!!!!');
        } catch (\Exception $bv) {
            // return redirect()->route('viewallcustomers')->with('error', $bv->getMessage());

            return redirect()->route('viewallcustomers')->with('error', 'Vehicle Not Buyed Try Again...');
        }
    }

    public function createlead(Request $req)
    {
        try {
            $req->validate([
                'phoneno' => 'required'
            ]);
            $lead = Lead::create([
                'customerstatus'=>$req->customerstatus,
                'name' => $req->name,
                'phoneno' => $req->phoneno,
                'randomno' => "1234",
                'verifystatus'=> "1",
            ]);
            return back()->with('success', 'We will reach you soon..!!!');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function form_submit(Request $req)
    {
        // dd($req->all());
        $randomNumber = rand(100000, 999999);
        $data = new Lead;
        $data->name=$req->input('newcustomername');
        $data->phoneno=$req->input('newcustomerphone');
        $data->customerstatus = $req->input('customerstatus');
        $data->randomno=$randomNumber;
        $data->save();
        $responseData = [
            'msg' => 'success',
            'data' => $data->toArray(),
        ];
        return response()->json($responseData);
    }

    public function create_testride(Request $request)
    {
        // return $request->post();
        $randomNumber = rand(100000, 999999);
        $data = new TestRide;
        $data->customername=$request->input('customername');
        $data->customerphoneno=$request->input('customerphoneno');
        $data->type=$request->input('type');
        $data->vehicle=$request->input('vehicle');
        $data->randomno=$randomNumber;
        $data->save();
        $responseDatatest = [
            'msg' => 'success',
            'data' => $data->toArray(),
        ];
        return response()->json($responseDatatest);
    }

    public function create_makerequest(Request $req)
    {
         // return $req->post();
         $randomNumber = rand(100000, 999999);
         $data = new MakeRequest;
         $data->requestphoneno=$req->input('requestphoneno');
         $data->requestcomments=$req->input('requestcomments');
         $data->randomno=$randomNumber;
         $data->save();
         $responseDatareq = [
             'msg' => 'success',
             'data' => $data->toArray(),
         ];
         return response()->json($responseDatareq);
    }
}
